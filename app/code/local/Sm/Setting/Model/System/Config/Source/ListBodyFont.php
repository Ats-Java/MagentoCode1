<?php
/*------------------------------------------------------------------------
 # SM Setting - Version 1.1
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Setting_Model_System_Config_Source_ListBodyFont
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'Roboto Regular', 'label'=>Mage::helper('setting')->__('Roboto Regular')),
			array('value'=>'Arial', 'label'=>Mage::helper('setting')->__('Arial')),
			array('value'=>'Arial Black', 'label'=>Mage::helper('setting')->__('Arial-black')),
			array('value'=>'Courier New', 'label'=>Mage::helper('setting')->__('Courier New')),
			array('value'=>'Georgia', 'label'=>Mage::helper('setting')->__('Georgia')),
			array('value'=>'Impact', 'label'=>Mage::helper('setting')->__('Impact')),
			array('value'=>'Lucida Console', 'label'=>Mage::helper('setting')->__('Lucida-console')),
			array('value'=>'Lucida Settingde', 'label'=>Mage::helper('setting')->__('Lucida-settingde')),
			array('value'=>'Palatino', 'label'=>Mage::helper('setting')->__('Palatino')),
			array('value'=>'Tahoma', 'label'=>Mage::helper('setting')->__('Tahoma')),
			array('value'=>'Times New Roman', 'label'=>Mage::helper('setting')->__('Times New Roman')),	
			array('value'=>'Trebuchet', 'label'=>Mage::helper('setting')->__('Trebuchet')),	
			array('value'=>'Verdana', 'label'=>Mage::helper('setting')->__('Verdana'))		
		);
	}
}
