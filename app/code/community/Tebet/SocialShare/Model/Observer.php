<?php
/**
 * Observer
 * 
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website		http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Model_Observer
{
	public function addButtonBlock($observer)
    {
		$block = $observer->getEvent()->getBlock();
		
		if (($block->getAction()->getFullActionName() == 'catalog_product_view') && ($block->getNameInLayout() == 'product.info')) {
			
			$layout	= $block->getLayout();
			$name 	= (string) Mage::helper('socialshare')->getBlockRef();
			$alias 	= $name;
			
			$block->setChild($alias,
						$layout->createBlock('socialshare/button',
							$name,
							array('template'=>'tebet/socialshare/button.phtml')
						)
				);
		}
	}
}
