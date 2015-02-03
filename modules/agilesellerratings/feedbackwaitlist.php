<?php /*
///-build_id: 2014101516.3953
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
include_once(dirname(__FILE__)."/.\x2e/.\x2e/\x63\x6f\x6e\x66\x69g/\x63\x6fnfig\x2e\x69\x6ec\x2ep\x68\x70");include_once(_PS_ROOT_DIR_."/\x6d\x6fd\x75l\x65s/ag\x69le\x73\x65l\x6ce\x72ra\x74\x69n\x67s/ag\x69\x6ce\x73e\x6cler\x72\x61ting\x73\x2eph\x70");$iupgngxeisju="c\x6f\x6etr\x6f\x6c\x6c\x65\x72";include_once(_PS_ROOT_DIR_."/m\x6f\x64u\x6c\x65s/\x61gi\x6ces\x65\x6cl\x65\x72\x72\x61ti\x6e\x67\x73/Agil\x65\x52\x61tin\x67.p\x68\x70");include_once(_PS_ROOT_DIR_."/\x6d\x6fdu\x6ces/\x61gil\x65se\x6c\x6cerr\x61\x74in\x67\x73/A\x67i\x6c\x65\x52\x61\x74i\x6e\x67\x43r\x69ter\x69o\x6e.php");${$iupgngxeisju}=new FrontController();$controller->auth=true;$controller->init();$controller->displayHeader();if(Tools::isSubmit("\x73u\x62\x6di\x74Fe\x65\x64\x62\x61\x63k"))AgileSellerRatings::procss_feedback();$smarty->assign(array("\x63\x72\x69\x74eri\x6f\x6es"=>AgileRatingCriterion::getList($cookie->id_lang),"a\x67il\x65\x5f\x66eedb\x61cks"=>AgileRating::getFeedbackWaitingList($cookie->id_customer)));$controller->displayContent();$smarty->display(_PS_ROOT_DIR_."/m\x6f\x64\x75le\x73/\x61gi\x6ces\x65\x6c\x6cerr\x61t\x69\x6e\x67s/vi\x65\x77s/t\x65\x6d\x70l\x61te\x73/\x66ront/feedb\x61c\x6b\x77ai\x74list.\x74\x70l");$controller->displayFooter();
?>