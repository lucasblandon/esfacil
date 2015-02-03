<?php
///-build_id: 2014102021.1204
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///  If you need open code to customize or merge code with othe modules, please contact us.
class CartController extends CartControllerCore
{
	public function init()
	{
		parent::init();
		
		if(Module::isInstalled('agilemembership') && Tools::getIsset('add')) 
        {
			include_once(_PS_ROOT_DIR_  . "/modules/agilemembership/agilemembership.php");
			$ammodule = new AgileMembership();
			$continue = $ammodule->stop_cart_handler();
			if($continue) {
				$continue = $ammodule->stop_mix_handler();
				if(!$continue) {
					$this->errors[] = $ammodule->getL('Membership can not be ordered together with other products');
				}
			} else {
				$this->errors[] = $ammodule->getL('Only customers with valid membership can perform purchase');
				if(!$this->ajax) {
					Tools::redirect(Context::getContext()->link->getModuleLink('agilemembership', 'accessdenied', array('am_error_no' => 1), true));
				}
			}
        }
    }
    
}
