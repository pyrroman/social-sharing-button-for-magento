<?php
/**
 * Button
 * 
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website     http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Block_Button extends Mage_Core_Block_Template
{
    protected function _prepareLayout()
    {
        foreach ($this->getButtons() as $name) {
            $this->setChild('button_'.$name,
                    $this->getLayout()->createBlock('socialshare/button_'.$name)
            );
        }
        
        return parent::_prepareLayout();
    }
    
    public function getButtons()
    {
        if ($this->getButtonStyle()=='button_count') {
            return array('like', 'tweet', 'plusone', 'pinit');
        }
        
        return array('like', 'plusone', 'pinit', 'tweet');
    }
    
    protected function getButtonStyle()
    {
        if (empty($this->_data['button_style'])) {
            $this->_data['button_style'] = (string) Mage::getStoreConfig('tebet_socialshare/button_layout/style');
        }
        return $this->_data['button_style'];
    }
    
    public function getButtonDirection()
    {
        if (empty($this->_data['button_direction'])) {
            $this->_data['button_direction'] = (string) Mage::getStoreConfig('tebet_socialshare/button_layout/direction');
        }
        return $this->_data['button_direction'];
    }
}
