<?php
class BookStore_ThemeOptions_Model_Source_Font
{
    public function toOptionArray()
    {
        return array(
			array('value' => 'serif', 'label' => Mage::helper('themeoptions')->__('Georgia, Times New Roman, Times, serif')),
            array('value' => 'sansserif', 'label' => Mage::helper('themeoptions')->__('Arial, Helvetica, sans-serif')),
            array('value' => 'monospace', 'label' => Mage::helper('themeoptions')->__('"Courier New", Courier, monospace'))
	        );
    }
}