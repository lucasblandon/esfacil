<?php
///-build_id: 2015013020.5255
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///  If you need open code to customize or merge code with othe modules, please contact us.
class FrontController extends FrontControllerCore
{
	public function initHeader()
	{
		parent::initHeader();
		
		if(Module::isInstalled('agilemultipleshop'))
		{
			include_once(_PS_ROOT_DIR_  . "/modules/agilemultipleshop/agilemultipleshop.php");
			AgileMultipleShop::init_shop_header();
			AgileMultipleShop::clear_blockcategory_cache();
		}
	}	
}
