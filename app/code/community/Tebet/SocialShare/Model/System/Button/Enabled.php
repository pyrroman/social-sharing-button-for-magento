<?php
/**
 * Enabled or not
 *
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website     http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Model_System_Button_Enabled
{
    public function toOptionArray()
    {
        $helper = Mage::helper('socialshare');

        return array(
            array(
                'value' => 1,
                'label' => $helper->__('Enabled'),
            ),

            array(
                'value' => 0,
                'label' => $helper->__('Disabled'),
            ),
        );
    }
}
