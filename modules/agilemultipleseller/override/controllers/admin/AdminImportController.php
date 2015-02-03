<?php
///-build_id: 2015013020.5255
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///  If you need open code to customize or merge code with othe modules, please contact us.
class AdminImportController extends AdminImportControllerCore
{
	public static function getPath($file = '')
	{
		$controller = Context::getContext()->controller;
		if(!Module::isInstalled('agilemultipleseller'))return parent::getPath($file);
		if(!$controller->is_seller)return parent::getPath($file);
		
		$dir = (defined('_PS_HOST_MODE_') ? _PS_ROOT_DIR_ : _PS_ADMIN_DIR_).DIRECTORY_SEPARATOR.'import' .DIRECTORY_SEPARATOR. $controller->context->cookie->id_employee;
		if(!file_exists($dir))mkdir($dir);

		return $dir	.DIRECTORY_SEPARATOR.$file;
	}
}

