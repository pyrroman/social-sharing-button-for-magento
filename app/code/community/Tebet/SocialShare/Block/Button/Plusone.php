<?php
/**
 * Plusone Button
 * 
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website		http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Block_Button_Plusone extends Mage_Core_Block_Template
{
	public function __construct()
    {
        parent::__construct();
		$this->setTemplate('tebet/socialshare/button/plusone.phtml');
	}
	
	public function getIsPlusoneEnabled()
    {
        if (empty($this->_data['google_plusone_enabled'])) {
            $this->_data['google_plusone_enabled'] = (int) Mage::getStoreConfig('tebet_socialshare/button_enabled/google_plusone');
        }
        return $this->_data['google_plusone_enabled'];
    }
	
	protected function getButtonStyle()
    {
        if (empty($this->_data['button_style'])) {
            $this->_data['button_style'] = (string) Mage::getStoreConfig('tebet_socialshare/button_layout/style');
        }
        return $this->_data['button_style'];
    }
	
	public function writeAttributes()
	{
		$class 	= 'class="g-plusone"';
		
		$size	= ($this->getButtonStyle()=='button_count') ? 'medium' : 'tall';
		$layout = ' data-size="'.$size.'"';
		
		$href 	= ' data-href="'.$this->getProductUrlShared().'"';
		
		return $class.$layout.$href;
	}
	
	protected function getProductUrlShared()
    {
        return Mage::registry('product')->getProductUrl();
    }
}
