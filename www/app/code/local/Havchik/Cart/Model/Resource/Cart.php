<?php
class Havchik_Cart_Model_Resource_Cart extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('havchikcart/table_cart', 'id');
    }

}