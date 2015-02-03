<?php
///-build_id: 2015012020.3607
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///  If you need open code to customize or merge code with othe modules, please contact us.
class AgileSellerListOptionsMailer extends ObjectModel
{
	public static function SendTranslateSubject($id_lang, $template, $templateVars, $to, $toName = NULL, $from = NULL, $fromName = NULL, $fileAttachment = NULL, $modeSMTP = NULL, $templatePath = _PS_MAIL_DIR_, $die = false, $id_shop = NULL, $bcc = null)
	{
				switch($template)
		{
			case "expiry_notice":
				return Mail::Send($id_lang, 'expiry_notice', Mail::l('Product list option expiry notice'), $templateVars, $to, $toName, $from, $fromName, $fileAttachment, $modeSMTP, $templatePath, $die, $id_shop, $bcc);
		}
	}	

}

