<?php /*
///-build_id: 2014101516.3953
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
include_once(_PS_ROOT_DIR_."/\x6d\x6f\x64\x75\x6c\x65\x73/\x61\x67\x69\x6ce\x73el\x6c\x65rra\x74i\x6egs/\x61gi\x6c\x65\x73\x65ll\x65\x72r\x61\x74\x69ngs\x2e\x70hp");include_once(_PS_ROOT_DIR_."/\x6dod\x75\x6c\x65\x73/\x61\x67i\x6ce\x73\x65\x6c\x6ce\x72\x72a\x74in\x67s/\x41\x67\x69l\x65Ra\x74in\x67.php");class AgileRatings extends ModuleAdminController{public function __construct(){global$cookie;$this->bootstrap=true;$this->table="agil\x65_\x72ati\x6eg";$this->className="A\x67\x69\x6c\x65Ra\x74\x69\x6eg";parent::__construct();if(!$this->is_seller){$this->addRowAction("\x64\x65\x6cete");}$this->fields_list=array("\x69d\x5fa\x67\x69\x6c\x65_r\x61t\x69\x6eg"=>array("\x74itl\x65"=>$this->l('ID'),"a\x6ci\x67n"=>"c\x65nt\x65r","w\x69\x64th"=>25),"\x69\x64\x5f\x74\x61rge\x74"=>array("tit\x6ce"=>$this->l('Seller ID'),"a\x6ci\x67n"=>"cen\x74e\x72","wi\x64t\x68"=>25),"\x69\x64\x5f\x6fr\x64er"=>array("\x74\x69tl\x65"=>$this->l('Seller ID'),"al\x69\x67n"=>"\x63\x65nte\x72","wid\x74\x68"=>25),"i\x64\x5f\x63\x75\x73t\x6f\x6de\x72"=>array("\x74\x69\x74l\x65"=>$this->l('Customer ID'),"alig\x6e"=>"\x63ente\x72","w\x69\x64t\x68"=>25),"\x63\x6fnte\x6e\x74"=>array("t\x69tle"=>$this->l('Comment'),"align"=>"l\x65f\x74","w\x69dth"=>250),"d\x61\x74e_\x61dd"=>array("ti\x74l\x65"=>$this->l('Date'),"al\x69\x67\x6e"=>"cen\x74\x65r","wi\x64t\x68"=>25));}public function initToolbar(){parent::initToolbar();unset($this->toolbar_btn["n\x65\x77"]);}}
?>