<?php /*
///-build_id: 2015013020.5255
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"\x47L\x4f\x42\x41\x4c\x53"}["e\x76\x6cu\x72\x6dc\x62\x69t\x66\x79"]="to\x52em\x6fve";${"GL\x4f\x42\x41L\x53"}["w\x72by\x75\x6d\x65\x66"]="\x74\x6fken\x53el\x6cerin\x66\x6f";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x7as\x6e\x77\x72dl"]="\x6d\x6f\x64\x75\x6ces";include_once(dirname(__FILE__)."/\x53\x65llerI\x6ef\x6f.\x70\x68\x70");include_once(dirname(__FILE__)."/\x41\x67\x69leSel\x6ce\x72Pa\x79\x6den\x74In\x66o\x2ephp");class AdminSellerPaymentinfos extends ModuleAdminController{protected$position_identifier='id_agile_seller_paymentinfo';protected$link;public function __construct(){global$cookie;$this->table="a\x67i\x6ce\x5fs\x65lle\x72_\x70\x61\x79m\x65\x6eti\x6e\x66\x6f";$this->identifier="id\x5f\x61\x67\x69le\x5fs\x65\x6cle\x72_paym\x65\x6eti\x6e\x66o";$this->className="Agi\x6ceSell\x65r\x50\x61\x79\x6d\x65n\x74In\x66o";$this->lang=false;$this->bootstrap=true;parent::__construct();$this->addRowAction("\x64\x65l\x65te");$this->fields_list=array("\x69\x64\x5fagil\x65_se\x6c\x6ce\x72\x5f\x70\x61y\x6d\x65\x6etin\x66\x6f"=>array("tit\x6ce"=>$this->l('ID'),"\x61l\x69\x67n"=>"c\x65\x6et\x65r","\x77\x69dth"=>60,"fil\x74\x65\x72_\x6be\x79"=>"a!id\x5fagil\x65\x5fs\x65\x6c\x6c\x65r\x5f\x70a\x79m\x65nt\x69nf\x6f"),"\x69d_\x73elle\x72"=>array("\x74itl\x65"=>$this->l('Seller ID'),"ali\x67n"=>"\x63e\x6e\x74\x65\x72","wi\x64\x74\x68"=>60,"fi\x6ct\x65r\x5fke\x79"=>"a\x21\x69d_seller"),"in_\x75\x73e"=>array("title"=>$this->l('In Use'),"\x61li\x67n"=>"c\x65\x6ete\x72","\x77\x69dth"=>30,"\x66ilt\x65\x72_k\x65y"=>"\x61!\x69\x6e\x5f\x75\x73\x65"),"\x6do\x64ule\x5fna\x6de"=>array("\x74\x69\x74\x6ce"=>$this->l('Payment Module'),"\x61\x6c\x69\x67\x6e"=>"cen\x74\x65r","\x77i\x64\x74h"=>60,"\x66\x69l\x74e\x72\x5f\x6bey"=>"a!\x6d\x6f\x64ule\x5f\x6eame"),"c\x6fmpa\x6e\x79"=>array("tit\x6c\x65"=>$this->l('Company'),"a\x6c\x69gn"=>"\x63ent\x65\x72","\x77\x69\x64t\x68"=>70,"\x66\x69lte\x72\x5f\x6b\x65y"=>"sl!\x63o\x6d\x70\x61\x6ey"),"info1"=>array("t\x69\x74l\x65"=>$this->l('info1'),"\x61\x6c\x69g\x6e"=>"ce\x6e\x74\x65\x72","wid\x74\x68"=>150,"filter_\x6b\x65\x79"=>"\x61\x21inf\x6f1"),"info2"=>array("t\x69\x74\x6c\x65"=>$this->l('info2'),"\x61l\x69g\x6e"=>"\x63en\x74\x65r","\x77id\x74h"=>150,"filt\x65r_\x6b\x65\x79"=>"a!\x69\x6ef\x6f2"),"info3"=>array("\x74\x69\x74\x6c\x65"=>$this->l('info3'),"\x61li\x67\x6e"=>"\x63ent\x65\x72","w\x69d\x74h"=>150,"filt\x65r\x5f\x6b\x65y"=>"\x61!\x69\x6e\x66o\x33"),"\x69\x6efo\x34"=>array("tit\x6c\x65"=>$this->l('info4'),"al\x69gn"=>"ce\x6e\x74er","w\x69dt\x68"=>150,"\x66\x69\x6cte\x72_\x6be\x79"=>"\x61\x21\x69nfo\x34"),"\x69nfo\x35"=>array("\x74\x69\x74\x6ce"=>$this->l('info5'),"\x61\x6c\x69g\x6e"=>"\x63e\x6e\x74\x65r","\x77i\x64\x74h"=>150,"\x66\x69l\x74e\x72\x5f\x6bey"=>"a\x21info\x35"),);$this->_join="\n\t\t\t\x4cEF\x54 \x4aOI\x4e\x20`"._DB_PREFIX_."sel\x6ce\x72info`\x20s\x20\x4fN (a\x2e\x60i\x64_\x73\x65\x6cle\x72\x60\x20\x3d s.\x60id\x5fs\x65\x6c\x6ce\x72`)\n\t\t\t\x4c\x45\x46\x54\x20JO\x49N\x20\x60"._DB_PREFIX_."s\x65\x6c\x6c\x65\x72i\x6ef\x6f_\x6ca\x6e\x67\x60\x20s\x6c ON\x20(\x73.`\x69\x64_\x73\x65ll\x65r\x69\x6ef\x6f`\x20= s\x6c.`\x69\x64\x5fs\x65\x6cleri\x6e\x66o` A\x4eD\x20\x73\x6c.i\x64\x5fl\x61\x6eg=".intval($cookie->id_lang).")\n\x20\x20  \x20\x20\x20 \x20\x20\x20\x20";$this->_select="s\x6c\x2eco\x6d\x70a\x6e\x79 a\x73 c\x6f\x6dp\x61n\x79";}public function init(){if(Tools::getValue("s\x75\x62mit\x41d\x64".$this->table))$_POST["su\x62\x6di\x74\x41dd".$this->table."AndS\x74\x61y"]=1;parent::init();}public function initContent(){if($this->action=="\x73el\x65\x63\x74\x5fd\x65l\x65\x74e")$this->context->smarty->assign(array("delet\x65\x5f\x66\x6f\x72m"=>true,"\x75\x72\x6c\x5f\x64\x65\x6c\x65\x74\x65"=>htmlentities($_SERVER["\x52EQU\x45S\x54_\x55R\x49"]),"boxes"=>$this->boxes,));parent::initContent();}public function renderForm(){${"G\x4cOBA\x4c\x53"}["\x6bglp\x6c\x65"]="m\x6f\x64\x75\x6ce\x73";${"G\x4c\x4f\x42\x41LS"}["g\x64\x66\x78\x69\x75\x6c\x68k\x6b"]="\x6f\x62j";global$cookie;${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x75\x75\x62\x72\x6b\x69\x65\x67"]="\x6do\x64\x75\x6ce\x73";$wtxejinldais="mo\x64\x75\x6c\x65\x73";${"\x47\x4c\x4fBA\x4cS"}["\x72\x6f\x6dm\x66m\x66\x73"]="\x74\x6fk\x65\x6eSe\x6c\x6c\x65r\x69\x6e\x66o";if(!(${${"G\x4c\x4fB\x41L\x53"}["\x67\x64\x66\x78\x69u\x6c\x68\x6bk"]}=$this->loadObject(true)))return;$esxbltfqjxs="sel\x6c\x65ri\x6e\x66\x6f";${${"\x47\x4c\x4fB\x41\x4c\x53"}["zsn\x77\x72\x64\x6c"]}=array();${$wtxejinldais}[]=array("\x6e\x61me"=>"","de\x73c"=>"--");${${"\x47\x4cO\x42A\x4cS"}["\x6b\x67lp\x6c\x65"]}[]=array("na\x6de"=>"agilepa\x79\x70al","\x64e\x73c"=>"Agi\x6ce P\x61\x79\x70al or\x20A\x67i\x6c\x65\x20\x50aypa\x6c\x20\x41d\x61ti\x76\x65");$qwqwwwkdso="\x6do\x64\x75l\x65\x73";${"G\x4c\x4fB\x41\x4c\x53"}["\x68\x74\x73\x70\x69\x64\x7a\x79w\x6f"]="obj";${"\x47\x4c\x4fBAL\x53"}["\x62\x77\x75q\x71j\x69a"]="s\x65\x6cl\x65\x72info";if(Module::isInstalled("\x61\x67i\x6ceb\x61nkwire"))${$qwqwwwkdso}[]=array("name"=>"b\x61\x6ek\x77\x69\x72e","d\x65s\x63"=>"Ai\x67l\x65\x20B\x61\x6ek\x20Wi\x72\x65");if(Module::isInstalled("a\x67il\x65g\x6fog\x6c\x65\x63\x68\x65c\x6bout"))${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["uu\x62\x72\x6b\x69\x65\x67"]}[]=array("n\x61\x6d\x65"=>"\x67\x6fog\x6c\x65\x63\x68\x65\x63ko\x75\x74","d\x65s\x63"=>"A\x67\x69l\x65 \x47o\x6fg\x6ce\x20\x43\x68\x65\x63k\x6fut");if(Module::isInstalled("agilepa\x79by\x63he\x71\x75e"))${${"\x47\x4cOB\x41\x4c\x53"}["z\x73nw\x72\x64\x6c"]}[]=array("\x6e\x61me"=>"a\x67i\x6cep\x61yby\x63\x68e\x71\x75e","\x64\x65sc"=>"\x41\x67i\x6c\x65 Pa\x79\x20by \x63\x68\x65ck");$ymyxhbjxmpo="l\x61b\x65l\x73";if(Module::isInstalled("agile\x63\x61\x73h\x6fndel\x69\x76\x65\x72\x79"))${${"\x47L\x4f\x42\x41L\x53"}["\x7a\x73n\x77r\x64\x6c"]}[]=array("n\x61\x6de"=>"\x61gi\x6cec\x61s\x68onde\x6c\x69v\x65ry","\x64\x65\x73c"=>"\x41igl\x65 \x43\x61s\x68\x20\x4fn \x44\x65li\x76ery");${$ymyxhbjxmpo}="\n\t\t\tva\x72 \x6c\x61\x62e\x6c\x73\x20=\x20{\n\t\t\t\tagi\x6cepa\x79pa\x6c:\x20{\x69n\x66o\x31:\"".$this->l('Paypal Address:')."\",\x69\x6ef\x6f2:\"N/\x41\x22,\x69n\x66o3:\x22\x4e/\x41\",\x69nf\x6f4:\"N/\x41\x22,inf\x6f5:\"N/A\x22 }\x20\n\t\t\t\t,b\x61nk\x77\x69r\x65:\x20{i\x6ef\x6f1:\x22".$this->l('Account Owner:')."\x22,\x69nfo\x32:\x22".$this->l('Details:')."\",i\x6ef\x6f\x33:\"".$this->l('Bank address:')."\x22,i\x6e\x66\x6f\x34:\"\x4e/A\",\x69\x6efo5:\x22N/A\x22}\n\t\t\t\t,\x67\x6f\x6f\x67l\x65\x63heck\x6f\x75t:\x20{\x69n\x66\x6f\x31:\"".$this->l('Merchant ID:')."\x22,\x69\x6ef\x6f2:\x22".$this->l('Merchant Key:')."\",\x69\x6e\x66\x6f3:\x22N/A\x22,info4:\x22\x4e/A\x22,in\x66o\x35:\"\x4e/A\x22}\n\t\t\t\t,\x61g\x69\x6c\x65pay\x62yc\x68e\x71\x75\x65:\x20{\x69\x6e\x66\x6f\x31:\x22".$this->l('To the order of:')."\x22,\x69\x6efo\x32:\"".$this->l('Address:')."\",\x69n\x66\x6f\x33:\"N/A\x22,i\x6e\x66\x6f4:\"\x4e/\x41\",i\x6e\x66o\x35:\"\x4e/A\x22}\n\t\t\t\t,\x61\x67\x69le\x63a\x73ho\x6e\x64e\x6ci\x76e\x72y:\x20{\x69nfo\x31:\x22".$this->l('Notes at order:')."\",i\x6ef\x6f2:\x22N/\x41\",in\x66o3:\"\x4e/A\x22,i\x6efo4:\x22N/A\",\x69\x6efo\x35:\x22N/A\x22}\x20\n\t\t\t\x20};\t\t\n\t\t";$this->fields_form=array("\x6c\x65g\x65nd"=>array("t\x69\x74\x6ce"=>$this->l('Seller Payment Info'),"\x69\x6da\x67\x65"=>"\x2e./\x69mg/\x61\x64mi\x6e/ta\x62-c\x75sto\x6d\x65r\x73\x2eg\x69f"),"\x69\x6e\x70\x75t"=>array(array("ty\x70e"=>"\x74\x65x\x74\x5fse\x6cl\x65ri\x6e\x66o","\x6ca\x62\x65\x6c"=>$this->l('Seller:'),"n\x61\x6d\x65"=>"i\x64_\x73e\x6cler\x69\x6ef\x6f","\x73\x69\x7a\x65"=>33,"req\x75i\x72\x65d"=>false),array("t\x79\x70\x65"=>"sel\x65\x63t","labe\x6c"=>$this->l('Payment Module:'),"\x6ea\x6d\x65"=>"\x6do\x64ul\x65_\x6e\x61m\x65","o\x70t\x69ons"=>array("\x71ue\x72\x79"=>${${"\x47\x4c\x4f\x42ALS"}["\x7as\x6ew\x72\x64\x6c"]},"id"=>"\x6ea\x6de","\x6ea\x6d\x65"=>"\x64\x65sc",),"\x72\x65\x71ui\x72\x65d"=>false),array("\x74ype"=>"\x63h\x65\x63kbo\x78","n\x61\x6de"=>"\x69\x6e\x5f\x75se","va\x6c\x75\x65\x73"=>array("\x71\x75er\x79"=>array(array("i\x64"=>"\x6f\x6e","na\x6de"=>$this->l('In Use'),"val"=>"1"),),"\x69d"=>"i\x64","nam\x65"=>"n\x61\x6de"),"r\x65q\x75i\x72e\x64"=>false),array("t\x79\x70e"=>"te\x78\x74a\x72\x65\x61","lab\x65l"=>$this->l('Field 1:'),"na\x6d\x65"=>"i\x6e\x66\x6f1","\x72\x6fws"=>3,"\x63\x6fls"=>100,"r\x65\x71u\x69\x72\x65d"=>false),array("typ\x65"=>"\x74\x65\x78\x74a\x72\x65a","label"=>$this->l('Field 2:'),"\x6ea\x6de"=>"i\x6efo\x32","\x72o\x77\x73"=>3,"\x63\x6fls"=>100,"r\x65\x71\x75\x69\x72e\x64"=>false),array("type"=>"te\x78\x74a\x72\x65\x61","la\x62el"=>$this->l('Field 3:'),"n\x61\x6de"=>"\x69\x6e\x66o3","\x72o\x77\x73"=>3,"c\x6fls"=>100,"\x72e\x71\x75\x69\x72\x65d"=>false),array("\x74y\x70\x65"=>"tex\x74\x61r\x65\x61","label"=>$this->l('Field 4:'),"\x6e\x61\x6d\x65"=>"\x69\x6e\x66\x6f\x34","\x73\x69\x7a\x65"=>33,"re\x71uired"=>false),array("\x74ype"=>"\x74\x65x\x74a\x72\x65\x61","\x6ca\x62e\x6c"=>$this->l('Field 5:'),"n\x61m\x65"=>"in\x66\x6f5","\x72\x6fws"=>3,"col\x73"=>100,"\x72e\x71\x75\x69red"=>false)));$this->fields_form["su\x62m\x69t"]=array("tit\x6ce"=>$this->l('Save'),"c\x6ca\x73\x73"=>"bt\x6e\x20\x62tn-\x64\x65fau\x6ct pu\x6c\x6c-\x72\x69\x67\x68\x74");${$esxbltfqjxs}=new SellerInfo(SellerInfo::getIdBSellerId($this->object->id_seller));${${"\x47LOBA\x4c\x53"}["\x72om\x6df\x6d\x66s"]}=Tools::getAdminToken("A\x64\x6di\x6e\x53\x65lleri\x6ef\x6f\x73".(int)(Tab::getIdFromClassName("\x41dmi\x6eS\x65ll\x65\x72in\x66\x6f\x73")).(int)$this->context->employee->id);$gshldfm="l\x61\x62\x65\x6cs";$this->tpl_form_vars=array("a\x67\x69l\x65mult\x69p\x6ce\x73el\x6c\x65\x72\x5f\x76iews"=>_PS_ROOT_DIR_."/\x6do\x64u\x6ce\x73/a\x67ilem\x75lt\x69pl\x65se\x6cler/vie\x77\x73/","base_\x64i\x72"=>_PS_BASE_URL_.__PS_BASE_URI__,"\x62\x61\x73e\x5f\x64\x69\x72_\x73\x73l"=>_PS_BASE_URL_SSL_.__PS_BASE_URI__,"\x73\x65ll\x65ri\x6e\x66o"=>${${"G\x4c\x4f\x42\x41\x4c\x53"}["bw\x75q\x71ji\x61"]},"\x74o\x6b\x65n\x53\x65ll\x65ri\x6e\x66\x6f"=>${${"\x47\x4cOBA\x4cS"}["w\x72\x62\x79um\x65f"]},"\x73ellers"=>AgileSellerManager::getSellersNV(true,"--"),"\x69\x73\x5f\x73el\x6c\x65\x72"=>($cookie->profile==(int)Configuration::get("\x41G\x49\x4cE_\x4d\x53\x5fP\x52O\x46\x49\x4c\x45_I\x44")),"l\x61be\x6cs"=>${$gshldfm});$this->fields_value=array("in\x5fu\x73e\x5fon"=>$this->getFieldValue(${${"\x47\x4cO\x42\x41L\x53"}["\x68\x74sp\x69\x64\x7a\x79\x77\x6f"]},"in\x5fu\x73\x65"));return parent::renderForm();}public function processSave(){require_once(dirname(__FILE__)."/\x41g\x69l\x65Sel\x6c\x65\x72P\x61\x79m\x65nt\x49\x6ef\x6f\x2e\x70hp");if(Tools::getValue("\x69d\x5f\x73\x65l\x6ce\x72")<=0){$this->errors[]=Tools::displayError("\x53\x65\x6c\x6c\x65r\x20\x69\x73 re\x71ui\x72e\x64.");}if(Tools::getValue("\x69d\x5fa\x67i\x6ce\x5fsell\x65r\x5fp\x61\x79\x6d\x65\x6e\x74\x69n\x66\x6f")<=0){if(AgileSellerPaymentInfo::is_seller_payment_info_existed(Tools::getValue("mo\x64\x75\x6c\x65\x5fname"),Tools::getValue("\x69d_\x73\x65ller"))){$this->errors[]=Tools::displayError("\x53\x65ll\x65\x72 \x50ay\x6d\x65n\x74 In\x66o ".Tools::getValue("\x6d\x6fdul\x65\x5f\x6e\x61m\x65")."\x20m\x6f\x64\x75l\x65 \x61\x6crea\x64y \x65x\x73i\x74ed.");}}${${"\x47L\x4f\x42A\x4cS"}["\x65v\x6curm\x63b\x69tf\x79"]}=array("\x20","\t","\r\n","\n","\r");if(Tools::getValue("\x6do\x64u\x6ce\x5fna\x6de")=="g\x6f\x6fgl\x65\x63h\x65\x63\x6b\x6f\x75\x74"){$_POST["in\x66o1"]=str_replace(${${"\x47\x4cO\x42\x41\x4c\x53"}["e\x76\x6curm\x63b\x69\x74\x66\x79"]},"",$_POST["\x69nf\x6f\x31"]);if(AgileSellerPaymentInfo::is_seller_payment_account_existed("g\x6f\x6f\x67lech\x65\x63kout",Tools::getValue("\x69d_sel\x6cer"),Tools::getValue("inf\x6f\x31"))){$this->errors[]=Tools::displayError("T\x68\x65\x20go\x6fgle\x20ch\x65c\x6b\x6f\x75t\x20me\x72\x63ha\x6et \x69\x64\x20h\x61s\x20\x62\x65en u\x73e\x64 \x62y a\x6e\x6f\x74he\x72 \x73el\x6c\x65\x72\x2e");}}if(Tools::getValue("\x6dod\x75l\x65\x5f\x6eame")=="\x61\x67\x69l\x65\x70aypa\x6c"){${"\x47\x4cOB\x41\x4c\x53"}["\x7a\x65\x75\x64\x76e"]="t\x6fR\x65\x6d\x6fv\x65";$_POST["in\x66o1"]=str_replace(${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x7aeu\x64v\x65"]},"",$_POST["\x69\x6e\x66\x6f1"]);if(AgileSellerPaymentInfo::is_seller_payment_account_existed("\x61\x67i\x6c\x65\x70a\x79\x70\x61l",Tools::getValue("\x69d_\x73\x65\x6cle\x72"),Tools::getValue("i\x6e\x66\x6f\x31"))){$this->errors[]=Tools::displayError("T\x68e \x70\x61\x79p\x61l \x61c\x63\x6f\x75n\x74\x20\x65\x6d\x61i\x6c a\x64d\x72\x65\x73s h\x61\x73 \x62\x65\x65n\x20\x75sed\x20by \x61\x6eo\x74h\x65r \x73e\x6cler\x2e");}if(((int)$_POST["i\x6e\x5fuse\x5f\x6f\x6e"]||!empty($_POST["in\x66o\x31"]))&&!Validate::isEmail($_POST["\x69n\x66o\x31"])){$this->errors[]=Tools::displayError("\x54he\x20\x70a\x79\x70al a\x63\x63oun\x74\x20\x65\x6d\x61\x69l\x20\x69s\x20in\x76al\x69\x64\x2e");}}if(!empty($this->errors)){$this->redirect_after=false;return false;}$_POST["in_\x75se"]=(int)Tools::getValue("in_u\x73e\x5f\x6fn");parent::processSave();}}
?>