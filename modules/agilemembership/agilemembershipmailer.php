<?php
///-build_id: 2014102021.1204
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///  If you need open code to customize or merge code with othe modules, please contact us.
class	AgileMembershipMailer extends ObjectModel
{
	public static function SendTranslateSubject($id_lang, $template, $templateVars, $to, $toName = NULL, $from = NULL, $fromName = NULL, $fileAttachment = NULL, $modeSMTP = NULL, $templatePath = _PS_MAIL_DIR_, $die = false, $id_shop = NULL, $bcc = null)
	{
				switch($template)
		{
			case "expiration_reminder":
				return Mail::Send($id_lang, 'expiration_reminder', Mail::l('Membership Expiration Reminder'), $templateVars, $to, $toName, $from, $fromName, $fileAttachment, $modeSMTP, $templatePath, $die, $id_shop, $bcc);

			case "membership_refund":
				return Mail::Send($id_lang, 'membership_refund', Mail::l('Membership Cancellation Voucher Validity'), $templateVars, $to, $toName, $from, $fromName, $fileAttachment, $modeSMTP, $templatePath, $die, $id_shop, $bcc);

			case "membership_cancelrequest_admin":
				return Mail::Send($id_lang, 'membership_cancelrequest_admin', Mail::l('Membership Cancellation Request'), $templateVars, $to, $toName, $from, $fromName, $fileAttachment, $modeSMTP, $templatePath, $die, $id_shop, $bcc);
		}
	}	
}

