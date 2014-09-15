<?php
/**
 * Script
 * 
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website		http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Block_Script_Fblike extends Mage_Core_Block_Template
{
    public function getFacebookAppId()
    {
        if (empty($this->_data['facebook_app_id'])) {
            $this->_data['facebook_app_id'] = (int) Mage::getStoreConfig('tebet_socialshare/facebook_like_options/facebook_app_id');
        }
        return $this->_data['facebook_app_id'];
    }

	public function getIsLikeEnabled()
    {
        if (empty($this->_data['facebook_like_enabled'])) {
            $this->_data['facebook_like_enabled'] = (int) Mage::getStoreConfig('tebet_socialshare/button_enabled/facebook_like');
        }
        return $this->_data['facebook_like_enabled'];
    }
}
