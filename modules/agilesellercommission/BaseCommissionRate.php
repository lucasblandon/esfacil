<?php /*
///-build_id: 2014101516.1711
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"G\x4c\x4fB\x41\x4c\x53"}["\x6et\x62\x79\x73crh\x73l"]="\x72e\x73\x75lt";${"GL\x4f\x42A\x4cS"}["\x6b\x62\x6fp\x6em\x68n\x64\x75"]="\x73ql";${"\x47\x4c\x4f\x42A\x4cS"}["\x75\x6ep\x61\x61\x79"]="f\x69elds";class BaseCommissionRate extends ObjectModel{public$id;public$id_seller;public$base_commission;public$date_add;protected$table='base_commission';protected$identifier='id_base_commission';protected$fieldsRequired=array('id_seller','base_commission');protected$fieldsSize=array();protected$fieldsValidate=array('id_seller'=>'isInt','base_commission'=>'isFloat');public function getFields(){if(isset($this->id))${${"\x47\x4c\x4f\x42\x41L\x53"}["\x75n\x70\x61\x61y"]}["id_\x62\x61s\x65_\x63\x6f\x6d\x6d\x69\x73sio\x6e"]=(int)($this->id);$wwxfgxypglg="\x66\x69\x65l\x64\x73";${${"G\x4cOB\x41L\x53"}["\x75\x6e\x70\x61\x61\x79"]}["i\x64\x5f\x73\x65\x6cl\x65\x72"]=pSQL($this->id_seller);${${"G\x4cOB\x41\x4c\x53"}["\x75n\x70aa\x79"]}["\x62\x61\x73e_\x63o\x6d\x6d\x69s\x73ion"]=pSQL($this->base_commission);${$wwxfgxypglg}["d\x61te_ad\x64"]=pSQL($this->date_add);return${${"\x47L\x4f\x42\x41\x4c\x53"}["\x75np\x61\x61\x79"]};}public static function getBaseCommissionRate($id_seller){${"G\x4c\x4f\x42\x41\x4cS"}["\x74\x78ml\x75hog\x6a"]="r\x65\x73\x75\x6c\x74";$teurucphk="i\x64_s\x65\x6c\x6c\x65\x72";$fuynuqjedg="r\x65s\x75\x6c\x74";${${"GLO\x42\x41L\x53"}["\x6bbo\x70\x6em\x68\x6e\x64u"]}="S\x45\x4c\x45\x43\x54 base_com\x6dis\x73ion\x20\x66\x72\x6f\x6d\x20\x60"._DB_PREFIX_."b\x61\x73\x65_c\x6f\x6d\x6dission`\n\x20    \x20 \x20\x20 \x20W\x48ERE \x69d_\x73e\x6c\x6ce\x72 \x3d ".${$teurucphk}."\x20O\x52\x20\x69d_\x73\x65\x6c\x6ce\x72=0\n \x20\x20       \x20\x4fR\x44ER \x42\x59 i\x64\x5fse\x6c\x6c\x65r \x44\x45\x53C\n \x20\x20 \t ";${${"G\x4c\x4fBA\x4cS"}["\x6e\x74\x62y\x73\x63\x72hs\x6c"]}=Db::getInstance()->getRow(${${"\x47\x4cO\x42\x41\x4c\x53"}["k\x62o\x70n\x6d\x68\x6ed\x75"]});if(isset(${${"\x47\x4c\x4fB\x41\x4c\x53"}["txm\x6c\x75\x68\x6fg\x6a"]}["base_co\x6dm\x69s\x73\x69on"])AND floatval(${${"\x47L\x4f\x42A\x4c\x53"}["\x6e\x74by\x73\x63\x72h\x73\x6c"]}["\x62a\x73e\x5fco\x6d\x6d\x69s\x73ion"])>0)return floatval(${$fuynuqjedg}["\x62\x61\x73e_co\x6d\x6d\x69s\x73\x69on"]);return 0;}}
?>