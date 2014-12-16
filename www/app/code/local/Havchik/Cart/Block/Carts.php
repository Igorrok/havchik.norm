<?php
class Havchik_Cart_Block_Carts extends Mage_Core_Block_Template
{

    public function getCartsCollection()
    {
        $newsCollection = Mage::getModel('havchikcart/cart')->getCollection();
        $newsCollection->setOrder('id', 'DESC');
        return $newsCollection;
    }
}