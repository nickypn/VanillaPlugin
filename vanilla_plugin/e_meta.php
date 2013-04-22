<?php
/*
 * Vanilla Plugin 1.2
 *
 * Copyright (C) 2007-2011 Xen Themes (xenthemes.com)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl-3.0.txt)
 *
 * $Source: 
 * $Revision: 1.2 $
 * $Date: 22/04/2013 $
 * $Author: leonlloyd $
*/

global $pref;
	
	if (isset($pref['plug_installed']['e107slider'])) {

		$jscript = "";

	} else {

		$jscript = "<script src='//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>";
	}

if(basename($_SERVER['PHP_SELF'])=='admin_typography.php' ) {
echo "
	<link rel='stylesheet' type='text/css' href='".e_PLUGIN_ABS."vanilla_plugin/style.css' />
	<script type='text/javascript' src='".e_PLUGIN."vanilla_plugin/picker.js'></script>
	";
} 

if(basename($_SERVER['PHP_SELF'])=='admin_backgrounds.php') {
echo "
	<link rel='stylesheet' type='text/css' href='".e_PLUGIN_ABS."vanilla_plugin/style.css' />
	<script type='text/javascript' src='".e_PLUGIN."vanilla_plugin/picker.js'></script>\n<script type='text/javascript'>
    	function addtext(sc) {
      		document.forms.dataform.vtp_bodyBg_img.value=sc;
    	}
    	function addtext2(sc) {
      		document.forms.dataform.vtp_contentBg_img.value=sc;
		}
		function addtext3(sc) {
      		document.forms.dataform.vtp_footerBg_img.value=sc;
		}
	</script>";
}

if(basename($_SERVER['PHP_SELF'])=='admin_config.php') {
echo "
	<link rel='stylesheet' type='text/css' href='".e_PLUGIN_ABS."vanilla_plugin/style.css' />
	<script type='text/javascript' src='".e_PLUGIN."vanilla_plugin/picker.js'></script>\n<script type='text/javascript'>
    	function addtext(sc) {
      		document.forms.dataform.vtp_brand_img.value=sc;
    	}
	</script>";
}

if(basename($_SERVER['PHP_SELF'])=='admin_social.php' || basename($_SERVER['PHP_SELF'])=='admin_check_update.php' || basename($_SERVER['PHP_SELF'])=='admin_help.php') {
echo "
	<link rel='stylesheet' type='text/css' href='".e_PLUGIN_ABS."vanilla_plugin/style.css' />
	";
}

if(basename($_SERVER['PHP_SELF'])=='admin_cssedit.php' ) {
echo "
	<link rel='stylesheet' type='text/css' href='".e_PLUGIN_ABS."vanilla_plugin/style.css' />
	".$jscript."
	<script type='text/javascript' src='".e_PLUGIN."vanilla_plugin/ace/ace.js'></script>
	<script type='text/javascript' src='".e_PLUGIN."vanilla_plugin/ace/mode-css.js'></script>
	<script type='text/javascript' src='".e_PLUGIN."vanilla_plugin/custom-css.js'></script>
	";
} 