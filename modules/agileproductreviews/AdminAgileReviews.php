<?php /*
///-build_id: 2014100222.21
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"\x47\x4c\x4f\x42\x41LS"}["\x6es\x73\x6e\x6f\x6do\x65\x79\x64"]="p\x72\x6f\x64u\x63\x74";${"G\x4c\x4f\x42\x41L\x53"}["b\x78\x68\x70\x6f\x76\x74"]="\x64\x65f\x63\x75\x72r\x65n\x63\x79";${"\x47\x4cOB\x41\x4c\x53"}["xdw\x7a\x66\x65\x62\x63"]="\x6f\x62\x6a";${"GLOB\x41LS"}["g\x75\x7ag\x62\x6ecn\x6d\x78"]="\x63\x75r\x72e\x6e\x74\x49\x6e\x64\x65\x78";${"G\x4c\x4f\x42\x41\x4cS"}["\x6c\x78d\x67c\x75\x6a"]="\x75p\x64\x61\x74\x65";${"\x47LO\x42\x41\x4c\x53"}["lz\x79\x68\x6ed\x70o\x6a\x70\x64i"]="\x69d_\x61g\x69\x6c\x65_\x72\x65\x76\x69ew";${"\x47\x4c\x4f\x42\x41L\x53"}["\x76\x77\x73q\x6f\x69\x76\x6eb\x6c"]="\x73\x71\x6c";${"G\x4cOBA\x4cS"}["\x77lfcxe\x7aq\x64\x77\x6d"]="t\x61b\x69d";${"\x47\x4cO\x42\x41\x4cS"}["\x76\x67\x6b\x6b\x79b\x71"]="\x64\x61\x74a";${"G\x4cO\x42\x41LS"}["\x6b\x78\x70qp\x6a\x72u"]="r\x65vi\x65\x77";include_once(_PS_ROOT_DIR_."/m\x6fd\x75\x6ces/\x61\x67i\x6ce\x70\x72o\x64uc\x74r\x65v\x69ews/Ag\x69\x6ce\x52e\x76i\x65w.p\x68\x70");class AdminAgileReviews extends ModuleAdminController{protected$position_identifier='id_agile_review';protected$link;public function __construct(){global$cookie;$this->table="\x61gi\x6c\x65\x5fre\x76ie\x77";$this->identifier="i\x64_agile_\x72\x65vi\x65\x77";$this->className="\x41g\x69le\x52\x65\x76ie\x77";$this->bootstrap=true;parent::__construct();$this->lang=false;$this->addRowAction("\x64\x65\x6c\x65\x74e");$this->addRowAction("\x65\x64\x69t");$this->bulk_actions["\x61\x70\x70\x72\x6f\x76e"]=array("te\x78t"=>$this->l('Approve'),"con\x66\x69\x72m"=>$this->l('Are you sure want to approve all selected reviews?'));$this->_join=$this->_join."\tL\x45F\x54 \x4aO\x49N \x60"._DB_PREFIX_."\x6ca\x6eg`\x20\x6c \x4fN\x20(a.\x60i\x64\x5fl\x61ng\x60\x3d\x6c\x2e\x60i\x64\x5fla\x6eg\x60)"." L\x45F\x54 JO\x49\x4e\x20\x60"._DB_PREFIX_."\x70r\x6fdu\x63t_\x6ca\x6e\x67`\x20p\x6c\x20\x4fN (\x61.\x60id\x5f\x70r\x6fd\x75\x63\x74`\x20= \x70l.\x60id\x5fproduct`\x20AND\x20\x70\x6c\x2eid\x5fla\x6eg=".$cookie->id_lang." AN\x44\x20pl\x2eid_\x73\x68\x6f\x70=".(int)Shop::getContextShopID().")";$this->_select=$this->_select."\x70l\x2ena\x6de\x20\x41\x53 \x70\x72od\x75c\x74,\x20\x6c.i\x73o_c\x6fde a\x73 \x6c\x61n\x67\x75\x61g\x65";$this->fields_list=array("\x69d\x5f\x61\x67i\x6c\x65\x5f\x72\x65\x76\x69\x65\x77"=>array("\x74i\x74\x6c\x65"=>$this->l('ID'),"al\x69\x67n"=>"center","\x77\x69\x64th"=>25),"va\x6c\x69\x64\x61te"=>array("\x74it\x6c\x65"=>$this->l('Approved'),"\x61lign"=>"ce\x6e\x74e\x72","wi\x64\x74\x68"=>25,"\x74\x79p\x65"=>"b\x6f\x6fl","ca\x6cl\x62a\x63k"=>"\x70r\x69\x6etV\x61l\x69d\x61t\x65\x49\x63o\x6e","o\x72\x64er\x62\x79"=>false),"p\x72\x6f\x64\x75\x63t"=>array("\x74itle"=>$this->l('Product'),"a\x6ci\x67n"=>"\x6cef\x74","\x77id\x74\x68"=>120,"fil\x74\x65\x72_key"=>"\x70\x6c\x21n\x61\x6de"),"\x6c\x61ngua\x67\x65"=>array("\x74\x69tle"=>$this->l('Lang'),"\x61li\x67n"=>"l\x65ft","w\x69\x64\x74h"=>40,"f\x69lter\x5fkey"=>"\x6c\x21\x69s\x6f_c\x6fd\x65"),"\x63us\x74o\x6de\x72"=>array("tit\x6c\x65"=>$this->l('Reviewer'),"\x61lign"=>"l\x65\x66t","w\x69\x64th"=>50),"grad\x65"=>array("\x74\x69\x74l\x65"=>$this->l('Rating'),"alig\x6e"=>"\x6c\x65f\x74","\x77idt\x68"=>30),"\x69p_\x61d\x64res\x73"=>array("t\x69t\x6ce"=>$this->l('IP Address'),"a\x6c\x69\x67\x6e"=>"le\x66\x74","\x77i\x64\x74\x68"=>50),"co\x6e\x74\x65n\x74"=>array("\x74itl\x65"=>$this->l('Content'),"a\x6c\x69gn"=>"\x6c\x65\x66t","wid\x74h"=>250));}public function printValidateIcon($value,$data){$mviqwhtgjt="\x6e\x65\x77t\x6fe\x6bn";$ttwtkog="\x6e\x65w\x74\x6fek\x6e";global$cookie;${${"\x47\x4c\x4f\x42\x41LS"}["\x6b\x78\x70\x71p\x6a\x72\x75"]}=new AgileReview(${${"G\x4cO\x42A\x4c\x53"}["v\x67k\x6b\x79b\x71"]}["\x69\x64_a\x67il\x65_\x72evi\x65w"]);${${"G\x4c\x4f\x42AL\x53"}["w\x6c\x66\x63x\x65\x7a\x71\x64\x77m"]}=Tab::getIdFromClassName("\x41dm\x69n\x41\x67\x69\x6ce\x52\x65v\x69ew\x73");$bbuvhlukim="ta\x62\x69d";${$ttwtkog}=Tools::getAdminToken("Adm\x69\x6e\x41g\x69l\x65R\x65\x76\x69\x65ws".intval(${$bbuvhlukim}).intval($cookie->id_employee));if(!Validate::isLoadedObject(${${"G\x4c\x4fB\x41\x4c\x53"}["\x6b\x78\x70\x71pjr\x75"]}))die(Tools::displayError("Inva\x6cid \x6fb\x6a\x65c\x74\x73"));return"\x3ca\x20hre\x66=\x22\x69\x6e\x64\x65x\x2ep\x68p?cont\x72\x6f\x6cle\x72\x3dA\x64mi\x6e\x41\x67il\x65\x52\x65\x76i\x65\x77\x73\x26i\x64\x5f\x61\x67\x69le_rev\x69e\x77\x3d".(int)($review->id)."\x26\x63hange\x56\x61li\x64a\x74e\x56\x61l\x26t\x6f\x6b\x65\x6e=".${$mviqwhtgjt}."\x22\x3e".($review->validate?"<im\x67 \x73r\x63=\"../\x69\x6dg/a\x64\x6di\x6e/e\x6e\x61b\x6ced\x2e\x67i\x66\"\x20/\x3e":"\x3c\x69mg \x73rc=\"\x2e\x2e/img/a\x64\x6d\x69\x6e/\x64\x69\x73\x61b\x6ced\x2e\x67\x69\x66\x22\x20/>")."\x3c/a>";}public function initToolbar(){parent::initToolbar();unset($this->toolbar_btn["ne\x77"]);}public function postProcess(){global$currentIndex;if(Tools::getValue("\x73\x75b\x6d\x69\x74B\x75lka\x70\x70\x72ove".$this->table)){if(isset($_POST[$this->table."\x42ox"])){$crzijpn="\x72\x65vie\x77\x73i\x64s";${"\x47\x4c\x4f\x42\x41\x4cS"}["m\x63\x75\x72\x63\x76\x6f"]="\x73q\x6c";${$crzijpn}=$_POST[$this->table."B\x6f\x78"];$epwfwe="rev\x69\x65\x77\x73i\x64s";${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x76ws\x71\x6fi\x76n\x62\x6c"]}="\x55\x50DAT\x45\x20"._DB_PREFIX_."\x61g\x69\x6c\x65\x5fre\x76i\x65w \x53\x45T\x20\x76al\x69\x64\x61t\x65=\x31 \x57\x48ERE id_\x61gi\x6c\x65\x5f\x72\x65\x76iew\x20\x69\x6e\x20(".implode(",",${$epwfwe}).")";Db::getInstance()->Execute(${${"\x47LO\x42\x41\x4c\x53"}["\x6dc\x75\x72\x63v\x6f"]});}else{$this->_errors[]="No\x20\x72ev\x69\x65ws \x77\x61s s\x65\x6ce\x63t\x65d t\x6f\x20\x61\x70pr\x6f\x76\x65.";}return;}elseif(Tools::isSubmit("cha\x6e\x67\x65Vali\x64a\x74e\x56\x61\x6c")AND Tools::getValue("\x69d_a\x67\x69l\x65\x5fr\x65\x76i\x65w")){$zdmpqox="i\x64_ag\x69\x6ce\x5f\x72\x65\x76i\x65\x77";${$zdmpqox}=(int)Tools::getValue("id\x5f\x61g\x69le_\x72ev\x69ew");$fsuktyavq="\x72\x65vi\x65\x77";${${"GL\x4fB\x41\x4c\x53"}["\x6b\x78p\x71\x70\x6aru"]}=new AgileReview(${${"\x47\x4c\x4f\x42\x41L\x53"}["l\x7ayhn\x64\x70\x6f\x6a\x70d\x69"]});if(!Validate::isLoadedObject(${$fsuktyavq}))$this->_errors[]=Tools::displayError("\x41n\x20\x65\x72\x72o\x72 o\x63cur\x72ed\x20whi\x6ce up\x64a\x74\x69n\x67 \x72ev\x69ew\x2e");${"\x47\x4cOB\x41L\x53"}["s\x72o\x77ei\x79j\x65\x75"]="up\x64\x61t\x65";${${"\x47\x4cO\x42A\x4c\x53"}["\x73\x72\x6fw\x65\x69\x79j\x65u"]}=Db::getInstance()->Execute("\x55P\x44ATE `"._DB_PREFIX_."\x61gile_r\x65\x76ie\x77` S\x45\x54\x20\x76\x61\x6ci\x64\x61\x74e \x3d ".($review->validate?0:1)." W\x48E\x52\x45\x20\x69\x64\x5f\x61gil\x65\x5f\x72\x65\x76\x69e\x77\x20\x3d\x20".(int)($review->id));if(!${${"\x47\x4c\x4fB\x41\x4cS"}["\x6c\x78\x64\x67c\x75j"]})$this->_errors[]=Tools::displayError("A\x6e\x20\x65\x72\x72or \x6fc\x63ur\x72\x65\x64\x20wh\x69\x6c\x65 \x75\x70\x64\x61t\x69n\x67 \x72e\x76i\x65\x77\x2e");Tools::redirectAdmin(${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x67\x75\x7a\x67\x62\x6e\x63\x6em\x78"]}."\x26\x74\x6fk\x65\x6e=".$this->token);}${${"G\x4c\x4fB\x41\x4cS"}["\x6b\x78\x70q\x70\x6a\x72u"]}=new AgileReview((int)Tools::getValue("i\x64_\x61\x67\x69l\x65\x5fre\x76ie\x77"));if(empty($review->response)AND!empty($_POST["\x72e\x73\x70o\x6ese"])){$_POST["\x64\x61te_r\x65\x73p\x6f\x6e\x73\x65"]=date("\x59-\x6d-\x64 H:i:\x73");}return parent::postProcess();}public function renderForm(){global$cookie;if(!(${${"\x47L\x4f\x42A\x4c\x53"}["\x78\x64\x77zf\x65\x62c"]}=$this->loadObject(true)))return;${${"G\x4c\x4f\x42AL\x53"}["\x62x\x68\x70\x6fv\x74"]}=new Currency(Configuration::get("P\x53\x5f\x43\x55\x52\x52EN\x43Y_\x44\x45\x46AU\x4c\x54"));$this->fields_form=array("l\x65gend"=>array("\x74i\x74\x6ce"=>$this->l('Review Details'),"\x69\x6d\x61\x67e"=>"../im\x67/\x61dmi\x6e/\x74ab-\x63u\x73\x74\x6f\x6de\x72s\x2egif"),"\x69\x6ep\x75t"=>array(array("\x74yp\x65"=>"tex\x74","\x6c\x61\x62\x65\x6c"=>$this->l('Customer'),"name"=>"cu\x73\x74ome\x72","si\x7a\x65"=>33,"\x72\x65q\x75i\x72\x65d"=>false),array("\x74ype"=>"pr\x6f\x64\x75c\x74","\x6c\x61bel"=>$this->l('Product'),"\x6ea\x6d\x65"=>"\x69\x64\x5fp\x72\x6f\x64uc\x74","s\x69\x7ae"=>33,"\x72\x65\x71\x75\x69\x72e\x64"=>false),array("\x74\x79\x70\x65"=>"\x74\x65\x78t","l\x61bel"=>$this->l('IP Address'),"\x6eame"=>"\x69p_\x61\x64dr\x65ss","s\x69\x7ae"=>33,"\x72e\x71\x75i\x72\x65\x64"=>false),array("type"=>"tex\x74","l\x61\x62\x65\x6c"=>$this->l('Grade'),"nam\x65"=>"\x67\x72\x61d\x65","\x73\x69\x7ae"=>33,"r\x65q\x75\x69\x72\x65\x64"=>false,"\x64es\x63"=>$this->l('This value should be from 0 to 5')),array("\x74ype"=>"\x73e\x6c\x65\x63\x74","l\x61b\x65l"=>$this->l('Language:'),"nam\x65"=>"i\x64\x5fl\x61ng","r\x65\x71\x75ir\x65\x64"=>false,"defa\x75\x6c\x74\x5fvalu\x65"=>0,"\x6fpt\x69\x6fn\x73"=>array("\x71\x75\x65r\x79"=>Language::getLanguages(false),"\x69\x64"=>"id\x5fla\x6eg","nam\x65"=>"\x6eam\x65",),),array("\x74\x79pe"=>"\x74ext\x61rea","\x6cab\x65\x6c"=>$this->l('Content'),"na\x6de"=>"\x63\x6f\x6e\x74e\x6e\x74","\x72\x6fw\x73"=>5,"co\x6c\x73"=>80,"\x72\x65q\x75\x69red"=>false,),array("\x74\x79p\x65"=>"\x74\x65\x78\x74\x61\x72ea","la\x62el"=>$this->l('Response'),"na\x6de"=>"\x72es\x70\x6f\x6e\x73\x65","\x72ows"=>5,"\x63\x6fl\x73"=>80,"r\x65\x71\x75\x69\x72ed"=>false,),));$this->fields_form["\x73u\x62\x6dit"]=array("t\x69\x74\x6c\x65"=>$this->l('Save'),"cl\x61ss"=>"b\x74n b\x74n-\x64\x65fau\x6c\x74 \x70u\x6c\x6c-ri\x67ht");${${"\x47\x4c\x4f\x42A\x4c\x53"}["n\x73s\x6e\x6f\x6d\x6f\x65y\x64"]}=new Product($obj->id_product,false,$cookie->id_lang);$this->tpl_form_vars=array("p\x72o\x64\x75\x63t"=>${${"\x47\x4cO\x42\x41L\x53"}["nss\x6eom\x6fe\x79d"]},);return parent::renderForm();}}
?>