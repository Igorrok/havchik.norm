<?php
class Havchik_Cart_Block_Adminhtml_Cart extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function _toHtml()
    {
        return '<h1>News Module: Admin section</h1>';
    }

    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('havchikcart');
        $this->_blockGroup = 'havchikcart';
        $this->_controller = 'adminhtml_cart';

        $this->_headerText = $helper->__('Carts Management');
        $this->_addButtonLabel = $helper->__('Add Cart');
    }
}