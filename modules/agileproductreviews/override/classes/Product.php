<?php
///-build_id: 2014100222.21
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///  If you need open code to customize or merge code with othe modules, please contact us.
class Product extends ProductCore
{
    public static function getProductRatingSummary($params, &$smarty)
    {
		if(Module::isInstalled('agileproductreviews'))
			return Hook::exec('agilereviewsummary',array('id_product'=>$params['id_product'])) ;  
        return '';
    }
}
