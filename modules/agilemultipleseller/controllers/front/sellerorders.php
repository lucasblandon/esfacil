<?php /*
///-build_id: 2015013020.5255
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"\x47L\x4f\x42\x41L\x53"}["\x75if\x73u\x68\x79\x74\x6eytc"]="o\x72\x64\x65rs";${"GL\x4f\x42\x41\x4c\x53"}["z\x6fh\x6bk\x74\x68\x62\x69\x6e\x6d"]="\x6f\x72\x64\x65\x72_\x6eb";class AgileMultipleSellerSellerOrdersModuleFrontController extends AgileModuleFrontController{public function setMedia(){parent::setMedia();$this->addCSS(_THEME_CSS_DIR_."h\x69\x73\x74\x6fr\x79.\x63s\x73");$this->addCSS(_THEME_CSS_DIR_."\x61ddre\x73se\x73.\x63\x73\x73");$this->addJqueryPlugin("sc\x72\x6f\x6c\x6c\x54\x6f");$this->addJS(array(_THEME_JS_DIR_."t\x6fol\x73\x2ej\x73"));}public function initContent(){$iewaycecmu="\x6fr\x64e\x72_nb";parent::initContent();$orhqcrkorm="\x6frd\x65\x72s";${${"GL\x4f\x42\x41\x4cS"}["\x7ao\x68\x6b\x6b\x74h\x62\x69nm"]}=AgileSellerManager::getOrders($this->sellerinfo->id_seller,true,$this->context,true);$this->pagination(${$iewaycecmu});${$orhqcrkorm}=AgileSellerManager::getOrders($this->sellerinfo->id_seller,true,$this->context,false,$this->p,$this->n,$this->orderBy,$this->orderWay);self::$smarty->assign(array("sell\x65r_t\x61\x62\x5fid"=>4,"\x6frd\x65\x72s"=>${${"G\x4c\x4f\x42A\x4cS"}["u\x69\x66\x73\x75\x68y\x74n\x79\x74c"]},"in\x76\x6fice\x41l\x6c\x6fwe\x64"=>(int)(Configuration::get("PS_\x49\x4e\x56\x4f\x49\x43E"))));$this->setTemplate("\x73el\x6c\x65r\x6frd\x65rs\x2etp\x6c");}}
?>