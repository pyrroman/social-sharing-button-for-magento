<?php
/**
 * Pinit Button
 * 
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website		http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Block_Button_Pinit extends Mage_Core_Block_Template
{
	public function __construct()
    {
        parent::__construct();
		$this->setTemplate('tebet/socialshare/button/pinterest.phtml');
	}
	
	public function getIsPinitEnabled()
    {
        if (empty($this->_data['pinterest_pin_enabled'])) {
            $this->_data['pinterest_pin_enabled'] = (int) Mage::getStoreConfig('tebet_socialshare/button_enabled/pinterest_pin');
        }
        return $this->_data['pinterest_pin_enabled'];
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
		$class 	= ' class="pin-it-button"';
		
		$size	= ($this->getButtonStyle()=='button_count') ? 'horizontal' : 'vertical';
		$layout = ' count-layout="'.$size.'"';
		
		$href 	= 'href="'.$this->getPinterestHref().'"';
		
		return $href.$class.$layout;
	}
	
	protected function getPinterestHref()
    {
		$params = array();
		
		$url = 'url=' . $this->getProductUrlShared();
		$params[] = $url;
		
		$media = 'media=' . $this->getProductMediaShared();
		$params[] = $media;
		
		$description = 'description=' . $this->getProductDescriptionShared();
		$params[] = $description;
		
		$src = 'http://pinterest.com/pin/create/button/?' . implode('&', $params);
		
        return $src;
    }
	
	protected function getProductUrlShared()
    {
        return urlencode(Mage::registry('product')->getProductUrl());
    }
	
	protected function getProductMediaShared()
    {
        return urlencode(Mage::registry('product')->getImageUrl());
    }
	
	protected function getProductDescriptionShared()
    {
        return urlencode(Mage::registry('product')->getName());
    }
}
