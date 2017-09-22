<?php
/*------------------------------------------------------------------------
 # SM Setting - Version 1.1
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Setting_Model_System_Config_Source_ListColor
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'red', 'label'=>Mage::helper('setting')->__('Red')),
		array('value'=>'orange', 'label'=>Mage::helper('setting')->__('Orange')),
		array('value'=>'violet', 'label'=>Mage::helper('setting')->__('Violet')),
		array('value'=>'green', 'label'=>Mage::helper('setting')->__('Green')),
		array('value'=>'blue', 'label'=>Mage::helper('setting')->__('Blue'))
		/* array('value'=>'yellow', 'label'=>Mage::helper('setting')->__('Yellow')) */
		);
	}
}
