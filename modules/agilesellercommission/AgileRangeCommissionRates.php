<?php /*
///-build_id: 2014101516.1711
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"\x47LOB\x41LS"}["o\x63x\x69pj"]="\x72o\x77";${"G\x4c\x4f\x42\x41\x4c\x53"}["\x63\x6c\x72s\x66\x74\x68y\x75\x70"]="f\x6f\x72\x5fth\x69\x73\x5f\x73e\x6c\x6c\x65\x72";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x6c\x6aj\x6c\x75xq"]="\x73\x74\x6f\x72\x65_le\x76\x65l";${"G\x4c\x4f\x42\x41L\x53"}["ovz\x6e\x65a\x67\x6c"]="i\x64_\x6c\x61\x6eg\x5fsh\x6fp";${"\x47L\x4f\x42A\x4cS"}["\x71\x64o\x7a\x74\x6by"]="\x6c\x69mi\x74";${"G\x4c\x4f\x42\x41LS"}["et\x66\x75\x68\x71\x6e\x72\x70\x6d\x69"]="s\x74\x61\x72\x74";${"GL\x4f\x42\x41L\x53"}["\x78\x7a\x69\x77n\x6d"]="\x69d_\x6c\x61ng";${"\x47\x4c\x4f\x42\x41\x4cS"}["\x76izt\x6c\x62\x61\x78\x6co"]="\x63\x6f\x6d\x6d\x69\x73si\x6f\x6e";include_once(_PS_ROOT_DIR_."/mo\x64\x75l\x65\x73/\x61g\x69\x6c\x65s\x65ll\x65\x72\x63\x6f\x6d\x6diss\x69o\x6e/\x52a\x6e\x67\x65\x43omm\x69ssion\x52\x61\x74e.php");include_once(_PS_ROOT_DIR_."/\x6d\x6fd\x75\x6c\x65s/agi\x6c\x65s\x65\x6cl\x65rco\x6d\x6di\x73s\x69o\x6e/\x61\x67\x69lese\x6c\x6cerc\x6fm\x6d\x69s\x73\x69o\x6e.\x70hp");class AgileRangeCommissionRates extends ModuleAdminController{protected$_list_error;public function __construct(){global$cookie;$this->bootstrap=true;$this->table="c\x6fm\x6di\x73s\x69on\x5f\x72\x61\x74\x65";$this->className="Range\x43o\x6d\x6di\x73\x73i\x6f\x6eR\x61te";parent::__construct();$this->lang=false;if($this->is_seller)$this->list_no_link=true;else$this->addRowAction("de\x6cet\x65");$this->_join="\n\t \x20\x20\x20\x20\x20 \x20\t\x4cE\x46T\x20JOIN `"._DB_PREFIX_."sell\x65\x72\x69n\x66\x6f`\x20s\x20ON (a\x2e`i\x64\x5f\x73el\x6c\x65\x72\x60=s\x2e`\x69d\x5f\x73\x65l\x6cer`)\n\t \x20\x20   \x20\x20\t\x4c\x45FT\x20J\x4fI\x4e\x20`"._DB_PREFIX_."\x73\x65\x6cl\x65\x72\x69\x6efo_l\x61\x6eg` \x73l\x20\x4fN (\x73l.`i\x64_s\x65\x6cle\x72\x69\x6e\x66\x6f\x60\x3d\x73.`i\x64\x5f\x73e\x6c\x6c\x65rin\x66o` A\x4eD\x20\x73l.id\x5f\x6c\x61n\x67=".intval($cookie->id_lang).")\n\t\x20\x20 \x20\x20 \x20 \t";$this->_select="I\x46(a.\x60\x69\x64_s\x65\x6c\x6c\x65r\x60=\x30,\x22".$this->l('Default Commission Fee')."\",\x20\x73\x6c\x2ec\x6fmpa\x6ey) \x41\x53 \x73el\x6ce\x72\n\t\t\x20\x20\x20\x20  \x20    \x20\x20 \x20\x20,".intval(Configuration::get("\x50S\x5fC\x55\x52\x52EN\x43\x59_DE\x46\x41ULT"))."\x20\x41S\x20id_\x63ur\x72e\x6e\x63y\n\t \x20 \x20 \x20 \x20 \x20\x20 ";$this->fields_list=array("\x69\x64\x5fc\x6fm\x6d\x69ssi\x6f\x6e\x5f\x72\x61t\x65"=>array("\x74\x69tl\x65"=>$this->l('ID'),"\x61\x6c\x69\x67\x6e"=>"ce\x6et\x65\x72","\x77idth"=>25),"id\x5fs\x65\x6cler"=>array("ti\x74le"=>$this->l('Seller ID'),"\x61\x6c\x69g\x6e"=>"c\x65\x6e\x74e\x72","w\x69\x64\x74\x68"=>25,"fi\x6ct\x65r_\x6bey"=>"a\x21i\x64_\x73el\x6ce\x72"),"\x73e\x6cle\x72"=>array("t\x69tl\x65"=>$this->l('Seller Name'),"\x61\x6ci\x67n"=>"r\x69\x67ht","wi\x64\x74\x68"=>50,"tm\x70Tabl\x65\x46ilter"=>true),"\x66\x72\x6fm\x5famo\x75nt"=>array("\x74it\x6c\x65"=>$this->l('From Amount'),"a\x6ci\x67n"=>"\x72\x69gh\x74","w\x69dt\x68"=>50,"type"=>"price","\x63\x75rre\x6e\x63y"=>true),"to\x5fa\x6d\x6f\x75\x6et"=>array("\x74i\x74\x6ce"=>$this->l('To Amount'),"ali\x67\x6e"=>"\x72ig\x68t","\x77i\x64t\x68"=>50,"\x74y\x70\x65"=>"\x70\x72ic\x65","cur\x72e\x6e\x63y"=>true),"c\x6f\x6dm\x69\x73\x73\x69o\x6e"=>array("t\x69\x74l\x65"=>$this->l('Commission Fee(%)'),"\x77id\x74h"=>150),"\x64e\x64u\x63\x74\x69o\x6e\x5frat\x65"=>array("\x74it\x6c\x65"=>$this->l('Deduction Rate(%)'),"\x77idt\x68"=>150));}public function initToolbar(){parent::initToolbar();if($this->is_seller)unset($this->toolbar_btn["\x6e\x65w"]);}public function postProcess(){if(isset($_POST["s\x75\x62mitA\x64d".$this->table])){$this->validateRules();if(sizeof($this->errors)){$this->errors=array_unique($this->errors);return;}$gmldhgsnw="\x63\x6fm\x6d\x69\x73\x73\x69\x6f\x6e";${$gmldhgsnw}=floatval(Tools::getValue("c\x6f\x6dmi\x73\x73\x69\x6f\x6e"));if(${${"\x47\x4c\x4f\x42A\x4cS"}["vi\x7a\x74lb\x61\x78\x6co"]}<0||${${"G\x4c\x4fB\x41\x4cS"}["\x76i\x7atl\x62\x61\x78\x6c\x6f"]}>100){$this->errors[]=Tools::displayError("T\x68e co\x6d\x6di\x73\x73\x69o\x6e\x20\x72\x61te mu\x73t b\x65 between 1\x20a\x6ed\x20100\x2e");}}if(!sizeof($this->errors))parent::postProcess();}public function getList($id_lang,$order_by=null,$order_way=null,$start=0,$limit=null,$id_lang_shop=false){${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x68\x72\x68\x64\x76j\x62q\x64"]="\x6fr\x64\x65r\x5fwa\x79";global$cookie;if($this->is_seller)$this->_where=$this->_where."\x20AN\x44 (\x49FNUL\x4c(a\x2e\x69d\x5fs\x65ller,\x30)\x20= 0 O\x52\x20a.id_s\x65\x6cl\x65\x72 \x3d\x20".intval($cookie->id_employee).")";$pmisululxyf="\x6f\x72\x64e\x72\x5f\x62\x79";parent::getList(${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x78\x7ai\x77\x6e\x6d"]},${$pmisululxyf},${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x68\x72h\x64\x76\x6a\x62q\x64"]},${${"\x47L\x4f\x42\x41\x4c\x53"}["e\x74fuh\x71\x6e\x72\x70mi"]},${${"\x47L\x4f\x42AL\x53"}["qd\x6fz\x74\x6by"]},${${"G\x4c\x4f\x42\x41\x4c\x53"}["o\x76\x7an\x65a\x67l"]});if($this->is_seller){${"\x47L\x4f\x42AL\x53"}["\x66bcp\x70\x6e\x70dfr"]="\x66or_\x74hi\x73_\x73e\x6c\x6c\x65r";${${"\x47L\x4f\x42\x41L\x53"}["l\x6aj\x6cu\x78q"]}=array();${"G\x4c\x4fBAL\x53"}["y\x64\x63\x77\x70\x79\x63\x67\x78\x78\x66"]="for\x5f\x74h\x69\x73\x5f\x73\x65\x6c\x6c\x65\x72";${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x63\x6c\x72\x73\x66\x74h\x79\x75\x70"]}=array();foreach($this->_list as${${"\x47\x4c\x4fB\x41L\x53"}["\x6f\x63\x78\x69\x70\x6a"]}){${"\x47L\x4f\x42\x41\x4cS"}["\x65s\x76\x6chy\x6d\x77o\x72\x7a"]="f\x6f\x72\x5f\x74\x68i\x73\x5fsell\x65\x72";$ifehiql="\x72\x6f\x77";${"\x47\x4c\x4f\x42\x41L\x53"}["\x71\x74\x64\x62l\x64"]="\x72o\x77";$oneuqlxsiyt="\x72\x6fw";if((int)${${"\x47\x4c\x4f\x42AL\x53"}["q\x74\x64\x62l\x64"]}["\x69\x64\x5fsell\x65r"]==0)${${"GL\x4fB\x41L\x53"}["lj\x6al\x75\x78q"]}[]=${$ifehiql};else${${"GL\x4fBA\x4c\x53"}["\x65\x73\x76\x6c\x68\x79\x6dwo\x72\x7a"]}[]=${$oneuqlxsiyt};}$xgdviyy="\x73\x74\x6f\x72\x65_\x6ce\x76e\x6c";$this->_list=(count(${${"\x47L\x4f\x42\x41\x4c\x53"}["\x79\x64\x63\x77\x70ycg\x78\x78f"]})>0?${${"GL\x4f\x42\x41\x4cS"}["\x66\x62cp\x70\x6e\x70d\x66\x72"]}:${$xgdviyy});$this->_listTotal=count($this->_list);}}public function renderForm(){${"GL\x4f\x42\x41\x4cS"}["\x64\x78\x77t\x62h\x75\x77\x6f"]="de\x66cu\x72r\x65\x6e\x63y";${"\x47\x4cO\x42\x41\x4c\x53"}["\x69hv\x71\x79v"]="\x6f\x62\x6a";global$cookie;if(!(${${"\x47\x4cO\x42AL\x53"}["\x69\x68v\x71\x79\x76"]}=$this->loadObject(true)))return;${${"GL\x4f\x42A\x4cS"}["d\x78wt\x62\x68\x75\x77\x6f"]}=new Currency(Configuration::get("\x50\x53\x5fCU\x52\x52EN\x43Y_\x44\x45F\x41\x55LT"));$this->fields_form=array("\x6ce\x67\x65\x6ed"=>array("\x74itl\x65"=>$this->l('Transaction Fee'),"\x69\x6dage"=>"../\x69mg/ad\x6din/t\x61b-\x63u\x73\x74o\x6de\x72s.gi\x66"),"\x69np\x75\x74"=>array(array("\x74\x79pe"=>"sele\x63\x74","l\x61bel"=>$this->l('Seller:'),"nam\x65"=>"\x69d_\x73\x65\x6cl\x65\x72","r\x65qu\x69\x72\x65\x64"=>false,"d\x65fau\x6c\x74_v\x61lu\x65"=>0,"\x6f\x70t\x69ons"=>array("\x71u\x65\x72y"=>AgileSellerManager::getSellersNV(true,$this->l('Store Default')),"id"=>"id\x5f\x73\x65lle\x72","\x6e\x61me"=>"\x6e\x61\x6de",),"\x64es\x63"=>$this->l('Choose a seller to who the transaction fee will apply. Choose Store Defualt if it will apply to all sellers.')),array("\x74\x79pe"=>"\x74ext","\x6ca\x62\x65\x6c"=>$this->l('From Amount')."(".$defcurrency->sign.")","\x6eam\x65"=>"\x66r\x6fm_a\x6do\x75\x6e\x74","siz\x65"=>33,"req\x75i\x72\x65d"=>false),array("\x74yp\x65"=>"\x74\x65x\x74","\x6cab\x65l"=>$this->l('To Amount')."(".$defcurrency->sign.")","\x6e\x61\x6de"=>"t\x6f\x5f\x61\x6dou\x6e\x74","si\x7a\x65"=>33,"\x72\x65quir\x65d"=>false),array("\x74\x79\x70\x65"=>"\x74e\x78t","\x6c\x61be\x6c"=>$this->l('Commission Rate(%)'),"\x6e\x61\x6d\x65"=>"\x63om\x6di\x73sion","\x73i\x7a\x65"=>33,"\x72\x65\x71\x75\x69re\x64"=>false,"d\x65s\x63"=>$this->l('This value should be from 0 to 100')),array("t\x79\x70\x65"=>"\x74\x65x\x74","\x6ca\x62\x65\x6c"=>$this->l('Deduction Rate(%)'),"n\x61me"=>"ded\x75c\x74\x69on_r\x61t\x65","size"=>33,"r\x65qu\x69re\x64"=>false,"d\x65s\x63"=>$this->l('Please input 0-100 for the percentage amount to deduct from the total amount before it is used for commission calculations.')),));$this->fields_form["\x73\x75b\x6dit"]=array("\x74itle"=>$this->l('Save'),"class"=>"ag\x69l\x65-b\x74n\x20ag\x69\x6c\x65-\x62\x74\x6e-d\x65f\x61\x75lt\x20\x70\x75\x6cl-\x72igh\x74");return parent::renderForm();}}
?>