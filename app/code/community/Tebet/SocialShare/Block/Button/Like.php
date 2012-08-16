<?php
/**
 * Like Button
 * 
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website		http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Block_Button_Like extends Mage_Core_Block_Template
{
	public function __construct()
    {
        parent::__construct();
		$this->setTemplate('tebet/socialshare/button/like.phtml');
	}
	
	public function getIsLikeEnabled()
    {
        if (empty($this->_data['facebook_like_enabled'])) {
            $this->_data['facebook_like_enabled'] = (int) Mage::getStoreConfig('tebet_socialshare/button_enabled/facebook_like');
        }
        return $this->_data['facebook_like_enabled'];
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
		$class	= ' class="fb-like"';
		$href 	= ' data-href="'.$this->getProductUrlShared().'"';
		$send 	= ' data-send="false"';
		$layout	= ' data-layout="'.$this->getButtonStyle().'"';
		$faces	= ' data-show-faces="false"';
		
		if ($this->getButtonStyle()=='button_count') {
			$width 	= ' data-width="125"';
			$height	= ' data-height="21"';
		} else {
			$width 	= ' data-width="50"';
			$height	= ' data-height="61"';
		}
		
		return $class.$href.$send.$layout.$faces.$width.$height;
	}
	
	protected function getProductUrlShared()
    {
        return Mage::registry('product')->getProductUrl();
    }
}
