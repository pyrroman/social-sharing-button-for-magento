<?php
/**
 * Helper
 * 
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website     http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_BUTTON_PLACEMENT_INPRODUCT_VIEW  = 'tebet_socialshare/button_inproduct_view/placement';
    
    public function getBlockRef()
    {
        return Mage::getStoreConfig(self::XML_PATH_BUTTON_PLACEMENT_INPRODUCT_VIEW, Mage::app()->getStore());
    }
}
