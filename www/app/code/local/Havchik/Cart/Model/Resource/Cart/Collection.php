<?php
class Havchik_Cart_Model_Resource_Cart_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('havchikcart/cart');
    }

}