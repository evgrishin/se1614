<?php
class Cart extends CartCore
{
    /*
    * module: onepagecheckout
    * date: 2016-02-21 22:44:07
    * version: 2.3.2
    */
    public function resetCartDiscountCache()
    {
        self::$_discounts     = NULL;
        self::$_discountsLite = NULL;
    }
}
