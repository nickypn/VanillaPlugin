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

if (!defined('e107_INIT')) {
    exit;
}

include_lan(e_PLUGIN."vanilla_plugin/languages/".e_LANGUAGE.".php");

global $pageid;

$action = basename($_SERVER['PHP_SELF'], '.php');

$var['admin_config']['text'] = VTP_PLUGIN_92;
$var['admin_config']['link'] = 'admin_config.php';

$var['admin_backgrounds']['text'] = VTP_PLUGIN_93;
$var['admin_backgrounds']['link'] = 'admin_backgrounds.php';

$var['admin_typography']['text'] = VTP_PLUGIN_97;
$var['admin_typography']['link'] = 'admin_typography.php';

$var['admin_social']['text'] = VTP_PLUGIN_98;
$var['admin_social']['link'] = 'admin_social.php';

$var['admin_cssedit']['text'] = VTP_PLUGIN_118;
$var['admin_cssedit']['link'] = 'admin_cssedit.php';

$var['admin_help']['text'] = VTP_PLUGIN_99;
$var['admin_help']['link'] = 'admin_help.php';

$var['admin_check_update']['text'] = VANILLA_CHECK_08;
$var['admin_check_update']['link'] = 'admin_check_update.php';

show_admin_menu(VTP_PLUGIN_100, $pageid, $var);