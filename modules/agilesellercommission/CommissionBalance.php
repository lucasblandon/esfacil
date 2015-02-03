<?php /*
///-build_id: 2014101516.1711
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"G\x4cOBAL\x53"}["\x67i\x6d\x6d\x6e\x61to\x74\x6e\x66"]="\x66\x69\x65\x6c\x64s";class CommissionBalance extends ObjectModel{public$id;public$id_seller;public$balance;protected$table='';protected$identifier='id_commission_balance';protected$fieldsRequired=array('id_seller','balance');protected$fieldsSize=array();protected$fieldsValidate=array('id_seller'=>'isInt','balance'=>'isFloat');public function getFields(){${"G\x4c\x4fB\x41\x4cS"}["\x65\x70\x64\x71\x68xovaa"]="\x66\x69e\x6c\x64\x73";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x64n\x74\x7a\x72\x6b\x75\x79\x67\x64\x75"]="\x66\x69\x65l\x64\x73";if(isset($this->id))${${"G\x4c\x4fB\x41\x4c\x53"}["\x67im\x6d\x6ea\x74\x6f\x74\x6ef"]}["i\x64\x5fc\x6f\x6d\x6d\x69ssi\x6f\x6e_b\x61l\x61n\x63\x65"]=(int)($this->id);$jyzrxfmppl="f\x69\x65\x6c\x64\x73";${${"G\x4cOB\x41L\x53"}["d\x6e\x74\x7a\x72k\x75ygd\x75"]}["\x69d_\x73e\x6cl\x65r"]=pSQL($this->id_seller);${$jyzrxfmppl}["balance"]=pSQL($this->balance);return${${"\x47\x4cOB\x41L\x53"}["e\x70\x64\x71h\x78\x6fv\x61\x61"]};}}
?>