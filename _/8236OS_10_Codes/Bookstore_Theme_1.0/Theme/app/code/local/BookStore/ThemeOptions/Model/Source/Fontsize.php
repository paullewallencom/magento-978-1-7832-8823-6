<?php
class BookStore_ThemeOptions_Model_Source_Fontsize
{
    public function toOptionArray()
    {
        return array(
			array('value' => '12px', 'label' => Mage::helper('themeoptions')->__('12px')),
            array('value' => '13px', 'label' => Mage::helper('themeoptions')->__('13px')),
            array('value' => '14px', 'label' => Mage::helper('themeoptions')->__('14px')),
            array('value' => '14px', 'label' => Mage::helper('themeoptions')->__('15px')),
            array('value' => '14px', 'label' => Mage::helper('themeoptions')->__('16px'))
	        );
    }
}