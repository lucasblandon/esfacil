<?php /*
///-build_id: 2014100222.21
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"G\x4c\x4f\x42\x41\x4c\x53"}["p\x62\x6a\x67\x74q\x65"]="\x67\x72\x61de";${"GL\x4f\x42\x41\x4cS"}["k\x6b\x78k\x6ex\x70\x65"]="\x69\x64\x5f\x61\x67\x69l\x65_\x72e\x76\x69e\x77";${"\x47\x4cO\x42\x41\x4c\x53"}["o\x63\x61\x79\x72\x6ep\x71b"]="\x70\x72\x6fdu\x63\x74";${"\x47\x4cO\x42A\x4c\x53"}["emm\x6d\x76e\x7a"]="\x61\x70\x70\x6c\x79\x5f\x74o\x5f\x69\x64s";${"\x47L\x4f\x42\x41\x4c\x53"}["\x64n\x73\x6egx\x78ij\x64"]="\x70\x72\x6fd\x75\x63\x74s";${"\x47LO\x42\x41\x4c\x53"}["\x68r\x65\x76n\x74q\x6eq\x63\x69\x76"]="\x61\x70\x70\x6cy\x5f\x74\x6f";${"\x47\x4c\x4fB\x41\x4cS"}["\x6cll\x79\x65\x77\x64vk\x66\x78"]="d\x65\x66_l\x61ng";${"\x47\x4c\x4fBA\x4c\x53"}["b\x62\x71\x73\x67\x77\x79\x72"]="\x69d_\x70r\x6f\x64\x75\x63t";${"\x47\x4c\x4f\x42\x41\x4cS"}["k\x68\x7a\x74xxi\x73\x78\x6a"]="\x69\x64\x5fa\x67i\x6c\x65\x5f\x63riteri\x6f\x6e";${"\x47L\x4fBA\x4c\x53"}["\x76\x79\x78\x76\x6d\x74\x7ay"]="\x76\x61l\x75e";${"G\x4c\x4fB\x41\x4c\x53"}["\x6a\x6a\x62\x62\x6f\x69j\x63"]="\x6b\x65\x79";${"\x47LOBA\x4c\x53"}["gg\x6d\x77n\x75\x71f"]="\x72e\x73\x75\x6ct";${"\x47\x4c\x4fB\x41L\x53"}["l\x6cw\x72\x77\x6c\x6akk\x67\x6cv"]="\x69\x64\x5f\x6c\x61\x6e\x67";${"\x47\x4c\x4f\x42\x41LS"}["lu\x6e\x71x\x70\x77\x66\x68\x71t"]="i\x64\x5fc\x72\x69t\x65ri\x6f\x6e";${"\x47\x4c\x4f\x42A\x4cS"}["\x6bpd\x73\x7ai\x70\x6bm"]="\x73\x71\x6c";${"G\x4cOB\x41L\x53"}["m\x71x\x67\x78wm\x66\x68"]="defau\x6ct\x4c\x61n\x67u\x61\x67\x65";${"\x47\x4cO\x42\x41L\x53"}["e\x6f\x6fc\x6b\x77n\x64x"]="\x66ie\x6c\x64";${"GL\x4f\x42A\x4c\x53"}["f\x69\x78\x68\x74\x70\x75\x6c"]="\x66i\x65ld\x73A\x72r\x61\x79";${"\x47L\x4fB\x41\x4c\x53"}["\x62\x73\x66\x71\x77\x6d\x69\x63"]="\x6ca\x6eg\x75\x61ge";${"\x47\x4cO\x42A\x4cS"}["\x69\x67tud\x72\x69"]="\x66\x69\x65\x6c\x64s";class AgileCriterion extends ObjectModel{const FOR_ALL_PRODUCTS=-1;const APPLY_TO_CATALOG=1;const APPLY_TO_CATEGORIES=2;const APPLY_TO_PRODUCTS=3;public$id;public$id_agile_criterion;public$apply_to;public$apply_to_ids;public$name;public$date_add;protected$fieldsRequired=array('name');protected$fieldsSize=array();protected$fieldsValidate=array();protected$fieldsRequiredLang=array('name');protected$fieldsSizeLang=array('name'=>256);protected$fieldsValidateLang=array();protected$table='agile_criterion';protected$identifier='id_agile_criterion';public	function getFields(){$zzjyaxtllb="\x66i\x65l\x64\x73";parent::validateFields(false);${${"GL\x4fB\x41\x4c\x53"}["\x69g\x74\x75d\x72\x69"]}["\x64\x61te\x5fa\x64d"]=pSQL($this->date_add);${$zzjyaxtllb}["ap\x70\x6cy\x5f\x74o"]=pSQL($this->apply_to);${${"G\x4c\x4f\x42A\x4cS"}["\x69\x67\x74\x75\x64\x72i"]}["a\x70\x70ly_t\x6f\x5f\x69d\x73"]=pSQL($this->apply_to_ids);return(${${"\x47\x4cO\x42\x41\x4c\x53"}["\x69gtudri"]});}public function getTranslationsFieldsChild(){${"\x47\x4cO\x42A\x4c\x53"}["y\x65yv\x71\x73u\x71"]="\x64\x65\x66\x61\x75\x6c\x74\x4c\x61\x6e\x67u\x61\x67e";$rtfigrtmcqp="\x66i\x65\x6c\x64s\x41\x72\x72\x61\x79";$yaqftozusr="\x6c\x61n\x67u\x61\x67\x65s";$thxcstorr="la\x6e\x67\x75\x61\x67e\x73";${"\x47\x4c\x4fB\x41\x4c\x53"}["\x67jj\x63h\x69f"]="la\x6eg\x75\x61g\x65";self::validateFieldsLang();${$rtfigrtmcqp}=array("name");${${"\x47\x4cO\x42\x41\x4cS"}["i\x67\x74ud\x72\x69"]}=array();${$yaqftozusr}=Language::getLanguages();${${"G\x4c\x4fB\x41\x4cS"}["\x79\x65y\x76\x71s\x75q"]}=Configuration::get("P\x53_L\x41N\x47_D\x45FAU\x4c\x54");foreach(${$thxcstorr} as${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x67j\x6a\x63hi\x66"]}){${"\x47L\x4f\x42\x41\x4cS"}["\x67\x6b\x74\x77\x72\x77\x77\x73\x72\x65\x6d"]="\x6c\x61\x6e\x67\x75\x61g\x65";${${"\x47L\x4f\x42\x41\x4cS"}["\x69g\x74\x75d\x72\x69"]}[${${"G\x4cOBA\x4c\x53"}["\x62\x73\x66\x71\x77mic"]}["id\x5fl\x61\x6e\x67"]]["\x69d\x5fl\x61n\x67"]=${${"G\x4cO\x42AL\x53"}["\x67k\x74wrww\x73\x72em"]}["\x69\x64_l\x61n\x67"];${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x69g\x74udr\x69"]}[${${"G\x4cO\x42\x41LS"}["\x62\x73\x66q\x77m\x69c"]}["i\x64_l\x61ng"]][$this->identifier]=intval($this->id);foreach(${${"G\x4c\x4f\x42A\x4c\x53"}["f\x69\x78\x68\x74\x70\x75l"]} as${${"G\x4c\x4fB\x41\x4cS"}["\x65o\x6f\x63k\x77\x6e\x64x"]}){$ngvvubi="\x66\x69e\x6c\x64";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x75mb\x6e\x6f\x64\x75\x79"]="\x66\x69e\x6cd";$dtrlicrqox="l\x61\x6e\x67\x75\x61\x67e";if(!Validate::isTableOrIdentifier(${${"GLOB\x41\x4c\x53"}["\x65\x6fockw\x6ed\x78"]}))die(Tools::displayError());if(isset($this->{${$ngvvubi}}[${$dtrlicrqox}["id\x5flang"]])AND!empty($this->{${${"\x47\x4c\x4f\x42A\x4cS"}["\x65\x6f\x6f\x63k\x77\x6e\x64x"]}}[${${"G\x4c\x4f\x42A\x4c\x53"}["b\x73fqw\x6d\x69c"]}["\x69\x64_\x6can\x67"]])){$xrjbwkwbicmn="f\x69e\x6c\x64";${${"G\x4c\x4f\x42\x41\x4c\x53"}["ig\x74u\x64r\x69"]}[${${"G\x4c\x4fB\x41\x4c\x53"}["bsf\x71\x77\x6d\x69\x63"]}["i\x64_lang"]][${$xrjbwkwbicmn}]=pSQL($this->{${${"G\x4c\x4f\x42\x41\x4cS"}["\x65\x6f\x6f\x63\x6bwn\x64\x78"]}}[${${"\x47\x4cO\x42\x41\x4cS"}["b\x73\x66q\x77\x6dic"]}["\x69\x64_\x6c\x61\x6e\x67"]]);}elseif(in_array(${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x75\x6dbn\x6fd\x75y"]},$this->fieldsRequiredLang)){$tzciqetpep="f\x69el\x64s";${"G\x4cO\x42\x41\x4c\x53"}["\x6c\x70\x67\x6b\x77w\x75\x79x\x77\x73"]="f\x69\x65ld";${$tzciqetpep}[${${"\x47\x4c\x4f\x42A\x4c\x53"}["b\x73fq\x77m\x69\x63"]}["id\x5f\x6c\x61\x6e\x67"]][${${"\x47\x4cOBA\x4c\x53"}["\x65\x6f\x6f\x63\x6bw\x6e\x64x"]}]=pSQL($this->{${${"\x47LO\x42\x41\x4cS"}["\x6cp\x67\x6b\x77\x77\x75y\x78\x77\x73"]}}[${${"G\x4c\x4f\x42\x41L\x53"}["\x6d\x71\x78\x67x\x77\x6d\x66\x68"]}]);}else{$dbwurni="\x66\x69\x65\x6cds";$cwgqulwdbdir="\x66i\x65\x6c\x64";${$dbwurni}[${${"GL\x4f\x42\x41\x4cS"}["\x62s\x66\x71wmi\x63"]}["id\x5f\x6ca\x6eg"]][${$cwgqulwdbdir}]="";}}}return${${"\x47L\x4fB\x41\x4c\x53"}["i\x67tud\x72\x69"]};}public static function deleteCriterion($id_criterion){$aojmcbfcb="id\x5fcrit\x65\x72\x69on";${"\x47\x4cOBA\x4cS"}["\x6ff\x63\x74kf\x6al\x6ba\x6d"]="\x73\x71\x6c";${"\x47\x4c\x4fBA\x4c\x53"}["\x6ac\x73\x76\x6eu\x78\x79\x75r"]="id_\x63\x72i\x74\x65\x72\x69\x6fn";${${"\x47\x4c\x4f\x42A\x4cS"}["\x6b\x70\x64\x73\x7a\x69p\x6b\x6d"]}="D\x45LE\x54E \x46\x52\x4fM\x20`"._DB_PREFIX_."\x61\x67\x69l\x65_c\x72\x69\x74e\x72ion\x60\x20WHER\x45\x20id_agi\x6c\x65_c\x72it\x65\x72io\x6e\x3d".${$aojmcbfcb};Db::getInstance()->Execute(${${"G\x4cO\x42\x41\x4c\x53"}["\x6b\x70\x64\x73z\x69p\x6bm"]});$ddowbzv="\x73\x71\x6c";${${"\x47\x4cOB\x41L\x53"}["\x6b\x70\x64\x73\x7aip\x6b\x6d"]}="D\x45L\x45T\x45 \x46\x52OM `"._DB_PREFIX_."\x61g\x69le\x5fcr\x69te\x72io\x6e\x5fla\x6e\x67`\x20WH\x45\x52E id\x5fag\x69l\x65\x5fcr\x69\x74\x65\x72ion=".${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x6c\x75nq\x78p\x77\x66h\x71\x74"]};Db::getInstance()->Execute(${${"G\x4c\x4f\x42\x41L\x53"}["\x6ffct\x6bfj\x6c\x6b\x61\x6d"]});${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x6b\x70d\x73\x7ai\x70\x6b\x6d"]}="DE\x4c\x45\x54\x45\x20\x46\x52O\x4d \x60"._DB_PREFIX_."\x61\x67i\x6c\x65\x5fcr\x69\x74\x65ri\x6fn\x5f\x70\x72\x6f\x64\x75c\x74\x60 W\x48E\x52E i\x64_a\x67il\x65_crit\x65r\x69o\x6e=".${${"\x47L\x4f\x42\x41\x4cS"}["\x6c\x75\x6e\x71\x78\x70\x77f\x68\x71\x74"]};${"GL\x4f\x42\x41\x4c\x53"}["\x78\x75\x78\x73api\x7al"]="\x73\x71l";Db::getInstance()->Execute(${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x6b\x70d\x73z\x69\x70km"]});${$ddowbzv}="D\x45LE\x54E \x46\x52\x4fM \x60"._DB_PREFIX_."ag\x69l\x65\x5fr\x65\x76\x69ew\x5fgra\x64e`\x20\x57H\x45\x52E\x20i\x64\x5fagil\x65_cri\x74\x65\x72\x69on\x3d".${${"\x47\x4c\x4fBAL\x53"}["\x6a\x63\x73\x76\x6e\x75xyur"]};Db::getInstance()->Execute(${${"\x47\x4cOB\x41LS"}["x\x75\x78s\x61p\x69z\x6c"]});}public function getByName($name,$id_lang=NULL){$lvufdvwo="\x69d\x5fl\x61\x6e\x67";$welrre="id\x5f\x6c\x61ng";$meeblbbmv="\x72\x65\x73\x75\x6c\x74";$nquxrfn="\x6eam\x65";if(!${$lvufdvwo})${$welrre}=Configuration::get("P\x53_\x4cAN\x47\x5fDE\x46\x41ULT");${"\x47LOB\x41\x4c\x53"}["\x71zgm\x76f\x74\x66\x6d\x64j"]="\x72e\x73\x75lt";${$meeblbbmv}=Db::getInstance()->getRow("\n\t\t\x53\x45\x4c\x45C\x54 c\x2e*,\x63\x6c.name \n\t\t\x46R\x4fM `"._DB_PREFIX_."\x61\x67\x69\x6c\x65\x5fc\x72\x69\x74\x65\x72\x69on` c\n\t\t  \x20\x20\x4c\x45\x46T\x20\x4a\x4fI\x4e\x20\x60"._DB_PREFIX_."a\x67\x69le\x5fc\x72i\x74er\x69\x6fn_\x6ca\x6eg\x60\x20\x63\x6c\x20\x4fN \x63\x2e\x69d\x5f\x61gile_cr\x69t\x65\x72i\x6fn\x20\x3d c\x6c\x2ei\x64_\x61g\x69l\x65_\x63\x72\x69\x74\x65\x72\x69\x6f\x6e\n\t\tW\x48E\x52E\x20\x31\n\t\t \x20\x20 \x41\x4e\x44\x20`\x6e\x61\x6d\x65`\x20\x3d \x27".pSQL(${$nquxrfn})."\x27\n\t\t\x20   \x41\x4eD\x20cl.\x60id_la\x6e\x67`\x20\x3d\x20".intval(${${"GL\x4fBALS"}["\x6clwr\x77\x6cj\x6b\x6bg\x6c\x76"]}));if(!${${"G\x4c\x4f\x42A\x4c\x53"}["\x67\x67mw\x6eu\x71f"]})return false;$this->id=${${"GLOB\x41LS"}["qzgm\x76f\x74f\x6ddj"]}["\x69\x64\x5f\x61\x67\x69\x6c\x65_cri\x74\x65\x72i\x6fn"];foreach(${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x67g\x6d\x77\x6e\x75qf"]} AS${${"\x47L\x4fB\x41L\x53"}["\x6a\x6a\x62boij\x63"]}=>${${"\x47L\x4fBA\x4c\x53"}["\x76y\x78\x76\x6dt\x7a\x79"]}){if(key_exists(${${"\x47LO\x42\x41L\x53"}["\x6a\x6ab\x62\x6fijc"]},$this)){$this->{${${"\x47\x4c\x4f\x42AL\x53"}["jj\x62\x62o\x69j\x63"]}}=${${"\x47\x4cOB\x41\x4cS"}["\x76\x79\x78\x76mt\x7a\x79"]};}}return$this;}public static function getList($id_lang=NULL){${"GLO\x42\x41\x4cS"}["\x72\x76\x73\x61\x77\x65\x73\x6ej\x6c"]="\x73\x71\x6c";if(!${${"\x47\x4c\x4fBA\x4c\x53"}["ll\x77r\x77l\x6a\x6b\x6b\x67\x6c\x76"]})${${"\x47L\x4f\x42A\x4cS"}["l\x6cw\x72w\x6cj\x6bkg\x6cv"]}=Configuration::get("\x50\x53\x5fLA\x4e\x47_D\x45\x46A\x55\x4cT");$qqowvkies="s\x71\x6c";${${"\x47L\x4f\x42\x41L\x53"}["\x72v\x73a\x77\x65\x73n\x6a\x6c"]}="\n\t\tS\x45L\x45C\x54 \x63\x2e*,cl\x2enam\x65\x20\n\t\tFR\x4fM\x20`"._DB_PREFIX_."agil\x65\x5f\x63\x72\x69te\x72io\x6e`\x20c\n\t\t\x20\x20  \x4cEF\x54\x20\x4a\x4f\x49\x4e \x60"._DB_PREFIX_."\x61\x67il\x65\x5fc\x72i\x74\x65rion_\x6c\x61\x6e\x67`\x20\x63\x6c\x20O\x4e \x63\x2e\x69\x64\x5fag\x69le\x5f\x63\x72iter\x69on \x3d \x63l.\x69\x64_a\x67\x69\x6ce_\x63\x72\x69\x74\x65ri\x6fn\n\t\tWHER\x45\x20\x31\n\t\t\x20\x20\x20\x20A\x4e\x44\x20cl.\x60\x69\x64_\x6c\x61ng` \x3d\x20".intval(${${"GL\x4f\x42A\x4c\x53"}["\x6cl\x77\x72\x77\x6c\x6a\x6bk\x67\x6c\x76"]});return Db::getInstance()->ExecuteS(${$qqowvkies});}static public function addToProduct($id_agile_criterion,$id_product){if(!Validate::isUnsignedId(${${"\x47\x4cO\x42A\x4c\x53"}["k\x68ztx\x78\x69s\x78\x6a"]})||!Validate::isUnsignedId(${${"\x47\x4c\x4fB\x41L\x53"}["\x62bqsg\x77y\x72"]}))die(Tools::displayError());$mwmjbv="i\x64\x5f\x70\x72odu\x63t";return(Db::getInstance()->Execute("\n\t\t\x49N\x53ER\x54 \x49\x4eTO \x60"._DB_PREFIX_."a\x67\x69\x6ce_c\x72i\x74e\x72\x69\x6f\x6e_\x70ro\x64\x75ct\x60\n\t\t(`id_\x61g\x69l\x65_cr\x69\x74e\x72\x69on`, `\x69\x64_pr\x6f\x64\x75c\x74`)\x20V\x41\x4c\x55ES(\n\t\t".intval(${${"G\x4c\x4f\x42A\x4cS"}["khz\x74\x78xis\x78\x6a"]}).",\n\t\t".intval(${$mwmjbv}).")"));}static public function getByProduct($id_product,$id_lang){${${"\x47L\x4f\x42\x41L\x53"}["\x6c\x6cl\x79\x65\x77dvkfx"]}=intval(Configuration::get("P\x53_\x4cA\x4eG\x5fDE\x46AUL\x54"));${"G\x4cOBA\x4c\x53"}["\x71\x73i\x6f\x7a\x6b"]="\x69\x64_\x6ca\x6e\x67";$urhvguv="\x69d_la\x6eg";if(intval(${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x71sio\x7a\x6b"]})==0)${$urhvguv}=${${"G\x4c\x4fB\x41\x4cS"}["\x6cllyewdv\x6b\x66x"]};$paffckegp="d\x65\x66\x5flang";${${"G\x4c\x4f\x42\x41L\x53"}["\x6b\x70\x64\x73\x7a\x69pk\x6d"]}="\n\t\t\x53\x45\x4c\x45C\x54 pcc.`id\x5fa\x67\x69le_criterio\x6e`, \x43\x41\x53E\x20W\x48E\x4e\x20IFN\x55\x4cL(cl.\x60\x6eam\x65`,'')!=\x27' T\x48\x45N cl\x2ena\x6de E\x4c\x53E c\x6cd.n\x61m\x65 END\x20\x41\x53 \x6eame\n\t\t\x46\x52\x4fM \x60"._DB_PREFIX_."agile\x5f\x63\x72\x69teri\x6f\x6e\x60 p\x63c\n\t\t   \x20\x4cE\x46T\x20\x4a\x4f\x49N \x20\x60"._DB_PREFIX_."\x61gile\x5fcrit\x65rion\x5f\x6can\x67` \x63\x6c \x4fN \x70\x63\x63.id_\x61gi\x6ce\x5f\x63riter\x69\x6f\x6e\x3dc\x6c\x2ei\x64\x5fa\x67\x69le\x5fcrit\x65r\x69o\x6e\x20\x41\x4eD\x20\x63l.\x69d_\x6c\x61\x6e\x67=".intval(${${"\x47L\x4f\x42A\x4c\x53"}["ll\x77\x72w\x6c\x6ak\x6b\x67\x6cv"]})."\n\t\t \x20  \x4c\x45FT\x20JOIN\x20 \x60"._DB_PREFIX_."agi\x6c\x65\x5f\x63\x72ite\x72\x69o\x6e_\x6ca\x6e\x67\x60\x20cld \x4fN p\x63\x63\x2e\x69\x64\x5f\x61\x67il\x65\x5fc\x72it\x65\x72ion\x3d\x63l\x64\x2e\x69d\x5f\x61\x67\x69\x6c\x65_cr\x69\x74\x65r\x69\x6f\x6e \x41N\x44\x20cl\x64.\x69d\x5fl\x61n\x67=".intval(${$paffckegp})."\n\x20 \x20 \t\t\x49NNER\x20\x4aOI\x4e\x20\x60"._DB_PREFIX_."a\x67ile_c\x72\x69\x74e\x72\x69on_\x70\x72\x6f\x64uc\x74` \x70\x63cp ON p\x63c.`\x69\x64_\x61gil\x65\x5f\x63r\x69\x74e\x72\x69\x6fn`\x20\x3d pccp.`id\x5fagile_crit\x65\x72i\x6fn`\n\t\t\x57HER\x45\x20pc\x63\x70.\x60\x69\x64_p\x72o\x64u\x63\x74\x60\x20\x3d\x20".intval(${${"G\x4c\x4fB\x41\x4cS"}["\x62\x62\x71\x73\x67\x77y\x72"]})."\n\t\t";return(Db::getInstance()->ExecuteS(${${"\x47L\x4f\x42A\x4c\x53"}["\x6b\x70d\x73\x7a\x69pk\x6d"]}));}static public function deleteByProduct($id_criterion,$id_product){${"G\x4cO\x42\x41\x4c\x53"}["emhohhl\x71"]="\x69\x64\x5fp\x72o\x64\x75\x63t";if(!Validate::isUnsignedId(${${"\x47LO\x42ALS"}["\x65\x6dh\x6f\x68\x68\x6c\x71"]}))die(Tools::displayError());${"\x47\x4c\x4f\x42\x41L\x53"}["\x75\x6ey\x69s\x63\x75\x77"]="i\x64_c\x72i\x74\x65\x72\x69\x6fn";return(Db::getInstance()->Execute("\n\t\tDE\x4cET\x45 \x46\x52\x4f\x4d\x20\x60"._DB_PREFIX_."a\x67\x69\x6ce\x5fcr\x69t\x65\x72\x69o\x6e_p\x72od\x75\x63t`\n\t\tW\x48E\x52\x45\x20`\x69\x64_\x61\x67\x69\x6ce_cri\x74\x65rio\x6e`\x3d ".intval(${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x75n\x79i\x73\x63\x75\x77"]})."\x20A\x4eD  `\x69d\x5f\x70\x72o\x64uct`\x20=\x20".intval(${${"\x47L\x4fB\x41LS"}["\x62\x62q\x73\x67\x77\x79r"]})));}public static function applyCriterions($id_criterion,$apply_to,$apply_to_ids){$xtbsiuvemmhf="\x73\x71\x6c";${"GLOB\x41\x4c\x53"}["\x61\x77he\x75\x77\x6cd\x65\x70"]="\x70\x72\x6f\x64\x75\x63\x74s";$yropflmwo="a\x70\x70\x6cy_\x74o_\x69\x64\x73";${${"G\x4cO\x42\x41\x4cS"}["\x61\x77\x68\x65uw\x6c\x64\x65\x70"]}=array();$qctsuh="\x70\x72\x6f\x64\x75\x63t\x73";switch(${${"G\x4c\x4fB\x41L\x53"}["h\x72\x65\x76\x6et\x71\x6e\x71\x63iv"]}){case self::APPLY_TO_CATALOG:${${"\x47\x4c\x4f\x42\x41\x4cS"}["k\x70d\x73z\x69\x70k\x6d"]}="\x53\x45\x4c\x45\x43T\x20i\x64\x5f\x70ro\x64u\x63t\x20FR\x4f\x4d `"._DB_PREFIX_."produ\x63t`";${${"G\x4c\x4fB\x41L\x53"}["\x64\x6e\x73ng\x78\x78\x69\x6a\x64"]}=Db::getInstance()->ExecuteS(${$xtbsiuvemmhf});break;case self::APPLY_TO_CATEGORIES:if(!empty(${${"G\x4c\x4f\x42\x41L\x53"}["\x65\x6d\x6d\x6dvez"]})){$hafztmtpcy="\x73\x71\x6c";${"GLO\x42\x41L\x53"}["\x74ldp\x75\x62t\x66y"]="\x73\x71l";$dvfeuksk="p\x72o\x64u\x63t\x73";${$hafztmtpcy}="\x53E\x4cE\x43T\x20\x69d\x5f\x70r\x6fd\x75ct\x20\x46\x52\x4f\x4d\x20\x60"._DB_PREFIX_."\x63a\x74eg\x6fr\x79_pr\x6fd\x75c\x74\x60\x20W\x48\x45\x52\x45\x20\x69d_c\x61\x74\x65\x67o\x72y\x20IN\x20(".implode(",",${${"GL\x4f\x42\x41\x4cS"}["\x65\x6dmm\x76\x65\x7a"]}).")";${$dvfeuksk}=Db::getInstance()->ExecuteS(${${"\x47\x4c\x4f\x42A\x4c\x53"}["tl\x64\x70\x75\x62t\x66y"]});}break;case self::APPLY_TO_PRODUCTS:if(!empty(${$yropflmwo})){${"G\x4c\x4f\x42A\x4c\x53"}["\x61a\x75\x67\x73\x6dd"]="\x61\x70p\x6c\x79_t\x6f\x5f\x69\x64\x73";$nfdchfrd="i\x64\x5f\x70r\x6fd\x75c\x74";foreach(${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x61\x61\x75\x67\x73\x6d\x64"]} AS${$nfdchfrd}){${${"\x47\x4c\x4f\x42ALS"}["\x64\x6e\x73n\x67x\x78i\x6a\x64"]}[]=array("i\x64\x5fp\x72od\x75\x63t"=>${${"\x47\x4cOB\x41\x4c\x53"}["bb\x71\x73\x67\x77yr"]});}}break;}if(empty(${${"\x47\x4c\x4f\x42AL\x53"}["\x64\x6e\x73\x6egxx\x69jd"]}))return;foreach(${$qctsuh} AS${${"\x47\x4c\x4fBA\x4cS"}["\x6f\x63a\x79\x72n\x70\x71\x62"]}){$pdtothw="id\x5f\x63\x72\x69\x74\x65\x72\x69on";${"\x47\x4c\x4fB\x41\x4c\x53"}["\x68\x6e\x78\x62\x6c\x64\x70"]="pr\x6f\x64\x75\x63\x74";self::deleteByProduct(${$pdtothw},${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x68nx\x62\x6c\x64\x70"]}["i\x64\x5f\x70r\x6fduc\x74"]);self::addToProduct(${${"\x47\x4cOB\x41\x4c\x53"}["l\x75n\x71\x78\x70\x77\x66\x68\x71t"]},${${"G\x4c\x4f\x42A\x4cS"}["o\x63\x61\x79\x72\x6e\x70\x71b"]}["i\x64_p\x72o\x64\x75c\x74"]);}}static public function addGrade($id_agile_review,$id_agile_criterion,$grade){$qgmpqrfs="\x69d\x5fag\x69l\x65\x5fc\x72\x69\x74\x65\x72\x69\x6f\x6e";if(!Validate::isUnsignedId(${${"G\x4c\x4f\x42\x41\x4cS"}["\x6b\x6b\x78\x6b\x6ex\x70e"]})||!Validate::isUnsignedId(${$qgmpqrfs}))die(Tools::displayError());$yqjpxbem="g\x72\x61d\x65";if(${${"GL\x4f\x42\x41L\x53"}["p\x62\x6a\x67\x74qe"]}<0){${${"G\x4c\x4f\x42ALS"}["p\x62\x6a\x67\x74q\x65"]}=0;}else if(${$yqjpxbem}>10){$wclpwd="\x67\x72\x61\x64\x65";${$wclpwd}=10;}return(Db::getInstance()->Execute("\n\t\tI\x4e\x53\x45R\x54 \x49\x4e\x54O \x60"._DB_PREFIX_."\x61\x67\x69l\x65_\x72\x65\x76i\x65\x77_\x67rade\x60\n\t\t(`id\x5fa\x67i\x6ce\x5f\x72\x65vie\x77\x60, `i\x64\x5f\x61\x67il\x65\x5fcri\x74\x65r\x69o\x6e\x60, `\x67\x72ad\x65`)\x20V\x41\x4cU\x45\x53(\n\t\t".intval(${${"G\x4cO\x42A\x4cS"}["\x6b\x6b\x78\x6b\x6e\x78\x70\x65"]}).",\n\t\t".intval(${${"G\x4c\x4f\x42AL\x53"}["khz\x74\x78\x78isx\x6a"]}).",\n\t\t".intval(${${"\x47LO\x42\x41\x4c\x53"}["\x70b\x6a\x67tq\x65"]}).")"));}}
?>