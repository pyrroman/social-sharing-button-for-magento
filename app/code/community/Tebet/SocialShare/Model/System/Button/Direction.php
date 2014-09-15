<?php
/**
 * Button Direction
 *
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website     http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Model_System_Button_Direction
{
    public function toOptionArray()
    {
        $helper = Mage::helper('socialshare');

        return array(
            array(
                'value' => 'horizontal',
                'label' => $helper->__('Horizontal'),
            ),

            array(
                'value' => 'vertical',
                'label' => $helper->__('Vertical'),
            ),
        );
    }
}
