<?php
if (!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_xinglan_kj {
	public function __construct() {}

	public function global_header(){ 
		global $_G;
		function get_commentnum($aid){
			$aid = (int) $aid;
			return DB::result_first("SELECT `commentnum` FROM ".DB::table('portal_article_count')." WHERE aid = '$aid'");
		}
		$html = $_G['cache']['plugin']['xinglan_kj']['subnav_html'];
		return $html; 
	}
}

class plugin_xinglan_kj_portal extends plugin_xinglan_kj{}
?>
