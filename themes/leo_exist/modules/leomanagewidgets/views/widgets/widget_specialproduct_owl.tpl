{**
 *  Leo Prestashop Theme Framework for Prestashop 1.5.x
 *
 * @package   leotempcp
 * @version   3.0
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
 *
 **}

<div class="block products_block exclusive leomanagerwidgets special-hover {if $owl_rows>2}block-highlight{/if}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="widget-heading title_block">
		{$widget_heading}
	</h4>
	{/if}
	<div class="block_content">	
		{$tabname="{$tab}"}
        <div id="{$tab}">
		{if !empty($products)}
			{$mproducts=array_chunk($products,$owl_rows)}
			{foreach from=$mproducts item=products name=mypLoop}
			<div class="item">
				<ul class="product_list grid">
					{foreach from=$products item=product name=products}
						<li class="ajax_block_product product_block">
							<!-- special-product-item.tpl -->
							{include file="$tpl_dir./special-product-item.tpl"}
						</li>		
					{/foreach}                                   
				</ul>
			</div>
			{/foreach}
        {/if}
        </div>
	</div>
</div>
{assign var="call_owl_carousel" value="#{$tab}"}
{include file='./owl_carousel_config.tpl'}