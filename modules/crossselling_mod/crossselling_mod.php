<?php
/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class CrossSelling_Mod extends Module
{
	private $html;

	public function __construct()
	{
		$this->name = 'crossselling_mod';
		$this->tab = 'front_office_features';
		$this->version = '0.9.7';
		$this->author = 'IQIT-COMMERCE.COM';
		$this->need_instance = 0;

		$this->bootstrap = true;
		parent::__construct();

		$this->displayName = $this->l('Cross-selling');
		$this->description = $this->l('Adds a "Customers who bought this product also bought..." section to every product page.');
		$this->ps_versions_compliancy = array('min' => '1.5.6.1', 'max' => _PS_VERSION_);
	}

	public function install()
	{
		if (!parent::install() ||
			!$this->registerHook('productFooter') ||
			!$this->registerHook('header') ||
			!$this->registerHook('shoppingCart') ||
			!$this->registerHook('actionOrderStatusPostUpdate') ||
			!Configuration::updateValue('CROSSSELLING_DISPLAY_PRICE_M', 0) ||
			!Configuration::updateValue('CROSSSELLING_NBR_M', 10)
		)
			return false;
		$this->_clearCache('crossselling_mod.tpl');

		return true;
	}

	public function uninstall()
	{
		$this->_clearCache('crossselling_mod.tpl');
		if (!parent::uninstall() ||
			!Configuration::deleteByName('CROSSSELLING_DISPLAY_PRICE_M') ||
			!Configuration::deleteByName('CROSSSELLING_NBR_M')
		)
			return false;

		return true;
	}

	public function getContent()
	{
		$this->html = '';

		if (Tools::isSubmit('submitCross'))
		{
			if (Tools::getValue('displayPrice') != 0 && Tools::getValue('CROSSSELLING_DISPLAY_PRICE_M') != 1)
				$this->html .= $this->displayError('Invalid displayPrice');
			if (!($product_nbr = Tools::getValue('CROSSSELLING_NBR_M')) || empty($product_nbr))
				$this->html .= $this->displayError('You must fill in the "Number of displayed products" field.');
			elseif ((int)$product_nbr == 0)
				$this->html .= $this->displayError('Invalid number.');
			else
			{
				Configuration::updateValue('CROSSSELLING_DISPLAY_PRICE_M', (int)Tools::getValue('CROSSSELLING_DISPLAY_PRICE_M'));
				Configuration::updateValue('CROSSSELLING_NBR_M', (int)Tools::getValue('CROSSSELLING_NBR_M'));
				$this->_clearCache('crossselling_mod.tpl');
				$this->html .= $this->displayConfirmation($this->l('Settings updated successfully'));
			}
		}

		return $this->html.$this->renderForm();
	}

	public function hookHeader()
	{
		if (!isset($this->context->controller->php_self) || !in_array(
				$this->context->controller->php_self, array(
					'product',
					'order', 
					'order-opc'
				)
			)
		)
			return;
		if (in_array($this->context->controller->php_self, array('order')) && Tools::getValue('step'))
			return;
		$this->context->controller->addCSS(($this->_path).'css/crossselling_mod.css', 'all');
		
	}

	/**
	 * Returns module content
	 */
	public function hookshoppingCart($params)
	{
		if (!$params['products'])
			return;

		$cache_id = 'crossselling_mod|shoppingcart|'.(int)$params['products'];
		if (!$this->isCached('crossselling_mod.tpl', $this->getCacheId($cache_id)))
		{
			$q_orders = 'SELECT o.id_order
			FROM '._DB_PREFIX_.'orders o
			LEFT JOIN '._DB_PREFIX_.'order_detail od ON (od.id_order = o.id_order)
			WHERE o.valid = 1 AND (';
			$nb_products = count($params['products']);
			$i = 1;
			$products_id = array();
			foreach ($params['products'] as $product)
			{
				$q_orders .= 'od.product_id = '.(int)$product['id_product'];
				if ($i < $nb_products)
					$q_orders .= ' OR ';
				++$i;
				$products_id[] = (int)$product['id_product'];
			}
			$q_orders .= ')';
			$orders = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($q_orders);

			if (count($orders))
			{
				$list = '';
				foreach ($orders as $order)
					$list .= (int)$order['id_order'].',';
				$list = rtrim($list, ',');

				$list_product_ids = join(',', $products_id);
				$order_products = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(
					'
										SELECT DISTINCT od.product_id, pl.name, pl.link_rewrite, p.reference, stock.out_of_stock, p.available_for_order, product_shop.id_category_default, p.available_for_order, p.customizable, i.id_image, product_shop.show_price, cl.link_rewrite category, p.ean13
										FROM '._DB_PREFIX_.'order_detail od
					LEFT JOIN '._DB_PREFIX_.'product p ON (p.id_product = od.product_id)
					'.Shop::addSqlAssociation('product', 'p').
					(Combination::isFeatureActive() ? 'LEFT JOIN `'._DB_PREFIX_.'product_attribute` pa
					ON (p.`id_product` = pa.`id_product`)
					'.Shop::addSqlAssociation('product_attribute', 'pa', false, 'product_attribute_shop.`default_on` = 1').'
					'.Product::sqlStock('p', 'product_attribute_shop', false, $this->context->shop) :  Product::sqlStock('p', 'product', false, $this->context->shop)).'
					LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (pl.id_product = od.product_id'.Shop::addSqlRestrictionOnLang('pl').')
					LEFT JOIN '._DB_PREFIX_.'category_lang cl ON (cl.id_category = product_shop.id_category_default'.Shop::addSqlRestrictionOnLang('cl').')
					LEFT JOIN '._DB_PREFIX_.'image i ON (i.id_product = od.product_id)
					WHERE od.id_order IN ('.$list.')
						AND pl.id_lang = '.(int)$this->context->language->id.'
						AND cl.id_lang = '.(int)$this->context->language->id.'
						AND od.product_id NOT IN ('.$list_product_ids.')
						AND i.cover = 1
						AND product_shop.active = 1
					ORDER BY RAND()
					LIMIT '.(int)Configuration::get('CROSSSELLING_NBR_M').'
				'
				);

				$tax_calc = Product::getTaxCalculationMethod();
				foreach ($order_products as &$order_product)
				{
					$order_product['id_product'] = $order_product['product_id'];
					$order_product['image'] = $this->context->link->getImageLink($order_product['link_rewrite'], (int)$order_product['product_id'].'-'.(int)$order_product['id_image'], ImageType::getFormatedName('home'));
					$order_product['link'] = $this->context->link->getProductLink((int)$order_product['product_id'], $order_product['link_rewrite'], $order_product['category'], $order_product['ean13']);
					$order_product['price_tax_exc'] = Product::getPriceStatic((int)$order_product['product_id'], false, null);
					if (($tax_calc == 0 || $tax_calc == 2))
						$order_product['price'] = Product::getPriceStatic((int)$order_product['product_id'], true, null);
					elseif ($tax_calc == 1)
						$order_product['price'] = Product::getPriceStatic((int)$order_product['product_id'], false, null);
				}

				$order_products = Product::getProductsProperties((int)$this->context->language->id, $order_products);

				$this->smarty->assign(
					array(
						'order' => (count($products_id) > 1 ? true : false),
						'orderProducts' => $order_products,
						'homeSize' => Image::getSize(ImageType::getFormatedName('home')),
						'middlePosition_crossselling_mod' => round(count($order_products) / 2, 0)
					)
				);
			}
		}

		return $this->display(__FILE__, 'crossselling_mod.tpl', $this->getCacheId($cache_id));
	}

	/**
	 * Returns module content for left column
	 */
	public function hookProductFooter($params)
	{
		$cache_id = 'crossselling_mod|productfooter|'.(int)$params['product']->id;
		if (!$this->isCached('crossselling_mod.tpl', $this->getCacheId($cache_id)))
		{
			$orders = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(
			'SELECT o.id_order
			FROM '._DB_PREFIX_.'orders o
			LEFT JOIN '._DB_PREFIX_.'order_detail od ON (od.id_order = o.id_order)
			WHERE o.valid = 1 AND od.product_id = '.(int)$params['product']->id
			);


			if (count($orders))
			{
				$list = '';
				foreach ($orders as $order)
					$list .= (int)$order['id_order'].',';
				$list = rtrim($list, ',');

				if (Group::isFeatureActive())
				{
					$sql_groups_join = '
					LEFT JOIN `'._DB_PREFIX_.'category_product` cp ON (cp.`id_category` = product_shop.id_category_default AND cp.id_product = product_shop.id_product)
					LEFT JOIN `'._DB_PREFIX_.'category_group` cg ON (cp.`id_category` = cg.`id_category`)';
					$groups = FrontController::getCurrentCustomerGroups();
					$sql_groups_where = 'AND cg.`id_group` '.(count($groups) ? 'IN ('.implode(',', $groups).')' : '='.(int)Group::getCurrent()->id);
				}

				$order_products = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(
					'SELECT DISTINCT od.product_id, pl.name, pl.link_rewrite, p.reference, i.id_image, product_shop.show_price, product_shop.id_category_default, p.available_for_order, p.customizable, cl.link_rewrite category, p.ean13, stock.out_of_stock, IFNULL(stock.quantity, 0) as quantity
					FROM '._DB_PREFIX_.'order_detail od
					LEFT JOIN '._DB_PREFIX_.'product p ON (p.id_product = od.product_id)
					'.Shop::addSqlAssociation('product', 'p').
					(Combination::isFeatureActive() ? 'LEFT JOIN `'._DB_PREFIX_.'product_attribute` pa
					ON (p.`id_product` = pa.`id_product`)
					'.Shop::addSqlAssociation('product_attribute', 'pa', false, 'product_attribute_shop.`default_on` = 1').'
					'.Product::sqlStock('p', 'product_attribute_shop', false, $this->context->shop) :  Product::sqlStock('p', 'product', false, $this->context->shop)).'
					LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (pl.id_product = od.product_id'.Shop::addSqlRestrictionOnLang('pl').')
					LEFT JOIN '._DB_PREFIX_.'category_lang cl ON (cl.id_category = product_shop.id_category_default'.Shop::addSqlRestrictionOnLang('cl').')
					LEFT JOIN '._DB_PREFIX_.'image i ON (i.id_product = od.product_id)
					'.(Group::isFeatureActive() ? $sql_groups_join : '').'
					WHERE od.id_order IN ('.$list.')
					AND pl.id_lang = '.(int)$this->context->language->id.'
					AND cl.id_lang = '.(int)$this->context->language->id.'
					AND od.product_id != '.(int)$params['product']->id.'
					AND i.cover = 1
					AND product_shop.active = 1
					'.(Group::isFeatureActive() ? $sql_groups_where : '').'
					ORDER BY RAND()
					LIMIT '.(int)Configuration::get('CROSSSELLING_NBR_M')
				);

				$tax_calc = Product::getTaxCalculationMethod();
				foreach ($order_products as &$order_product)
				{
					$order_product['id_product'] = (int)$order_product['product_id'];
					$order_product['image'] = $this->context->link->getImageLink($order_product['link_rewrite'], (int)$order_product['product_id'].'-'.(int)$order_product['id_image'], ImageType::getFormatedName('home'));
					$order_product['link'] = $this->context->link->getProductLink((int)$order_product['product_id'], $order_product['link_rewrite'], $order_product['category'], $order_product['ean13']);
					if (($tax_calc == 0 || $tax_calc == 2))
						$order_product['price'] = Product::getPriceStatic((int)$order_product['product_id'], true, null);
					elseif ($tax_calc == 1)
						$order_product['price'] = Product::getPriceStatic((int)$order_product['product_id'], false, null);
					$order_product['allow_oosp'] = Product::isAvailableWhenOutOfStock((int)$order_product['out_of_stock']);
				}

				$order_products = Product::getProductsProperties((int)$this->context->language->id, $order_products);


				$this->smarty->assign(
					array(
						'order' => false,
						'orderProducts' => $order_products,
						'homeSize' => Image::getSize(ImageType::getFormatedName('home')),
						'middlePosition_crossselling' => round(count($order_products) / 2, 0),
						'crossDisplayPrice' => Configuration::get('CROSSSELLING_DISPLAY_PRICE_M')
					)
				);
			}
		}

			

		return $this->display(__FILE__, 'crossselling_mod.tpl', $this->getCacheId($cache_id));
	}

	public function hookActionOrderStatusPostUpdate($params)
	{
		$this->_clearCache('crossselling_mod.tpl');
	}

	public function renderForm()
	{
		$fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Settings'),
					'icon' => 'icon-cogs'
				),
				'input' => array(
					array(
						'type' => 'text',
						'label' => $this->l('Number of displayed products'),
						'name' => 'CROSSSELLING_NBR_M',
						'class' => 'fixed-width-xs',
						'desc' => $this->l('Set the number of products displayed in this block.'),
					),
				),
				'submit' => array(
					'title' => $this->l('Save'),
				)
			),
		);

		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table = $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitCross';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->tpl_vars = array(
			'fields_value' => $this->getConfigFieldsValues(),
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id
		);

		return $helper->generateForm(array($fields_form));
	}

	public function getConfigFieldsValues()
	{
		return array(
			'CROSSSELLING_NBR_M' => Tools::getValue('CROSSSELLING_NBR_M', Configuration::get('CROSSSELLING_NBR_M')),
			'CROSSSELLING_DISPLAY_PRICE_M' => Tools::getValue('CROSSSELLING_DISPLAY_PRICE_M', Configuration::get('CROSSSELLING_DISPLAY_PRICE_M')),
		);
	}
}