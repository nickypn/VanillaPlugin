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


$eplug_admin = true;

require_once('../../class2.php');

if ( ! getperms('P')) { header('location:'.e_BASE.'index.php'); exit(); }

require_once('vanilla_class.php');

require_once(e_ADMIN.'auth.php');

include_lan(e_PLUGIN.'vanilla_plugin/languages/'.e_LANGUAGE.'.php');

$pageid = 'admin_check_update';

$vp_latest_version = General::getCurrentPluginVersion();
$vt_latest_version = General::getCurrentThemeVersion();

require_once('vanilla_plugin_ver.php');

require_once(e_THEME.'vanilla_theme/vanilla_theme_ver.php');

$vp_current_version = PLUGIN_VERSION;

$vt_current_version = THEME_VERSION;

$text .= "<h4>Vanilla Plugin</h4><strong>".VANILLA_CHECK_01.":</strong> ".$vp_current_version . "<br /><strong>".VANILLA_CHECK_02 .":</strong> ". $vp_latest_version;

if ($vp_current_version == "" or $vp_latest_version == "") {
  $text .= "<div class='error'>".VANILLA_CHECK_03."</div>";
} else {
  if ($vp_current_version < $vp_latest_version) {
      $text .= "<div class='alert'>".VANILLA_CHECK_04."</div>";
      $text .= VANILLA_CHECK_05." <a href='http://xenthemes.com'>Xen Themes</a></div>";
  } elseif ( $vp_current_version > $vp_latest_version ) {
      $text .= "<div class='error'>".VANILLA_CHECK_06."</div>";
  } elseif ( $vp_current_version == $vp_latest_version ) {
      $text .= "<div class='tip'>".VANILLA_CHECK_07."</div>";
  }
}

$text .= "<h4>Vanilla Theme</h4><strong>".VANILLA_CHECK_09.":</strong> ".$vt_current_version . "<br /><strong>".VANILLA_CHECK_10 .":</strong> ". $vt_latest_version;

if ($vt_current_version == "" or $vt_latest_version == "") {
  $text .= "<div class='error'>".VANILLA_CHECK_03."</div>";
} else {
  if ($vt_current_version < $vt_latest_version) {
      $text .= "<div class='alert'>".VANILLA_CHECK_11."</div>";
      $text .= VANILLA_CHECK_05." <a href='http://xenthemes.com'>Xen Themes</a></div>";
  } elseif ( $vt_current_version > $vt_latest_version ) {
      $text .= "<div class='error'>".VANILLA_CHECK_06."</div>";
  } elseif ( $vt_current_version == $vt_latest_version ) {
      $text .= "<div class='tip'>".VANILLA_CHECK_12."</div>";
  }
}

// Render the value of $text in a table.
$ns->tablerender(VANILLA_CHECK_00, $text);
require_once(e_ADMIN.'footer.php');
?>