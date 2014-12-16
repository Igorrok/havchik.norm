<?php
class Havchik_Cart_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
    public function cartviewAction()
    {
        $cartId = Mage::app()->getRequest()->getParam('id', 0);
        $cart = Mage::getModel('havchikcart/cart')->load($cartId);
        $this->loadLayout();
        $this->getLayout()->getBlock('cart.content')->assign(array(
            "cart" => $cart,
        ));
        $this->renderLayout();

    }
}