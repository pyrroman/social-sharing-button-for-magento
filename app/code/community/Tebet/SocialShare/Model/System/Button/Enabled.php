<?php
/**
 * Enabled or not
 *
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website		http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Model_System_Button_Enabled
{
	public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('socialshare')->__('Enabled')),
            array('value' => 0, 'label'=>Mage::helper('socialshare')->__('Disabled')),
        );
    }
}
