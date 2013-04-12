<?php
/*
 * Vanilla Plugin 1.1
 *
 * Copyright (C) 2007-2011 Xen Themes (xenthemes.com)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl-3.0.txt)
 *
 * $Source: 
 * $Revision: 1.1 $
 * $Date: 08/04/2013 $
 * $Author: leonlloyd $
*/

include_lan(e_PLUGIN."vanilla_plugin/languages/".e_LANGUAGE.".php");
$eplug_name = 'Vanilla Theme Plugin';
$eplug_version = '1.1';
$eplug_author = 'Leon Lloyd (roofdog)';
$eplug_url = 'http://www.xenthemes.com/';
$eplug_email = 'support@xenthemes.com';
$eplug_description = 'Plugin manager for Vanilla Theme<br />Copyright &copy; 2013 <a href="http://www.xenthemes.com">Xen Themes</a><br />Dual licensed under the MIT or GPL Version 2 licenses';
$eplug_compatible = 'e107v1.0+';
$eplug_readme = '';
$eplug_folder = 'vanilla_plugin';
$eplug_menu_name = true;
$eplug_conffile = 'admin_config.php';
$eplug_icon = $eplug_folder . '/images/vanilla-logo-32.png';
$eplug_icon_small = $eplug_folder . '/images/vanilla-logo-16.png';
$eplug_caption = 'Vanilla Theme Plugin';
$eplug_prefs = array(

'vtp_site_title'=>0,
'vtp_brand_img'=>'',

'vtp_sidebarFloat'=>0,
'vtp_layout2'=>'',
'vtp_fmenuwidth'=>3,
'vtp_borderRadius'=>1,

'vtp_btnbgColor'=>'#898989',
'vtp_btntextColor'=>'#FFF',
'vtp_btntextShadow_left'=>'0',
'vtp_btntextShadow_bottom'=>'-1px',
'vtp_btntextShadow_blur'=>'0',
'vtp_btntextShadow'=>'#000',

'vtp_analytics'=>0,
'vtp_analytic_code'=>'',

'vtp_disclaim'=>1,

'vtp_bodyBg'=>'#FFF',
'vtp_bodyBg_img'=>'chruch.png',
'vtp_bodyBg_repeat'=>'repeat',
'vtp_bodyBg_attach'=>'scroll',
'vtp_bodyBg_position_x'=>'left',
'vtp_bodyBg_position_y'=>'top',
'vtp_contentBg'=>'#EEE',
'vtp_contentBg_img'=>'',
'vtp_contentBg_repeat'=>'',
'vtp_contentBg_attach'=>'',
'vtp_contentBg_position_x'=>'',
'vtp_contentBg_position_y'=>'',
'vtp_contentBoxShadow'=>1,
'vtp_footerBg'=>'rgba(0,0,0,.3)',
'vtp_footerBg_img'=>'',
'vtp_footerBg_repeat'=>'',
'vtp_footerBg_attach'=>'',
'vtp_footerBg_position_x'=>'',
'vtp_footerBg_position_y'=>'',

'vtp_topbarBg'=>'#262626',
'vtp_topbarBoxShadow'=>1,
'vtp_widgetBg'=>'#FFF',
'vtp_mainmenuBoxShadow'=>1,
'vtp_asidewidgetBg'=>'#FFF',
'vtp_sidemenuBoxShadow'=>1,
'vtp_footerwidgetBg'=>'#262626',
'vtp_footermenuBoxShadow'=>0,
'vtp_itemBg'=>'#F9F9F9',
'vtp_itemBoxShadow'=>1,

'vtp_googleFont'=>"<link href='http://fonts.googleapis.com/css?family=Lato:900,700,400' rel='stylesheet' type='text/css'>",
'vtp_logoFont'=>'"Lato", "helvetica neue", helvetica, arial, sans-serif',
'vtp_bodyFont'=>'"Lato", "helvetica neue", helvetica, arial, sans-serif',
'vtp_headerFont'=>'"Lato", "helvetica neue", helvetica, arial, sans-serif',

'vtp_linkColor'=>'#d70028',
'vtp_flinkColor'=>'#d70028',

'vtp_titleColor'=>'#FFF',
'vtp_titleShadow'=>'#000',
'vtp_titleShadow_left'=>'0',
'vtp_titleShadow_bottom'=>'1px',
'vtp_titleShadow_blur'=>'2px',
'vtp_navColor'=>'#FFF',
'vtp_navShadow'=>'#000',
'vtp_navShadow_left'=>'0',
'vtp_navShadow_bottom'=>'1px',
'vtp_navShadow_blur'=>'2px',

'vtp_textColor'=>'#333',
'vtp_textShadow'=>'#FFF',
'vtp_textShadow_left'=>'0',
'vtp_textShadow_bottom'=>'0',
'vtp_textShadow_blur'=>'0',
'vtp_sidebarColor'=>'#333',
'vtp_sidebarShadow'=>'',
'vtp_sidebarShadow_left'=>'0',
'vtp_sidebarShadow_bottom'=>'0',
'vtp_sidebarShadow_blur'=>'0',
'vtp_footerColor'=>'#FFF',
'vtp_footerShadow'=>'#000',
'vtp_footerShadow_left'=>'0',
'vtp_footerShadow_bottom'=>'1px',
'vtp_footerShadow_blur'=>'1px',
'vtp_pageTitleColor'=>'#555',
'vtp_pageTitleShadow'=>'#FFF',
'vtp_pageTitleShadow_left'=>'0',
'vtp_pageTitleShadow_bottom'=>'1px',
'vtp_pageTitleShadow_blur'=>'2px',
'vtp_menuTitleColor'=>'#262626',
'vtp_menuTitleShadow'=>'#FFF',
'vtp_menuTitleShadow_left'=>'0',
'vtp_menuTitleShadow_bottom'=>'1px',
'vtp_menuTitleShadow_blur'=>'2px',
'vtp_footerTitleColor'=>'#898989',
'vtp_footerTitleShadow'=>'#000',
'vtp_footerTitleShadow_left'=>'0',
'vtp_footerTitleShadow_bottom'=>'1px',
'vtp_footerTitleShadow_blur'=>'2px',
'vtp_widont'=>0,

'vtp_icons_rss'=>1,
'vtp_icons_linkedin'=>1,
'vtp_icons_twitter'=>1,
'vtp_icons_facebook'=>1,
'vtp_icons_google'=>1,
'vtp_icons_youtube'=>0,
'vtp_icons_rssurl'=>'',
'vtp_icons_linkedinurl'=>'',
'vtp_icons_twitterurl'=>'http://twitter.com/XenThemes',
'vtp_icons_facebookurl'=>'http://www.facebook.com/xenproject',
'vtp_icons_googleurl'=>'',
'vtp_icons_youtubeurl'=>'',
'vtp_nsocial'=>1,
'vtp_retweet'=>1,
'vtp_fblike'=>1,
'vtp_inshare'=>1,
'vtp_googleplus'=>1,
'vtp_social_text'=>'If you enjoyed this post, please consider subscribing to our RSS feed, thanks!'
);

$eplug_link = false;

$eplug_done = VTP_PLUGIN_PL_2;

$eplug_table_names = "";
$eplug_tables = '';
$upgrade_alter_tables = '';

$upgrade_add_prefs = array (
	'vtp_gradient'=>1,
	'vtp_titleSize'=>'1.5em',
	'vtp_navBg'=>'#111',
	'vtp_navBghover'=>'#000',
	'vtp_tweet'=>1,
	'vtp_plusone'=>1,
	'vtp_fbbtn'=>1,
	'vtp_fbid'=>'',
	'vtp_userBar'=>0,
	'vtp_bannerToggle'=>1,
	'vtp_twitter_username'=>'XenThemes',
	'custom_css'=>''
);

$upgrade_remove_prefs = '';
$eplug_upgrade_done = VTP_PLUGIN_PL_3;

if (!function_exists('vanilla_plugin_uninstall'))
{
    function vanilla_plugin_uninstall()
    {
        global $sql;
        $sql->db_Delete('core', ' e107_name="vanilla_plugin" ');
    }
}

?>