<?php
class Havchik_Cart_Model_Cart extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('havchikcart/cart');
    }

}