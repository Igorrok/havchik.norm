<?php
class Havchik_Cart_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {

        $carts = Mage::getModel('havchikcart/cart')->getCollection()->setOrder('id', 'DESC');
        foreach ($carts as $cart){
            echo ($cart->getTitle());
        }
    }

}