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

require_once(e_PLUGIN.'vanilla_plugin/vanilla_class.php');

$vp_latest_version = General::getCurrentPluginVersion();
$vt_latest_version = General::getCurrentThemeVersion();

require_once(e_PLUGIN.'vanilla_plugin/vanilla_plugin_ver.php');

require_once(e_THEME.'vanilla_theme/vanilla_theme_ver.php');

$vp_current_version = PLUGIN_VERSION;

$vt_current_version = THEME_VERSION;

if ($vp_current_version == "" or $vp_latest_version == "") {
  $text .= "<a href='".e_PLUGIN."vanilla_plugin/admin_check_update.php'><div style='background-color: #f2dede;border:1px solid #eed3d7;color: #b94a48;font-weight:700;margin:10px 0;width:100%;padding:5px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;'>".VANILLA_CHECK_03."</div></a>";
} else {
  if ($vp_current_version < $vp_latest_version) {
      $text .= "<a href='".e_PLUGIN."vanilla_plugin/admin_check_update.php'><div style='background-color:#dff0d8;border:1px solid #d6e9c6;color:#468847;font-weight:700;margin:10px 0;width:100%;padding:5px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;'>".VANILLA_CHECK_04."</div></a>";
  } elseif ( $vp_current_version > $vp_latest_version ) {
      $text .= "<a href='".e_PLUGIN."vanilla_plugin/admin_check_update.php'><div style='background-color: #f2dede;border:1px solid #eed3d7;color: #b94a48;font-weight:700;margin:10px 0;width:100%;padding:5px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;'>".VANILLA_CHECK_06."</div></a>";
  } elseif ( $vp_current_version == $vp_latest_version ) {
      $text .= "";
  }
}

if ($vt_current_version == "" or $vt_latest_version == "") {
  $text .= "<a href='".e_PLUGIN."vanilla_plugin/admin_check_update.php'><div style='background-color: #f2dede;border:1px solid #eed3d7;color: #b94a48;font-weight:700;margin:10px 0;width:100%;padding:5px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;'>".VANILLA_CHECK_03."</div></a>";
} else {
  if ($vt_current_version < $vt_latest_version) {
      $text .= "<a href='".e_PLUGIN."vanilla_plugin/admin_check_update.php'><div style='background-color:#dff0d8;border:1px solid #d6e9c6;color:#468847;font-weight:700;margin:10px 0;width:100%;padding:5px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;'>".VANILLA_CHECK_11."</div></a>";
  } elseif ( $vt_current_version > $vt_latest_version ) {
      $text .= "<a href='".e_PLUGIN."vanilla_plugin/admin_check_update.php'><div style='background-color: #f2dede;border:1px solid #eed3d7;color: #b94a48;font-weight:700;margin:10px 0;width:100%;padding:5px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;'>".VANILLA_CHECK_13."</div></a>";
  } elseif ( $vt_current_version == $vt_latest_version ) {
      $text .= "";
  }
}

$text .= "";