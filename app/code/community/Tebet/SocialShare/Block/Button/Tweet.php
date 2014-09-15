<?php
/**
 * Tweet Button
 * 
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website     http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Block_Button_Tweet extends Mage_Core_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('tebet/socialshare/button/tweet.phtml');
    }
    
    public function getIsTweetEnabled()
    {
        if (empty($this->_data['twitter_tweet_enabled'])) {
            $this->_data['twitter_tweet_enabled'] = (int) Mage::getStoreConfig('tebet_socialshare/button_enabled/twitter_tweet');
        }
        return $this->_data['twitter_tweet_enabled'];
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
        $class  = ' class="twitter-share-button"';
        $layout = ($this->getButtonStyle()=='button_count') ? '' : ' data-size="large"';
        $url    = ' data-url="'.$this->getTweetUrl().'"';
        $text   = ' data-text="'.$this->getTweetText().'"';
        
        $href   = 'href="https://twitter.com/share"';
        
        return $href.$class.$layout.$url.$text;
    }
    
    protected function getTweetUrl()
    {
        return Mage::registry('product')->getProductUrl();
    }
    
    protected function getTweetText()
    {
        return Mage::registry('product')->getName();
    }
}
