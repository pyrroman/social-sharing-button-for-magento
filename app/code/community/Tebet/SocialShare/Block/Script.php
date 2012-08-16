<?php
/**
 * Script
 * 
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website		http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Block_Script extends Mage_Core_Block_Template
{
	public function getIsTweetEnabled()
    {
        if (empty($this->_data['twitter_tweet_enabled'])) {
            $this->_data['twitter_tweet_enabled'] = (int) Mage::getStoreConfig('tebet_socialshare/button_enabled/twitter_tweet');
        }
        return $this->_data['twitter_tweet_enabled'];
    }
	
	public function getIsPinitEnabled()
    {
        if (empty($this->_data['pinterest_pin_enabled'])) {
            $this->_data['pinterest_pin_enabled'] = (int) Mage::getStoreConfig('tebet_socialshare/button_enabled/pinterest_pin');
        }
        return $this->_data['pinterest_pin_enabled'];
    }
	
	public function getIsPlusoneEnabled()
    {
        if (empty($this->_data['google_plusone_enabled'])) {
            $this->_data['google_plusone_enabled'] = (int) Mage::getStoreConfig('tebet_socialshare/button_enabled/google_plusone');
        }
        return $this->_data['google_plusone_enabled'];
    }
}
