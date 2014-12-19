<?php
class Havchik_Cart_Adminhtml_CartController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('havchikcart');

        $contentBlock = $this->getLayout()->createBlock('havchikcart/adminhtml_cart');
        $this->_addContent($contentBlock);
        $this->renderLayout();

    }

}