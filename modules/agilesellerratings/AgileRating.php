<?php /*
///-build_id: 2014101516.3953
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"GL\x4f\x42\x41\x4cS"}["\x6fn\x66rj\x67\x63\x76\x6bh\x6f"]="r\x65c";${"GLO\x42A\x4c\x53"}["\x64\x68\x74\x65k\x6ek\x71\x78ue\x70"]="a\x76\x65\x72\x61g\x65\x73";${"\x47L\x4f\x42A\x4c\x53"}["b\x6c\x70i\x77\x6a"]="\x67\x72\x61de";${"G\x4cO\x42\x41\x4cS"}["\x79\x77\x61j\x71\x72\x6b\x68\x6c\x65"]="id\x5fc\x75\x73\x74om\x65r";${"GL\x4f\x42\x41\x4cS"}["\x7a\x77i\x79\x67s\x65\x6a\x70\x68"]="\x72es";${"\x47\x4c\x4fB\x41LS"}["s\x7a\x76\x74\x73\x70\x75\x68\x68\x6d\x68z"]="\x69\x64\x5f\x74\x79\x70e";${"\x47L\x4f\x42A\x4c\x53"}["\x6d\x6dy\x63\x69\x67le"]="\x69\x64_\x74\x61\x72\x67\x65t";${"GLOB\x41\x4c\x53"}["q\x70\x64\x75\x75\x64v"]="\x73ql";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["v\x62i\x6em\x79"]="\x6e";${"\x47\x4c\x4fB\x41L\x53"}["\x66r\x75\x72\x72d\x68\x61\x62\x66"]="p";${"\x47L\x4fB\x41LS"}["\x63i\x75a\x68q\x63"]="f\x69e\x6c\x64s";class AgileRating extends ObjectModel{public$id;const FOR_ALL_UNVALIDATED_REVIEWS=-1;public$id_target;public$id_type;public$customer;public$id_customer;public$id_order;public$content;public$response;public$grade;public$ip_address;public$id_lang;public$date_add;public$date_upd;protected$fieldsRequired=array('id_target','id_customer','content');protected$fieldsSize=array('content'=>65535);protected$fieldsValidate=array('id_target'=>'isUnsignedId','content'=>'isMessage','grade'=>'isFloat');protected$table='agile_rating';protected$identifier='id_agile_rating';public	function getFields(){${"\x47LO\x42A\x4c\x53"}["u\x68\x76bl\x68\x76\x69f"]="\x66ield\x73";$yzhwknlhwgef="\x66i\x65\x6c\x64s";${"\x47LO\x42\x41\x4c\x53"}["b\x69\x75puv\x6ek"]="\x66ie\x6cd\x73";parent::validateFields(false);$nrlmepv="\x66\x69\x65l\x64\x73";$gochzjnei="\x66\x69\x65\x6cd\x73";${"GL\x4f\x42A\x4cS"}["qmm\x72\x65g\x67k\x6b\x6a\x6c"]="f\x69\x65l\x64\x73";${${"\x47\x4cO\x42\x41\x4c\x53"}["\x63\x69\x75\x61\x68\x71\x63"]}["\x69d_t\x61\x72\x67e\x74"]=intval($this->id_target);${${"GL\x4fBALS"}["qmm\x72e\x67g\x6bk\x6a\x6c"]}["\x69d_\x74ype"]=intval($this->id_type);${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x75\x68v\x62\x6c\x68v\x69\x66"]}["\x69d_c\x75s\x74\x6f\x6der"]=pSQL($this->id_customer);${${"\x47\x4cO\x42A\x4c\x53"}["c\x69u\x61h\x71c"]}["c\x75\x73\x74\x6fm\x65\x72"]=pSQL($this->customer);${$gochzjnei}["\x69d\x5for\x64er"]=$this->id_order;${$yzhwknlhwgef}["\x63on\x74\x65\x6et"]=pSQL($this->content);${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["ci\x75a\x68\x71c"]}["\x67r\x61de"]=floatval($this->grade);${${"\x47\x4cOBAL\x53"}["\x63\x69ua\x68q\x63"]}["\x69\x70\x5f\x61\x64\x64r\x65\x73s"]=$this->ip_address;${${"\x47\x4cO\x42\x41LS"}["\x63i\x75ahq\x63"]}["i\x64_l\x61n\x67"]=$this->id_lang;${${"\x47\x4cO\x42\x41\x4cS"}["c\x69u\x61h\x71c"]}["\x72\x65\x73\x70on\x73\x65"]=pSQL($this->response);${$nrlmepv}["\x64\x61t\x65_u\x70d"]=pSQL($this->date_upd);${${"G\x4cO\x42A\x4c\x53"}["\x62i\x75\x70\x75\x76n\x6b"]}["\x64at\x65_\x61\x64\x64"]=pSQL($this->date_add);return(${${"G\x4c\x4f\x42\x41\x4cS"}["\x63i\x75a\x68\x71\x63"]});}static public function getList($id_target,$id_type,$p=1,$n=10){$lspcjyyy="\x70";${"\x47L\x4f\x42\x41\x4c\x53"}["r\x67z\x73\x6b\x70k\x6d\x65\x73"]="\x6e";$wszydscmf="\x70";${${"GL\x4f\x42\x41\x4c\x53"}["f\x72\x75r\x72dhab\x66"]}=intval(${$lspcjyyy});${"\x47LOBAL\x53"}["\x79s\x75n\x66\x79\x6f\x74d\x6c\x71"]="\x6e";$ppxvmhldndjn="p";${"G\x4c\x4fB\x41\x4cS"}["\x61w\x62\x66\x6an\x67\x74"]="p";${${"G\x4c\x4f\x42A\x4c\x53"}["\x79\x73\x75\x6e\x66\x79\x6ftdl\x71"]}=intval(${${"\x47L\x4f\x42A\x4cS"}["\x76\x62\x69\x6e\x6dy"]});if(${$ppxvmhldndjn}<=1)${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x66\x72u\x72\x72\x64\x68\x61\x62\x66"]}=1;if(${${"\x47\x4c\x4f\x42\x41L\x53"}["\x72\x67\x7a\x73kp\x6bm\x65\x73"]}<=0)${${"\x47\x4c\x4f\x42AL\x53"}["vb\x69n\x6d\x79"]}=10;${${"G\x4cOB\x41L\x53"}["q\x70\x64\x75\x75d\x76"]}="\n\t\tS\x45L\x45\x43\x54 \x72\x2e`i\x64\x5fa\x67\x69\x6c\x65\x5fr\x61\x74i\x6e\x67\x60, r\x2e`\x63\x75\x73\x74\x6f\x6der\x60,r\x2e\x72\x65\x73\x70\x6fnse,r.`\x63onte\x6e\x74\x60,\x20r\x2e`g\x72a\x64\x65\x60,\x20r.\x60\x64\x61\x74e\x5f\x61dd\x60, \x72.`\x64at\x65\x5fu\x70d\x60\n\t\t \x20F\x52OM\x20\x60"._DB_PREFIX_."\x61gile\x5fra\x74i\x6e\x67\x60\x20\x72\n\t\t\x57HERE \x31 \n\t\t \x20 \x20\x41ND\x20\x72.\x60id_ta\x72ge\x74\x60 = ".intval(${${"G\x4cOB\x41\x4c\x53"}["\x6d\x6d\x79\x63i\x67\x6c\x65"]})."\n\t\t\x20\x20\x20 \x41\x4eD \x72.`\x69d\x5ftype\x60\x20= ".intval(${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x73z\x76\x74\x73\x70u\x68\x68\x6d\x68z"]})."\n\t\t\x4f\x52\x44\x45R\x20\x42Y \x72\x2e\x60\x64a\x74\x65\x5f\x61d\x64\x60 D\x45SC ";if(${${"\x47\x4c\x4f\x42A\x4c\x53"}["v\x62inm\x79"]}>0)${${"\x47LOB\x41L\x53"}["\x71\x70\x64u\x75d\x76"]}=${${"\x47\x4c\x4f\x42\x41LS"}["\x71\x70\x64\x75\x75d\x76"]}."LI\x4d\x49\x54\x20".intval((${$wszydscmf}-1)*${${"G\x4c\x4f\x42A\x4cS"}["v\x62\x69nm\x79"]}).",\x20".${${"\x47LO\x42\x41\x4cS"}["\x61\x77b\x66\x6an\x67\x74"]}*intval(${${"\x47LO\x42\x41\x4c\x53"}["vb\x69nm\x79"]});return Db::getInstance()->ExecuteS(${${"\x47\x4c\x4fB\x41\x4cS"}["\x71p\x64u\x75dv"]});}static public function getAverage($id_target,$id_type){${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6f\x65q\x73\x6f\x76\x69\x67\x69"]="\x69\x64_\x74\x79pe";${"\x47L\x4f\x42\x41\x4cS"}["\x62\x6fbm\x74k\x78\x6b\x68\x6e\x76\x6e"]="\x72e\x73";$xeidivzze="\x72e\x73";if(!Validate::isUnsignedId(${${"\x47L\x4f\x42\x41L\x53"}["\x6d\x6d\x79\x63\x69gl\x65"]})||!Validate::isUnsignedId(${${"G\x4cO\x42A\x4cS"}["szv\x74\x73\x70\x75\x68\x68\x6dh\x7a"]}))die(Tools::displayError());${"\x47LOBALS"}["w\x68rq\x67\x69\x6f\x69f"]="r\x65s";$xfinyuhjaod="id_\x74\x61r\x67\x65t";${${"\x47\x4c\x4f\x42AL\x53"}["q\x70d\x75ud\x76"]}="\x53E\x4c\x45\x43T\x20av\x67(\x72\x2e`gra\x64\x65\x60) \x41\x53\x20r\x61t\x69\x6eg\n\t\t\x46\x52\x4fM\x20`"._DB_PREFIX_."a\x67i\x6c\x65_\x72\x61\x74in\x67\x60 r\n\t\tW\x48E\x52\x45 \x72\x2e\x60\x69d\x5f\x74a\x72\x67\x65t`\x20\x3d ".intval(${$xfinyuhjaod})."\n\t\t\x20 \x20 \x41N\x44 \x72\x2e`\x69\x64_\x74\x79\x70e\x60\x20\x3d\x20".intval(${${"\x47L\x4f\x42\x41\x4c\x53"}["\x6f\x65q\x73\x6f\x76\x69gi"]})."\n\t\t\x20\x20 \x20\x47ROU\x50\x20B\x59\x20\x69\x64_\x74arget, \x69\x64_\x74y\x70\x65\n\t\t";${${"GL\x4f\x42\x41\x4c\x53"}["\x77\x68rq\x67\x69\x6f\x69\x66"]}=Db::getInstance()->getRow(${${"\x47\x4c\x4f\x42\x41L\x53"}["\x71p\x64uud\x76"]});return isset(${${"GL\x4f\x42\x41\x4cS"}["\x62\x6f\x62\x6d\x74\x6b\x78\x6b\x68\x6e\x76\x6e"]}["r\x61t\x69\x6e\x67"])?floatval(${$xeidivzze}["r\x61t\x69n\x67"]):0;}static public function getCount($id_target,$id_type){${"GL\x4f\x42A\x4c\x53"}["nyqg\x70\x6c\x72mv\x78w\x6c"]="\x69d_\x74\x79\x70\x65";${"\x47\x4c\x4fB\x41LS"}["l\x6d\x78\x68\x6c\x75\x74\x73"]="\x72\x65\x73";${"\x47\x4c\x4fBA\x4c\x53"}["\x74\x62\x62z\x64m\x75\x70x"]="id_\x74\x61\x72\x67\x65\x74";$dsvgygnpe="r\x65s";${"\x47LOBAL\x53"}["\x77\x62\x65\x6ftc\x66"]="\x73\x71\x6c";${${"G\x4c\x4fBA\x4c\x53"}["\x77\x62e\x6f\x74c\x66"]}="S\x45\x4c\x45\x43\x54 \x63o\x75n\x74(r\x2e\x60gra\x64\x65\x60)\x20\x41\x53\x20n\x75m\n\t\t\x46\x52O\x4d\x20\x60"._DB_PREFIX_."\x61g\x69le\x5f\x72\x61\x74i\x6e\x67\x60 \x72\n\t\tW\x48\x45\x52\x45\x20r\x2e`\x69d_t\x61rg\x65\x74\x60 \x3d ".intval(${${"\x47LO\x42\x41\x4c\x53"}["tbb\x7a\x64mupx"]})."\n\t\t\x20\x20\x20\x20A\x4e\x44\x20\x72.`id\x5f\x74ype` \x3d\x20".intval(${${"\x47L\x4f\x42\x41\x4c\x53"}["\x6e\x79qgplrm\x76\x78\x77\x6c"]})."\n\t\t";${$dsvgygnpe}=Db::getInstance()->getRow(${${"G\x4c\x4f\x42ALS"}["\x71pd\x75\x75\x64v"]});return isset(${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x7a\x77\x69\x79\x67s\x65\x6a\x70h"]}["n\x75\x6d"])?intval(${${"\x47\x4cO\x42\x41\x4c\x53"}["\x6c\x6dx\x68\x6c\x75\x74s"]}["\x6e\x75m"]):0;}public static function getFeedbackWaitingList($id_customer){$dubtsxi="\x69\x64\x5f\x63\x75\x73\x74o\x6d\x65\x72";$sulhrvkxybo="s\x65l\x6c\x65\x72i\x6e\x66\x6f";global$cookie;include_once(_PS_ROOT_DIR_."/\x6d\x6fd\x75le\x73/a\x67i\x6c\x65\x6du\x6c\x74\x69pl\x65s\x65ll\x65r/\x53\x65\x6c\x6c\x65rInfo\x2ep\x68p");$wznejpipkt="\x73\x71\x6c";${$sulhrvkxybo}=new SellerInfo(SellerInfo::getIdByCustomerId(${$dubtsxi}));${${"\x47\x4c\x4f\x42A\x4c\x53"}["q\x70\x64\x75\x75d\x76"]}="SE\x4c\x45CT\x20o.id\x5f\x6fr\x64\x65r,\x20\x73\x6c.com\x70\x61ny, \x49F\x4eU\x4cL(oo.id\x5fowner,0) AS\x20\x69\x64\x5f\x6f\x77n\x65r,o\x2e\x64\x61te\x5f\x61dd\x20\n \x20\x20\x20  \x20\x20 \x20\x20 \x46\x52O\x4d \x60"._DB_PREFIX_."\x6fr\x64er\x73\x60\x20\x6f\n   \x20  \x20 \x20 \x20   \x20\x20\x4cEF\x54 \x4aO\x49\x4e \x60"._DB_PREFIX_."orde\x72\x5f\x6f\x77\x6e\x65r` \x6fo \x4fN \x6f\x2eid\x5f\x6f\x72der=oo\x2eid\x5for\x64\x65\x72\n\x20  \x20  \x20  \x20  \x20\x20\x20\x20\x4cEFT\x20JO\x49\x4e\x20\x60"._DB_PREFIX_."\x73e\x6clerinfo` \x73 \x4fN\x20\x6f\x6f\x2e\x69\x64\x5fow\x6eer=s.i\x64\x5f\x73e\x6c\x6c\x65\x72\n \x20 \x20  \x20\x20 \x20\x20\x20\x20 \x20 \x4c\x45F\x54\x20J\x4f\x49N\x20`"._DB_PREFIX_."sell\x65r\x69n\x66o_la\x6eg\x60 \x73l O\x4e\x20s\x6c.\x69\x64_\x73\x65l\x6c\x65\x72\x69\x6efo\x3d\x73\x2ei\x64_\x73\x65\x6cler\x69nf\x6f \x41ND\x20sl.i\x64_\x6can\x67\x3d".$cookie->id_lang."\n\x20 \x20\x20  \x20   \x20\x20 \x20  L\x45FT\x20JO\x49N `"._DB_PREFIX_."\x61\x67i\x6ce\x5f\x72\x61tin\x67` r\x20O\x4e (\x6f\x2e\x69d\x5fo\x72\x64\x65\x72\x3d\x72.\x69d\x5f\x6f\x72\x64\x65\x72 AN\x44\x20\x72\x2e\x69\x64_\x74\x61rge\x74\x20\x3d\x20\x6f\x6f\x2ei\x64_o\x77\x6eer)\n  \x20  \x20 \x20  \x20 W\x48\x45RE o.i\x64\x5fc\x75\x73t\x6f\x6d\x65\x72 \x3d\x20".${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x79\x77ajq\x72\x6bh\x6c\x65"]}."\n\x20\x20  \x20     \x20\x20\x20\x20\x20 \x41N\x44 \x6f\x2e\x64\x61t\x65\x5f\x61\x64d\x20\x3e\x3d D\x41\x54E_\x41DD(C\x55R\x44\x41\x54\x45(\x20) , \x49NTER\x56A\x4c -120 DA\x59 )\n \x20\x20\x20  \x20\x20\x20   \x20 \x20\x20A\x4eD\x20r.\x69\x64\x5fo\x72\x64e\x72\x20I\x53\x20NU\x4cL\n\t\t\t\tAND \x73.id\x5f\x73\x65\x6cler \x21= ".intval($sellerinfo->id_seller)."\n\x20\x20 \x20  \x20 \x20  \x20\x20\x20\x20 \x41N\x44 IF\x4eUL\x4c(\x6fo.\x69\x64_owne\x72,\x30)\x3e\x30\n  \x20\x20\x20\x20\x20\x20";return Db::getInstance()->ExecuteS(${$wznejpipkt});}public static function getFeedbackWaitingCount($id_customer){$edhlehrlfs="\x72\x65\x73";$nvdyrvp="\x73\x65l\x6c\x65\x72in\x66o";$ebudvxyqi="\x72\x65s";${"G\x4c\x4f\x42A\x4c\x53"}["sqn\x6c\x69\x69\x79\x62"]="\x69\x64\x5f\x63us\x74o\x6d\x65\x72";if(intval(${${"G\x4c\x4f\x42\x41LS"}["\x73\x71\x6e\x6c\x69iy\x62"]})==0)return 0;include_once(_PS_ROOT_DIR_."/mo\x64\x75\x6c\x65\x73/\x61\x67\x69\x6cem\x75l\x74i\x70le\x73\x65\x6c\x6cer/\x53\x65l\x6cer\x49n\x66o\x2e\x70\x68p");${$nvdyrvp}=new SellerInfo(SellerInfo::getIdByCustomerId(${${"GLO\x42\x41L\x53"}["\x79\x77a\x6a\x71\x72k\x68le"]}));${"\x47\x4cOB\x41L\x53"}["w\x68u\x6ays"]="\x72\x65s";${"G\x4c\x4fB\x41\x4c\x53"}["\x73\x6bo\x6c\x6a\x73\x78\x64zi"]="\x69\x64\x5f\x63\x75\x73\x74\x6f\x6d\x65r";${${"GLO\x42AL\x53"}["q\x70d\x75u\x64\x76"]}="\x53\x45\x4c\x45CT C\x4f\x55N\x54(*)\x20\x41\x53 \x6e\x75m\n    \x20  \x20 \x20 \x20\x46R\x4fM\x20\x60"._DB_PREFIX_."o\x72de\x72s`\x20\x6f\n \x20 \x20\x20\x20\x20  \x20\x20   \x20 \x4c\x45FT \x4a\x4f\x49N\x20`"._DB_PREFIX_."\x6f\x72\x64er_ow\x6ee\x72`\x20oo\x20ON\x20\x6f\x2e\x69d\x5for\x64er=o\x6f.\x69d\x5for\x64\x65\x72\n\x20\x20\x20  \x20\x20  \x20 \x20\x20 \x20 L\x45\x46\x54 \x4aO\x49N\x20\x60"._DB_PREFIX_."\x73\x65ll\x65\x72\x69\x6ef\x6f\x60 s ON o\x6f.i\x64_ow\x6ee\x72=\x73.i\x64_\x73e\x6cl\x65\x72\n\x20\x20 \x20\x20\x20\x20 \x20      \x20LE\x46\x54 \x4a\x4fI\x4e `"._DB_PREFIX_."\x61\x67\x69\x6c\x65_\x72a\x74\x69n\x67` r\x20\x4fN\x20o\x2eid\x5fo\x72\x64er\x3d\x72\x2eid\x5f\x6fr\x64\x65r\n     \x20\x20 \x20\x20\x20\x20\x57\x48\x45RE\x20o.\x69\x64_\x63\x75stome\x72 =\x20".intval(${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x73ko\x6cjsxd\x7a\x69"]})."\n\x20\x20 \x20    \x20\x20   \x20\x20\x20\x41\x4e\x44 o.\x64ate_\x61\x64\x64\x20>=\x20\x44ATE\x5f\x41\x44D(CUR\x44\x41T\x45( ) ,\x20\x49\x4e\x54\x45\x52V\x41L\x20-12\x30\x20\x44\x41Y\x20)\n\t\t\t\tA\x4eD\x20\x73\x2ei\x64\x5f\x73e\x6c\x6cer \x21\x3d\x20".intval($sellerinfo->id_seller)."\n\x20\x20  \x20\x20\x20\x20\x20 \x20  \x20\x20 A\x4e\x44 \x72\x2ei\x64_\x6f\x72\x64er \x49\x53\x20\x4eUL\x4c\n\x20   \x20    \x20  \x20 \x20 \x41ND \x49\x46N\x55LL(oo.id\x5f\x6fwn\x65r,0)>0\n\x20\x20\x20   \x20 ";${$ebudvxyqi}=Db::getInstance()->getRow(${${"G\x4c\x4fB\x41\x4cS"}["\x71\x70d\x75u\x64v"]});$gyrlwuix="\x72\x65\x73";return(isset(${${"\x47\x4cO\x42A\x4c\x53"}["\x77h\x75j\x79\x73"]}["num"])AND intval(${$edhlehrlfs}["n\x75m"])>0)?intval(${$gyrlwuix}["\x6e\x75\x6d"]):0;}static public function addCriterionRatingGrade($id_rating,$id_criterion,$grade){$uwbpeenfk="\x69\x64\x5f\x72\x61\x74\x69\x6e\x67";${"\x47LO\x42A\x4c\x53"}["\x69\x64rk\x78\x72\x63"]="i\x64\x5fc\x72\x69t\x65ri\x6fn";${"G\x4c\x4f\x42\x41\x4cS"}["\x67dg\x74\x69\x72f"]="\x69\x64_\x63\x72\x69\x74e\x72i\x6fn";$kvhrxnynero="\x69\x64\x5f\x72\x61\x74\x69\x6e\x67";if(!Validate::isUnsignedId(${${"\x47\x4c\x4f\x42ALS"}["g\x64\x67\x74ir\x66"]})||!Validate::isUnsignedId(${$kvhrxnynero}))die(Tools::displayError());${${"\x47\x4c\x4f\x42\x41LS"}["q\x70d\x75udv"]}="\x49\x4e\x53ER\x54\x20\x49NTO \x60"._DB_PREFIX_."agil\x65_\x72ati\x6eg\x5f\x67r\x61\x64\x65` (`\x69\x64\x5fag\x69\x6c\x65\x5f\x72\x61t\x69n\x67\x60,\x60i\x64\x5f\x61\x67\x69\x6c\x65\x5fr\x61\x74i\x6e\x67\x5f\x63\x72iteri\x6fn\x60,`g\x72\x61\x64\x65\x60)\n\t\t  \x20 \x56\x41\x4c\x55ES\x20(".${$uwbpeenfk}.",".${${"\x47\x4c\x4f\x42\x41LS"}["\x69d\x72\x6bx\x72\x63"]}.",".${${"G\x4cO\x42\x41\x4c\x53"}["\x62lp\x69\x77\x6a"]}.")";${${"\x47\x4c\x4f\x42\x41L\x53"}["z\x77\x69\x79g\x73\x65\x6ap\x68"]}=Db::getInstance()->Execute(${${"G\x4c\x4fB\x41\x4cS"}["\x71pd\x75\x75dv"]});}static public function getAverages($id_target,$id_type){${"G\x4c\x4fB\x41L\x53"}["x\x68o\x76u\x61\x67\x70\x6e\x6a"]="\x72\x65c\x73";${"GL\x4fB\x41\x4c\x53"}["p\x79u\x67\x7a\x6a\x69t\x72j\x6d"]="\x73\x71\x6c";${"GLO\x42\x41\x4cS"}["e\x78\x72\x72\x72sx"]="r\x65\x63s";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6d\x6bc\x6c\x78\x6e\x79\x62n\x74x"]="\x69\x64\x5f\x74\x61\x72\x67e\x74";$fpesaip="\x72\x65\x63\x73";$mgkslbt="\x72\x65\x63\x73";$wuvdmci="\x72e\x63";${${"\x47LO\x42A\x4c\x53"}["\x71\x70d\x75\x75\x64\x76"]}="\x53E\x4c\x45\x43T \x61vg(g\x2e\x67ra\x64e)\x20as gra\x64\x65,\x69\x64_\x61gil\x65_\x72\x61t\x69n\x67\x5fc\x72i\x74\x65\x72ion\x20FR\x4fM `"._DB_PREFIX_."\x61g\x69\x6ce_\x72\x61ti\x6e\x67`\x20 a\n\x20\x20\x20  \x20 \x20\x20\x20 \x20 \x20 \x20  \x20 L\x45FT\x20JO\x49\x4e "._DB_PREFIX_."\x61\x67\x69\x6c\x65_r\x61t\x69\x6e\x67_g\x72a\x64\x65 \x67 \x6fn\x20\x61\x2e\x69\x64\x5fag\x69le\x5f\x72\x61\x74in\x67=g.\x69d\x5fag\x69l\x65\x5f\x72a\x74in\x67\n \x20 \x20\x20  \x20        W\x48\x45\x52E i\x64\x5ft\x79\x70\x65=".${${"G\x4c\x4fB\x41\x4c\x53"}["\x73z\x76ts\x70\x75\x68\x68mh\x7a"]}."\x20\x41\x4eD \x69\x64_\x74\x61rg\x65\x74=".${${"\x47L\x4f\x42\x41\x4c\x53"}["mk\x63\x6c\x78\x6e\x79\x62n\x74\x78"]}."\n\x20   \x20   \x20\x20\x20\x20\x20 \x20\x20G\x72\x6f\x75\x70\x20\x42\x59 \x69d\x5f\x61\x67\x69le\x5f\x72\x61\x74in\x67\x5fcr\x69\x74eri\x6fn\n \x20\x20\x20 \x20 \x20     \x20  ";${${"\x47\x4c\x4f\x42A\x4cS"}["\x78\x68\x6f\x76\x75a\x67p\x6e\x6a"]}=Db::getInstance()->ExecuteS(${${"GLO\x42\x41\x4c\x53"}["\x70\x79\x75\x67\x7a\x6ai\x74\x72j\x6d"]});${${"\x47\x4cOB\x41\x4cS"}["\x64\x68\x74\x65knkq\x78u\x65\x70"]}=array();if(!isset(${$fpesaip})OR empty(${$mgkslbt}))return${${"GL\x4fB\x41LS"}["\x64\x68t\x65\x6bn\x6b\x71\x78\x75\x65p"]};foreach(${${"\x47LO\x42A\x4c\x53"}["e\x78\x72\x72\x72s\x78"]} AS${$wuvdmci}){$eiqtkrnf="\x61v\x65r\x61\x67\x65\x73";${"\x47LO\x42\x41L\x53"}["yy\x6co\x6c\x75\x72tb\x68"]="\x72\x65\x63";${$eiqtkrnf}[intval(${${"\x47\x4c\x4f\x42\x41L\x53"}["\x79\x79\x6co\x6cu\x72\x74\x62h"]}["\x69\x64_ag\x69l\x65\x5fr\x61t\x69\x6e\x67_cr\x69\x74er\x69\x6f\x6e"])]=(float)${${"\x47\x4cO\x42\x41\x4cS"}["\x6f\x6e\x66\x72j\x67\x63vkh\x6f"]}["g\x72ade"];}return${${"\x47\x4c\x4fB\x41\x4c\x53"}["d\x68\x74\x65\x6b\x6e\x6b\x71\x78u\x65\x70"]};}public function delete(){${"\x47\x4c\x4fB\x41LS"}["h\x6fm\x71\x64\x6dx\x64ix"]="\x73\x71\x6c";${${"GL\x4f\x42\x41\x4cS"}["\x71p\x64u\x75\x64\x76"]}="\x44\x45\x4c\x45TE FRO\x4d\x20"._DB_PREFIX_."\x61gi\x6c\x65_\x72ati\x6eg_gr\x61d\x65 W\x48ERE \x69\x64\x5fag\x69\x6c\x65\x5f\x72at\x69ng\x20= ".(int)$this->id;Db::getInstance()->Execute(${${"\x47\x4cOB\x41L\x53"}["homq\x64\x6d\x78\x64\x69x"]});return parent::delete();}}
?>