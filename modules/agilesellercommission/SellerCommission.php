<?php /*
///-build_id: 2014101516.1711
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"\x47L\x4fBALS"}["\x7a\x76\x7aq\x71n"]="am\x6f\x75\x6et";${"G\x4c\x4fB\x41\x4c\x53"}["i\x6d\x79\x76bmo\x6f"]="\x63\x6f\x6d\x6di\x73\x73\x69\x6f\x6e";${"GLO\x42\x41L\x53"}["\x6d\x75f\x6d\x72y\x7a\x66"]="cr\x65\x64\x69t_de\x62i\x74";${"\x47\x4cO\x42\x41\x4cS"}["u\x6b\x73\x74\x6a\x74\x6d\x65\x6cyu"]="\x6f\x72d\x65rw\x61\x79";${"\x47\x4c\x4f\x42\x41\x4cS"}["\x65kev\x65x\x6auw\x73y"]="\x6f\x72der\x62y";${"\x47\x4c\x4f\x42\x41\x4cS"}["v\x65\x76\x74p\x78s"]="\x6e";${"\x47\x4cOB\x41\x4c\x53"}["\x6fv\x71\x77x\x6e\x64\x75e"]="\x70";${"\x47L\x4f\x42AL\x53"}["\x66\x75\x79\x61\x73\x75\x64p\x65\x6dv"]="\x6e\x75\x6d";${"\x47\x4c\x4f\x42\x41L\x53"}["jmk\x71\x72\x67"]="id\x5f\x73e\x6cl\x65r";${"\x47L\x4fB\x41L\x53"}["\x62\x6b\x65\x68\x62\x6b\x6d"]="\x72\x65\x63\x6fr\x64";${"G\x4cO\x42A\x4c\x53"}["jn\x77\x68\x70\x6d\x66t\x73\x61"]="rec\x6f\x72\x64s";${"G\x4c\x4f\x42\x41\x4cS"}["w\x77\x71wclev\x64"]="id_\x6f\x72\x64e\x72";${"\x47\x4cOB\x41\x4c\x53"}["kl\x79\x75\x79\x74t\x76"]="\x72e\x63\x6f\x72d_\x62ala\x6e\x63e";${"G\x4cOB\x41\x4c\x53"}["\x6e\x65\x6f\x63\x77\x68\x6c"]="r\x65\x63o\x72d\x5ft\x79\x70\x65";${"\x47\x4cO\x42\x41L\x53"}["\x78\x7a\x6d\x70w\x6ef\x6fvq"]="id\x5fse\x6c\x6c\x65\x72\x5f\x63\x6f\x6dm\x69\x73sio\x6e";${"\x47\x4c\x4fBA\x4c\x53"}["cdd\x73\x6bqt"]="s\x71\x6c";${"\x47\x4c\x4f\x42\x41LS"}["\x65\x6e\x62\x66\x73\x79\x73"]="fi\x65ld\x73";class SellerCommission extends ObjectModel{const STATE_FLAG_COMMISSION=1;const STATE_FLAG_CANCELLATION=2;const RECORD_TYPE_BUYER_PAY_STORE=3;const RECORD_TYPE_BUYER_PAY_SELLER=1;const RECORD_TYPE_BUYER_PAY_BOTH=2;const RECORD_TYPE_SELLER_PAY_STORE=101;const RECORD_TYPE_STORE_PAY_SELLER=102;const RECORD_TYPE_ORDER_CANCELLATION=-1;const	RECORD_TYPE_SELLER_CREDIT=101;const	RECORD_TYPE_SELLER_DEBIT=102;public$id;public$id_seller;public$id_order;public$sales_amount;public$base_commission;public$range_commission;public$deduction_amount;public$order_origin;public$id_currency;public$seller_sales;public$record_type;public$record_balance;public$balance;public$payment_txn_id;public$tokens_used=0;public$memo;public$date_add;protected$table='seller_commission';protected$identifier='id_seller_commission';protected$fieldsRequired=array('id_seller','id_order','base_commission','range_commission');protected$fieldsSize=array('id_seller'=>10,'id_order'=>12,'base_commission'=>16,'range_commission'=>16);public function getFields(){${"GL\x4f\x42A\x4c\x53"}["\x6a\x6b\x6cw\x72\x66\x78\x6c\x72"]="f\x69\x65ld\x73";${"\x47L\x4fB\x41L\x53"}["\x78i\x66\x6e\x75\x6e"]="\x66ie\x6c\x64\x73";$ntsbjgq="\x66\x69\x65\x6c\x64\x73";if(isset($this->id))${$ntsbjgq}["\x69\x64_se\x6c\x6c\x65\x72\x5f\x63o\x6d\x6di\x73si\x6fn"]=(int)($this->id);$qscvbdeetpdq="f\x69\x65l\x64\x73";$srdkdkqcy="fi\x65l\x64\x73";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["gc\x64f\x62\x64\x76\x79"]="\x66\x69el\x64\x73";${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x67c\x64\x66\x62d\x76\x79"]}["i\x64_\x73e\x6cl\x65r"]=intval($this->id_seller);${${"\x47\x4c\x4f\x42A\x4c\x53"}["e\x6e\x62\x66\x73\x79s"]}["id_or\x64e\x72"]=intval($this->id_order);${$qscvbdeetpdq}["s\x61\x6ce\x73_\x61\x6do\x75nt"]=floatval($this->sales_amount);${${"\x47\x4c\x4fB\x41\x4cS"}["\x65\x6e\x62fsy\x73"]}["b\x61se_c\x6f\x6d\x6dis\x73\x69\x6fn"]=floatval($this->base_commission);$iqersyvkywz="\x66\x69\x65ld\x73";${$srdkdkqcy}["deduc\x74i\x6f\x6e_\x61\x6d\x6f\x75\x6e\x74"]=floatval($this->deduction_amount);${${"G\x4cO\x42\x41\x4c\x53"}["\x65\x6e\x62\x66s\x79\x73"]}["r\x61\x6e\x67e_\x63\x6fm\x6dission"]=floatval($this->range_commission);${${"\x47L\x4fBA\x4c\x53"}["e\x6ebf\x73ys"]}["or\x64e\x72\x5fo\x72\x69\x67\x69n"]=intval($this->order_origin);${${"G\x4c\x4f\x42AL\x53"}["\x65\x6e\x62\x66\x73y\x73"]}["\x69d_cur\x72\x65n\x63y"]=(int)$this->id_currency;${${"G\x4cOB\x41L\x53"}["\x65\x6e\x62\x66\x73\x79s"]}["se\x6cler\x5fs\x61\x6c\x65s"]=(float)$this->seller_sales;${$iqersyvkywz}["\x72ecord\x5f\x62\x61\x6c\x61\x6e\x63e"]=(float)$this->record_balance;${${"\x47\x4c\x4f\x42\x41LS"}["\x6a\x6b\x6c\x77\x72\x66\x78lr"]}["b\x61l\x61nce"]=(float)$this->balance;${${"GL\x4fB\x41\x4c\x53"}["\x65\x6eb\x66sy\x73"]}["r\x65cor\x64\x5f\x74\x79\x70\x65"]=(int)$this->record_type;${${"\x47LO\x42\x41\x4c\x53"}["\x65\x6e\x62f\x73\x79\x73"]}["p\x61\x79\x6dent\x5ft\x78n\x5fid"]=pSQL($this->payment_txn_id);${${"\x47L\x4f\x42A\x4cS"}["\x78if\x6e\x75\x6e"]}["\x74\x6f\x6be\x6es_\x75\x73\x65\x64"]=(float)$this->tokens_used;${${"\x47L\x4f\x42\x41L\x53"}["\x65\x6e\x62\x66\x73\x79\x73"]}["m\x65m\x6f"]=pSQL($this->memo);${${"\x47\x4cOB\x41\x4cS"}["e\x6e\x62f\x73y\x73"]}["\x64a\x74e\x5f\x61d\x64"]=pSQL($this->date_add);return${${"GL\x4f\x42\x41\x4cS"}["\x65\x6eb\x66s\x79s"]};}public static function updateBalance($id_seller,$id_seller_commission){$idvgkwuq="\x69\x64_\x73\x65\x6c\x6cer";${"\x47\x4cO\x42\x41\x4cS"}["\x7an\x69\x63n\x6cq\x6brr"]="\x73q\x6c";${${"GLOB\x41\x4c\x53"}["\x63d\x64\x73\x6bq\x74"]}="S\x45\x4c\x45CT SU\x4d(\x72\x65cord_bal\x61n\x63e)\x20\x61\x73\x20\x62\x61\x6ca\x6ece \x46\x52\x4f\x4d `"._DB_PREFIX_."\x73e\x6c\x6c\x65r_\x63om\x6di\x73\x73i\x6fn`\x20\x57HE\x52\x45\x20i\x64_\x73e\x6cler=".intval(${$idvgkwuq})."\x20\x41N\x44\x20id\x5fs\x65l\x6c\x65\x72_\x63omm\x69\x73\x73\x69\x6f\x6e\x3c=".intval(${${"G\x4c\x4f\x42A\x4c\x53"}["x\x7ampw\x6ef\x6f\x76q"]});$qcabvcgbs="\x69\x64\x5fse\x6cl\x65\x72\x5fc\x6f\x6dmis\x73\x69\x6fn";$bljbxbfyfzm="\x62a\x6ca\x6e\x63\x65";${$bljbxbfyfzm}=(float)Db::getInstance()->getValue(${${"G\x4c\x4fB\x41LS"}["\x63dd\x73k\x71\x74"]});${"\x47\x4c\x4f\x42A\x4cS"}["\x74\x6b\x78\x78\x73\x79\x6en"]="\x69\x64\x5f\x73\x65l\x6c\x65r";$lhmcycjxns="b\x61\x6c\x61\x6e\x63\x65";${${"G\x4cO\x42\x41\x4c\x53"}["\x63d\x64\x73k\x71t"]}="\x55\x50\x44\x41\x54\x45\x60"._DB_PREFIX_."\x73\x65l\x6ce\x72_\x63\x6fm\x6di\x73s\x69on`\x20\x53ET\x20\x62\x61\x6c\x61nce=".floatval(${$lhmcycjxns})." \x57\x48E\x52E id\x5f\x73el\x6c\x65r\x3d".intval(${${"G\x4cO\x42\x41\x4cS"}["\x74\x6bxx\x73\x79\x6e\x6e"]})." \x41N\x44\x20i\x64_s\x65\x6cler\x5fcom\x6di\x73si\x6f\x6e=".intval(${$qcabvcgbs});Db::getInstance()->Execute(${${"G\x4c\x4fB\x41\x4c\x53"}["\x7an\x69\x63n\x6c\x71k\x72r"]});}public static function updateRecordType($id_order,$record_type,$txn_id){${"G\x4c\x4f\x42\x41\x4cS"}["x\x62\x75\x6dbsj\x76q\x79\x64h"]="\x72\x65\x63o\x72\x64_\x74\x79\x70\x65";$pmglcasdbyg="r\x65\x63\x6fr\x64\x5fb\x61l\x61\x6e\x63\x65";${"G\x4c\x4f\x42\x41\x4c\x53"}["\x72\x68\x66\x6c\x69\x75\x6a\x6a"]="\x73\x71\x6c";$tkukof="\x74\x78n_\x69\x64";$axyyxqq="\x72\x65\x63\x6f\x72\x64\x5f\x62\x61\x6c\x61n\x63e";$jkntztg="\x69\x64\x5f\x6f\x72\x64\x65\x72";${"\x47\x4c\x4fBA\x4cS"}["\x68\x68\x6ck\x69\x6b\x76\x73v"]="\x73\x71\x6c";${"GL\x4fBA\x4c\x53"}["\x64\x70\x79\x79\x6c\x6f\x6e\x76\x74"]="r\x65\x63\x6fr\x64_\x62a\x6c\x61\x6e\x63\x65";$uucpuinmy="r\x65\x63\x6frd_\x74\x79pe";${"\x47\x4cOB\x41L\x53"}["\x73kvr\x69y\x72\x74\x63\x61\x78\x72"]="\x72\x65\x63\x6f\x72d";if(${${"GL\x4f\x42\x41\x4c\x53"}["\x6e\x65\x6fc\x77h\x6c"]}==self::RECORD_TYPE_BUYER_PAY_BOTH)${${"\x47\x4cO\x42A\x4c\x53"}["\x6b\x6cyu\x79\x74tv"]}="\x20\x30 +\x20\x74ok\x65ns\x5fu\x73\x65\x64\x20";else if(${$uucpuinmy}==self::RECORD_TYPE_BUYER_PAY_SELLER)${${"\x47\x4cOB\x41L\x53"}["\x64p\x79\x79\x6c\x6f\x6e\x76\x74"]}="\x20t\x6fk\x65\x6es\x5f\x75s\x65d -\x20b\x61\x73e\x5f\x63ommi\x73si\x6fn\x20- \x72a\x6ege\x5fco\x6d\x6di\x73si\x6fn\x20";else${$pmglcasdbyg}="\x73eller_sal\x65s";${${"G\x4c\x4fBA\x4c\x53"}["\x68\x68\x6ck\x69\x6b\x76\x73v"]}="\x55\x50D\x41\x54E \x60"._DB_PREFIX_."s\x65ll\x65r_\x63\x6f\x6d\x6d\x69s\x73ion\x60\x20\x53\x45\x54 \n\x20\x20 \x20\x20 \x20\x20\x20 \x20 \x60\x72e\x63o\x72d_typ\x65`\x3d".${${"G\x4c\x4fBA\x4c\x53"}["\x78\x62u\x6d\x62s\x6avqydh"]}."\n \x20\x20 \x20\x20\x20\x20\x20\x20  ,`\x70ay\x6d\x65nt_tx\x6e_id\x60='".${$tkukof}."'\n\x20  \x20     \x20  ,\x60r\x65c\x6f\x72d_bal\x61nce\x60\x3d".${$axyyxqq}."\x20\n\x20\x20   \x20\x20\x20  \x20\x20\x57\x48\x45\x52E\x20i\x64\x5f\x6fr\x64e\x72=".${$jkntztg}."\n\x20\x20  \x20  \x20\x20\x20  ";Db::getInstance()->Execute(${${"\x47\x4cO\x42\x41\x4cS"}["c\x64\x64\x73\x6bq\x74"]});${${"\x47\x4c\x4f\x42A\x4cS"}["c\x64\x64\x73\x6b\x71t"]}="\x53ELE\x43\x54\x20id\x5f\x73el\x6c\x65r, id_se\x6c\x6cer\x5fc\x6f\x6d\x6di\x73sion\x20\x46\x52OM\x20`"._DB_PREFIX_."\x73\x65\x6c\x6c\x65\x72\x5fc\x6fmm\x69\x73\x73i\x6f\x6e\x60\x20W\x48ER\x45\x20\x69\x64\x5for\x64\x65\x72\x3d".${${"G\x4c\x4f\x42\x41L\x53"}["wwq\x77\x63l\x65\x76d"]};${${"G\x4c\x4fB\x41\x4c\x53"}["jn\x77\x68\x70\x6df\x74\x73\x61"]}=Db::getInstance()->ExecuteS(${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x72h\x66\x6c\x69\x75\x6aj"]});foreach(${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x6a\x6e\x77\x68\x70\x6df\x74\x73\x61"]} AS${${"\x47L\x4fB\x41\x4c\x53"}["\x73k\x76\x72iy\x72t\x63\x61\x78r"]}){${"\x47\x4c\x4fB\x41LS"}["\x6c\x70jyd\x68\x74\x6fkj"]="\x72\x65cor\x64";self::updateBalance(${${"\x47\x4cOB\x41LS"}["\x6c\x70j\x79\x64ht\x6fkj"]}["\x69\x64_s\x65\x6cler"],${${"\x47LOB\x41\x4c\x53"}["\x62kehbk\x6d"]}["\x69d_\x73\x65\x6c\x6cer_\x63om\x6d\x69s\x73\x69o\x6e"]);}}public static function getCommissionRecordID($id_order,$id_seller){${"G\x4c\x4f\x42\x41\x4c\x53"}["\x79wf\x65o\x79\x6f\x6e\x79\x6a\x6c"]="\x69\x64_\x6f\x72\x64\x65\x72";$dwhyksm="\x73q\x6c";${"G\x4c\x4fB\x41L\x53"}["\x7a\x71\x6c\x69i\x70\x63g\x78"]="\x69d\x5f\x73\x65\x6c\x6c\x65r";${${"\x47L\x4f\x42\x41\x4c\x53"}["cd\x64s\x6b\x71\x74"]}="\x53\x45\x4c\x45CT\x20i\x64_s\x65\x6c\x6ce\x72\x5fco\x6dmis\x73i\x6fn \x66\x72\x6f\x6d \x60"._DB_PREFIX_."s\x65l\x6ce\x72\x5f\x63omm\x69ssi\x6fn`\n \x20\x20 \x20  \t\t\t\x57\x48ERE \x69\x64\x5f\x73e\x6c\x6c\x65r\x20\x3d ".${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["z\x71\x6ciip\x63\x67x"]}."\n \x20  \x20 \x20\t\t\tAN\x44\x20\x20\x69d_o\x72d\x65r\x20\x3d ".${${"\x47L\x4fB\x41\x4cS"}["\x79\x77\x66e\x6f\x79\x6f\x6e\x79j\x6c"]}."\x20\n \x20 \x20 \x20 \t\t\tAND \x20r\x65co\x72\x64_\x74y\x70e \x69n\x20( ".self::RECORD_TYPE_BUYER_PAY_STORE.",".self::RECORD_TYPE_BUYER_PAY_SELLER.",".self::RECORD_TYPE_BUYER_PAY_BOTH.")\n\t\t\t\t";return(int)(Db::getInstance()->getValue(${$dwhyksm}));}public static function getRecordNb($id_seller){${${"G\x4c\x4f\x42AL\x53"}["\x63\x64d\x73\x6b\x71\x74"]}="SE\x4cE\x43\x54\x20count(*) \x61\x73 nu\x6d\x20f\x72\x6fm\x20\x60"._DB_PREFIX_."sel\x6c\x65r_com\x6dis\x73i\x6fn`\n \x20  \x20\x20\x20\t\t\tW\x48E\x52\x45\x20\x69\x64_s\x65\x6cler\x20= ".intval(${${"\x47\x4cOBA\x4cS"}["j\x6dk\x71\x72\x67"]})."\n\t\t\t\t";${"\x47\x4c\x4f\x42AL\x53"}["\x61a\x6b\x6f\x79\x6d\x64\x6f"]="num";${${"\x47\x4c\x4fBA\x4c\x53"}["a\x61\x6boy\x6d\x64\x6f"]}=intval(Db::getInstance()->getValue(${${"G\x4c\x4f\x42A\x4c\x53"}["\x63\x64\x64\x73\x6b\x71\x74"]}));return${${"\x47\x4c\x4fB\x41\x4c\x53"}["f\x75\x79\x61\x73\x75dpe\x6dv"]};}public static function getRecords($id_seller,$p=1,$n=10,$orderby='date_add',$orderway='DESC'){${"G\x4c\x4f\x42\x41L\x53"}["\x72\x76g\x79s\x68\x6e"]="\x70";${"G\x4cO\x42\x41\x4c\x53"}["\x68i\x67cu\x65\x64"]="\x6e";$oyywwygw="o\x72de\x72\x77\x61y";${"\x47\x4c\x4f\x42\x41L\x53"}["y\x6a\x67\x74c\x68\x6fy\x70"]="ord\x65\x72\x77\x61\x79";$dhogilogmlqx="\x73\x71\x6c";if(${${"GL\x4fBA\x4c\x53"}["\x6fv\x71wx\x6edu\x65"]}<1)${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["r\x76\x67y\x73\x68\x6e"]}=1;${"\x47\x4c\x4f\x42\x41\x4cS"}["\x76\x76\x6b\x6cs\x71\x70\x77"]="o\x72\x64e\x72b\x79";$rikvoglp="\x73ql";$ognxki="\x69\x64\x5f\x73\x65l\x6ce\x72";$eoqrdgimlt="\x70";if(${${"\x47\x4c\x4f\x42A\x4c\x53"}["v\x65vtpxs"]}<1)${${"G\x4cO\x42A\x4cS"}["\x68i\x67c\x75ed"]}=10;$mndtdglir="n";if(empty(${${"\x47L\x4fB\x41\x4cS"}["\x65\x6bev\x65\x78\x6a\x75\x77s\x79"]}))${${"GL\x4f\x42A\x4cS"}["\x76\x76\x6b\x6c\x73\x71\x70\x77"]}="da\x74\x65_\x61d\x64";if(empty(${$oyywwygw}))${${"G\x4c\x4fB\x41\x4cS"}["u\x6b\x73\x74j\x74me\x6cy\x75"]}="DE\x53C";${$rikvoglp}="S\x45\x4cEC\x54\x20* f\x72o\x6d\x20`"._DB_PREFIX_."s\x65l\x6c\x65r_c\x6fmm\x69ss\x69on`\n\x20\x20\x20   \x20\t\t\tW\x48ERE \x69d_\x73\x65\x6cl\x65r =\x20".intval(${$ognxki})."\n\x20 \x20\x20 \x20\x20\t\t\tO\x52DER\x20\x42\x59\x20".${${"\x47\x4cOB\x41\x4c\x53"}["\x65\x6bev\x65\x78\x6a\x75\x77\x73\x79"]}."\x20".${${"\x47\x4cO\x42\x41L\x53"}["y\x6a\x67\x74\x63ho\x79\x70"]}."\n\t\t\t\t";${$dhogilogmlqx}.=" \x4c\x49\x4d\x49T ".(((int)(${$eoqrdgimlt})-1)*(int)(${${"GL\x4f\x42A\x4c\x53"}["\x76\x65v\x74p\x78\x73"]})).",".(int)(${$mndtdglir});return Db::getInstance()->ExecuteS(${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x63\x64\x64\x73\x6b\x71\x74"]});}public static function addCreditMemoRecord($id_seller,$record_type,$amount,$desc='',$txn_id='',$id_order=0){$ishlecogw="\x63re\x64i\x74\x5fd\x65b\x69\x74";$mtmlfrocyi="\x69d\x5fse\x6c\x6c\x65\x72";$siyrhpa="cu\x72r\x65\x6e\x63\x79";$dlibplmniix="\x61\x6dou\x6e\x74";${"\x47LO\x42A\x4c\x53"}["\x6fm\x6a\x65\x6c\x73t\x7a\x6a\x6cq"]="r\x65\x63ord\x5f\x74\x79\x70e";if(!${$mtmlfrocyi} OR(float)${$dlibplmniix}==0)return;${$siyrhpa}=new Currency(Configuration::get("\x41\x53\x43\x5fCO\x4dM\x49\x53S\x49\x4fN\x5fC\x55\x52R\x45\x4eCY"));${${"\x47\x4cO\x42\x41\x4cS"}["m\x75\x66m\x72y\x7a\x66"]}=1;if(${${"\x47\x4c\x4f\x42\x41LS"}["\x6f\x6dj\x65\x6cs\x74\x7a\x6a\x6c\x71"]}==SellerCommission::RECORD_TYPE_SELLER_DEBIT)${$ishlecogw}=-1;${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x69\x6d\x79\x76\x62\x6d\x6fo"]}=new SellerCommission();$efmwrjcm="c\x72e\x64\x69\x74\x5fd\x65\x62\x69t";${"\x47\x4c\x4f\x42\x41\x4cS"}["b\x68\x6b\x6d\x6b\x68\x69\x75"]="\x74\x78\x6e_\x69d";$commission->id=0;$commission->id_seller=${${"G\x4cO\x42\x41\x4c\x53"}["j\x6dkq\x72\x67"]};$commission->id_currency=$currency->id;$commission->id_order=${${"G\x4cO\x42\x41LS"}["w\x77\x71\x77c\x6c\x65\x76\x64"]};$commission->sales_amount=0;${"\x47\x4c\x4f\x42ALS"}["\x78\x72\x67\x68\x73w\x66\x66\x72"]="d\x65\x73\x63";$commission->base_commission=0;$commission->range_commission=0;$commission->seller_sales=0;$commission->payment_txn_id=${${"\x47LO\x42\x41L\x53"}["\x62hk\x6d\x6b\x68\x69\x75"]};$commission->memo=${${"\x47\x4c\x4fB\x41LS"}["\x78r\x67\x68\x73\x77ff\x72"]};$commission->record_type=${${"\x47L\x4f\x42\x41\x4c\x53"}["n\x65ocwhl"]};$commission->record_balance=${$efmwrjcm}*${${"\x47\x4cO\x42\x41\x4cS"}["\x7a\x76\x7a\x71\x71\x6e"]};$commission->balance=0;$commission->save();SellerCommission::updateBalance(${${"G\x4c\x4f\x42\x41LS"}["\x6amkqrg"]},$commission->id);}}
?>