<?php /*
///-build_id: 2014102018.1827
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
class AgileMembershipAccessDeniedModuleFrontController extends ModuleFrontController{public$display_column_left=true;public$ssl=true;public function initContent(){global$smarty,$cart;parent::initContent();$smarty->assign(array("\x6de\x6dbersh\x69p_\x63\x69\x64"=>intval(Configuration::get("A\x47\x49L\x45_\x4dE\x4dB\x45\x52\x53HIP\x5fC\x49\x44")),"a\x6d_\x65\x72\x72\x6f\x72\x5f\x6eo"=>Tools::getValue("\x61m\x5fer\x72or_\x6e\x6f")));$this->setTemplate("a\x63ce\x73sde\x6ei\x65d.t\x70l");}}
?>