<?php /*
///-build_id: 2014101516.1711
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"\x47L\x4f\x42\x41\x4cS"}["\x79\x65\x75\x71\x6f\x77\x77\x70q"]="r\x61\x74\x65_\x66or";${"GL\x4f\x42\x41LS"}["\x61\x73\x77\x75\x79\x66\x69g\x66\x67\x67"]="\x73\x71\x6c";${"\x47\x4c\x4f\x42\x41L\x53"}["\x73\x75\x67\x78bb\x6fj\x62\x6cr"]="\x72e\x73ul\x74";${"\x47L\x4f\x42A\x4c\x53"}["c\x62ss\x6cl\x72\x72yo\x6a"]="\x73\x61\x6ce\x5f\x61\x6d\x6fu\x6et";${"\x47\x4cO\x42A\x4c\x53"}["\x66\x6ei\x63\x68\x68\x67\x71\x6a\x63\x6f"]="\x66\x69\x65ld\x73";class RangeCommissionRate extends ObjectModel{const RATE_FOR_COMMISSION=1;const RATE_FOR_DEDUCTION=2;public$id;public$id_seller;public$from_amount;public$to_amount;public$commission;public$deduction_rate;public$date_add;protected$table='commission_rate';protected$identifier='id_commission_rate';protected$fieldsRequired=array('id_seller','from_amount','to_amount','commission');protected$fieldsSize=array('id_seller'=>10,'from_amount'=>12,'to_amount'=>12,'commission'=>12);protected$fieldsValidate=array('id_seller'=>'isInt','from_amount'=>'isFloat','to_amount'=>'isFloat','commission'=>'isFloat');public function getFields(){${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x71xj\x76g\x75\x79m\x6ez"]="\x66\x69\x65\x6c\x64\x73";${"\x47L\x4f\x42\x41\x4cS"}["f\x74\x79\x73\x69\x63l\x77\x79"]="\x66i\x65\x6c\x64\x73";parent::validateFields();if(isset($this->id))${${"\x47L\x4f\x42\x41\x4c\x53"}["\x66\x6e\x69\x63h\x68\x67\x71\x6a\x63\x6f"]}["\x69d\x5f\x63\x6fmm\x69\x73\x73io\x6e_ra\x74e"]=(int)($this->id);${${"\x47LOB\x41LS"}["q\x78\x6av\x67\x75ym\x6e\x7a"]}["id_se\x6cle\x72"]=intval($this->id_seller);${"GL\x4f\x42\x41\x4c\x53"}["v\x67e\x6d\x79\x72\x6f\x70o\x75"]="\x66\x69\x65\x6cds";${${"\x47\x4c\x4f\x42ALS"}["\x66\x6e\x69\x63\x68\x68\x67q\x6a\x63o"]}["\x66r\x6fm_\x61\x6do\x75n\x74"]=floatval($this->from_amount);${"\x47LO\x42\x41\x4cS"}["\x6c\x6c\x68g\x72\x72\x6e\x72"]="fi\x65\x6c\x64s";${${"\x47\x4c\x4f\x42A\x4c\x53"}["f\x74y\x73ic\x6c\x77\x79"]}["t\x6f_amo\x75n\x74"]=floatval($this->to_amount);${"\x47\x4c\x4fBA\x4cS"}["\x6d\x72\x78g\x74\x6b\x75md\x78i"]="\x66\x69\x65\x6cd\x73";${${"\x47\x4c\x4f\x42AL\x53"}["l\x6c\x68\x67r\x72\x6e\x72"]}["\x63\x6f\x6d\x6di\x73si\x6f\x6e"]=floatval($this->commission);${${"\x47\x4c\x4fBA\x4c\x53"}["\x66n\x69\x63\x68\x68\x67\x71\x6a\x63\x6f"]}["\x64ed\x75ctio\x6e\x5f\x72a\x74\x65"]=floatval($this->deduction_rate);${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["mrx\x67\x74\x6bu\x6d\x64\x78i"]}["\x64\x61\x74\x65\x5f\x61d\x64"]=pSQL($this->date_add);return${${"G\x4c\x4f\x42A\x4cS"}["\x76\x67\x65\x6d\x79\x72o\x70\x6f\x75"]};}public static function getRate($id_seller,$sale_amount,$rate_for){${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x66\x69\x63\x67\x73\x76m"]="\x72\x65su\x6c\x74";$fatbjootpzv="id_\x73\x65\x6c\x6ce\x72";$tvjcvbbfobd="sq\x6c";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x75ix\x75\x75m\x71"]="\x72\x65\x73\x75\x6c\x74";${"\x47L\x4f\x42\x41\x4c\x53"}["bd\x67e\x68\x6cq\x65o"]="\x73\x71\x6c";$mptsaky="r\x65s\x75\x6c\x74";$xdjmhonyb="\x73\x61\x6ce\x5fa\x6d\x6fun\x74";${${"G\x4cOB\x41L\x53"}["\x62\x64ge\x68\x6c\x71e\x6f"]}="SELEC\x54\x20\x63\x6fm\x6dis\x73i\x6fn,de\x64\x75\x63t\x69\x6fn_\x72\x61\x74\x65\x20\x66\x72\x6fm \x60"._DB_PREFIX_."\x63\x6fmm\x69\x73\x73\x69on_r\x61te\x60\n \x20\x20\x20  \x20 \x20  WHE\x52E\x20\x69\x64_s\x65\x6c\x6ce\x72 =\x20".${$fatbjootpzv}."\n\x20\x20  \x20\x20\x20\x20 \x20 \x41ND\x20 f\x72\x6fm_\x61m\x6f\x75\x6et\x20<\x3d\x20".${$xdjmhonyb}." \n  \x20   \x20 \x20\x20\x20\x41\x4eD\x20\x74\x6f\x5famo\x75n\x74 \x3e\x20".${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x63\x62\x73\x73l\x6c\x72\x72y\x6f\x6a"]}." \n\x20\x20\x20 \t\x20";${${"GLO\x42\x41\x4c\x53"}["\x66\x69\x63\x67s\x76\x6d"]}=Db::getInstance()->getRow(${$tvjcvbbfobd});if(!isset(${${"\x47L\x4f\x42\x41\x4cS"}["\x73\x75\x67x\x62b\x6fj\x62\x6c\x72"]}["c\x6f\x6d\x6di\x73si\x6fn"])){$cyeodrst="\x72\x65\x73\x75\x6c\x74";${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x61\x73\x77\x75\x79fi\x67f\x67\x67"]}="SEL\x45C\x54 co\x6dmi\x73\x73\x69o\x6e,de\x64\x75\x63\x74io\x6e_\x72a\x74\x65\x20\x66rom\x20`"._DB_PREFIX_."c\x6fm\x6d\x69s\x73io\x6e_\x72a\x74e\x60\n\x20\x20   \x20\x20\x20  \x20\x20\x20\x20\x20\x57\x48\x45R\x45\x20i\x64\x5f\x73e\x6c\x6c\x65\x72\x20=\x20\x30\n         \x20\x20\x20 \x20 A\x4e\x44\x20\x20\x66\x72om_\x61\x6d\x6fu\x6et \x3c=\x20".${${"\x47\x4c\x4fB\x41L\x53"}["cb\x73sl\x6c\x72r\x79o\x6a"]}." \n\x20 \x20\x20\x20 \x20 \x20  \x20\x20 \x20AN\x44 t\x6f\x5f\x61mo\x75\x6et > ".${${"\x47LO\x42\x41L\x53"}["\x63\x62s\x73\x6c\x6c\x72\x72\x79o\x6a"]}." \n   \x20\x20\x20 \x20\t\x20";${$cyeodrst}=Db::getInstance()->getRow(${${"\x47\x4c\x4fB\x41\x4cS"}["as\x77\x75y\x66\x69g\x66\x67\x67"]});}if(!isset(${$mptsaky}["c\x6f\x6dm\x69\x73\x73i\x6fn"])){$kmkpoluhcv="i\x64\x5fse\x6cle\x72";${"G\x4cOB\x41L\x53"}["\x70\x78\x77\x6al\x7a"]="s\x71\x6c";${${"\x47L\x4f\x42AL\x53"}["\x70\x78w\x6a\x6cz"]}="\x53\x45\x4c\x45CT\x20\x63om\x6d\x69s\x73\x69\x6fn,\x64\x65\x64uc\x74i\x6f\x6e_r\x61te\x20f\x72o\x6d\x20\x60"._DB_PREFIX_."\x63om\x6dission\x5f\x72ate\x60\n\x20\x20   \x20\x20\x20  \x20\x20\x20\x20 WHE\x52E\x20\x69\x64\x5f\x73\x65\x6cler =\x20".${$kmkpoluhcv}."\n \x20\x20 \x20\x20\x20\x20\x20\x20 \x20\x20\x20\x20\x4f\x52\x44E\x52\x20\x42Y \x74\x6f_amoun\x74\x20D\x45SC\n\x20\x20\x20\x20    \t\x20";${${"\x47\x4c\x4f\x42A\x4cS"}["\x73ug\x78b\x62\x6f\x6abl\x72"]}=Db::getInstance()->getRow(${${"GLO\x42A\x4c\x53"}["\x61\x73\x77u\x79\x66i\x67\x66g\x67"]});if(!isset(${${"\x47\x4c\x4f\x42A\x4cS"}["s\x75\x67\x78\x62\x62o\x6a\x62\x6c\x72"]}["c\x6f\x6dm\x69\x73sion"])){${"\x47LO\x42A\x4c\x53"}["\x61\x64\x68l\x63fx\x6ergv"]="r\x65\x73\x75l\x74";$ghuklkzw="\x73q\x6c";$nkwlgnjct="s\x71\x6c";${$ghuklkzw}="S\x45\x4c\x45CT \x63o\x6dmi\x73\x73\x69\x6fn,\x64e\x64\x75\x63ti\x6f\x6e_rate fr\x6fm\x20\x60"._DB_PREFIX_."co\x6d\x6diss\x69\x6fn_\x72a\x74e\x60\n\t    \x20\x20\x20\x20  \x20  \x20\x20\x57\x48E\x52E id_\x73e\x6cl\x65r\x20\x3d\x20\x30\n\x20 \x20\x20\x20\x20  \x20\x20 \x20\x20 \x20\t\x20 \x20ORD\x45\x52\x20B\x59\x20to\x5f\x61mou\x6e\x74\x20D\x45\x53\x43\n\t \x20\x20    \x20  \x20\x20\x20\x20\x20";${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x61\x64\x68\x6c\x63fx\x6e\x72\x67\x76"]}=Db::getInstance()->getRow(${$nkwlgnjct});}}if(isset(${${"\x47L\x4f\x42\x41\x4c\x53"}["uix\x75\x75\x6dq"]}["c\x6fm\x6d\x69\x73\x73i\x6fn"])){${"G\x4cO\x42\x41\x4c\x53"}["l\x67a\x79\x78\x7a\x6e"]="\x72\x65s\x75\x6ct";$rfnurrsof="\x72\x65\x73\x75l\x74";if(${${"GL\x4fB\x41\x4c\x53"}["\x79\x65u\x71o\x77\x77\x70\x71"]}==self::RATE_FOR_COMMISSION)return floatval(${${"\x47\x4c\x4f\x42\x41L\x53"}["\x6cg\x61\x79\x78\x7a\x6e"]}["\x63\x6fm\x6d\x69ssio\x6e"]);else return floatval(${$rfnurrsof}["\x64edu\x63t\x69on\x5fra\x74e"]);}return 0;}}
?>