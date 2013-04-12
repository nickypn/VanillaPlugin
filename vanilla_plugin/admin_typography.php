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

require_once( "../../class2.php" );
if ( !defined( 'e107_INIT' ) ) {
    exit;
}

if ( !getperms( "P" ) ) {
    header( "location:" . e_BASE . "index.php" );
    exit;
}
include_lan(e_PLUGIN.'vanilla_plugin/languages/".e_LANGUAGE.".php');
require_once( e_ADMIN . "auth.php" );

if ( isset( $_POST['savesettings'] ) ) {

    $pref['vtp_googleFont'] =  $tp->toDB($_POST['vtp_googleFont']);
    $pref['vtp_logoFont'] =  $tp->toDB($_POST['vtp_logoFont']);
    $pref['vtp_bodyFont'] =  $tp->toDB($_POST['vtp_bodyFont']);
    $pref['vtp_headerFont'] =  $tp->toDB($_POST['vtp_headerFont']);
    
    $pref['vtp_linkColor'] =  $tp->toDB($_POST['vtp_linkColor']);
    $pref['vtp_flinkColor'] =  $tp->toDB($_POST['vtp_flinkColor']);
    
    $pref['vtp_titleSize'] =  $tp->toDB($_POST['vtp_titleSize']);
    $pref['vtp_titleColor'] =  $tp->toDB($_POST['vtp_titleColor']);
    $pref['vtp_titleShadow'] =  $tp->toDB($_POST['vtp_titleShadow']);
    $pref['vtp_titleShadow_left'] =  $tp->toDB($_POST['vtp_titleShadow_left']);
    $pref['vtp_titleShadow_bottom'] =  $tp->toDB($_POST['vtp_titleShadow_bottom']);
    $pref['vtp_titleShadow_blur'] =  $tp->toDB($_POST['vtp_titleShadow_blur']);
    $pref['vtp_navColor'] =  $tp->toDB($_POST['vtp_navColor']);
    $pref['vtp_navShadow'] =  $tp->toDB($_POST['vtp_navShadow']);
    $pref['vtp_navShadow_left'] =  $tp->toDB($_POST['vtp_navShadow_left']);
    $pref['vtp_navShadow_bottom'] =  $tp->toDB($_POST['vtp_navShadow_bottom']);
    $pref['vtp_navShadow_blur'] =  $tp->toDB($_POST['vtp_navShadow_blur']);
    $pref['vtp_navBg'] =  $tp->toDB($_POST['vtp_navBg']);
    $pref['vtp_navBghover'] =  $tp->toDB($_POST['vtp_navBghover']);
    
    $pref['vtp_textColor'] =  $tp->toDB($_POST['vtp_textColor']);
    $pref['vtp_textShadow'] =  $tp->toDB($_POST['vtp_textShadow']);
    $pref['vtp_textShadow_left'] =  $tp->toDB($_POST['vtp_textShadow_left']);
    $pref['vtp_textShadow_bottom'] =  $tp->toDB($_POST['vtp_textShadow_bottom']);
    $pref['vtp_textShadow_blur'] =  $tp->toDB($_POST['vtp_textShadow_blur']);
    $pref['vtp_sidebarColor'] =  $tp->toDB($_POST['vtp_sidebarColor']);
    $pref['vtp_sidebarShadow'] =  $tp->toDB($_POST['vtp_sidebarShadow']);
    $pref['vtp_sidebarShadow_left'] =  $tp->toDB($_POST['vtp_sidebarShadow_left']);
    $pref['vtp_sidebarShadow_bottom'] =  $tp->toDB($_POST['vtp_sidebarShadow_bottom']);
    $pref['vtp_sidebarShadow_blur'] =  $tp->toDB($_POST['vtp_sidebarShadow_blur']);
    $pref['vtp_footerColor'] =  $tp->toDB($_POST['vtp_footerColor']);
    $pref['vtp_footerShadow'] =  $tp->toDB($_POST['vtp_footerShadow']);
    $pref['vtp_footerShadow_left'] =  $tp->toDB($_POST['vtp_footerShadow_left']);
    $pref['vtp_footerShadow_bottom'] =  $tp->toDB($_POST['vtp_footerShadow_bottom']);
    $pref['vtp_footerShadow_blur'] =  $tp->toDB($_POST['vtp_footerShadow_blur']);
    
    $pref['vtp_pageTitleColor'] =  $tp->toDB($_POST['vtp_pageTitleColor']);
    $pref['vtp_pageTitleShadow'] =  $tp->toDB($_POST['vtp_pageTitleShadow']);
    $pref['vtp_pageTitleShadow_left'] =  $tp->toDB($_POST['vtp_pageTitleShadow_left']);
    $pref['vtp_pageTitleShadow_bottom'] =  $tp->toDB($_POST['vtp_pageTitleShadow_bottom']);
    $pref['vtp_pageTitleShadow_blur'] =  $tp->toDB($_POST['vtp_pageTitleShadow_blur']);
    $pref['vtp_menuTitleColor'] =  $tp->toDB($_POST['vtp_menuTitleColor']);
    $pref['vtp_menuTitleShadow'] =  $tp->toDB($_POST['vtp_menuTitleShadow']);
    $pref['vtp_menuTitleShadow_left'] =  $tp->toDB($_POST['vtp_menuTitleShadow_left']);
    $pref['vtp_menuTitleShadow_bottom'] =  $tp->toDB($_POST['vtp_menuTitleShadow_bottom']);
    $pref['vtp_menuTitleShadow_blur'] =  $tp->toDB($_POST['vtp_menuTitleShadow_blur']);
    $pref['vtp_footerTitleColor'] =  $tp->toDB($_POST['vtp_footerTitleColor']);
    $pref['vtp_footerTitleShadow'] =  $tp->toDB($_POST['vtp_footerTitleShadow']);
    $pref['vtp_footerTitleShadow_left'] =  $tp->toDB($_POST['vtp_footerTitleShadow_left']);
    $pref['vtp_footerTitleShadow_bottom'] =  $tp->toDB($_POST['vtp_footerTitleShadow_bottom']);
    $pref['vtp_footerTitleShadow_blur'] =  $tp->toDB($_POST['vtp_footerTitleShadow_blur']);
    
    $pref['vtp_widont'] = (int)$_POST['vtp_widont'];

    save_prefs();
    
    $vtp_message =  '<div class="alert"><p>'.VTP_PLUGIN_2.'</p></div>';
}
		
$vtp_text = "
<form name='settings_form' id='dataform' method='post' action='" . e_SELF . "?update'>
	
	<div class='vtp-info'>
		" . $vtp_message . "
		<h2 class='vtp-admin-title'>".VTP_PLUGIN_50."</h2>
	</div>
";
			
$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>		
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_51."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_52."</td>
				<td style='width:70%'>	
					<textarea  class='tbox' name='vtp_googleFont' style='width: 80%'  rows='3' onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\">".$pref['vtp_googleFont']."</textarea>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_53."</td>
				<td style='width:70%'>
					<input type='text' class='tbox' style='width:70%'; name='vtp_logoFont' id='vtp_logoFont' value='".$tp->toFORM($pref['vtp_logoFont'])."' />
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_54."</td>
				<td style='width:70%'>
					<input type='text' class='tbox' style='width:70%'; name='vtp_bodyFont' id='vtp_bodyFont' value='".$tp->toFORM($pref['vtp_bodyFont'])."' />
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_55."</td>
				<td style='width:70%'>
					<input type='text' class='tbox' style='width:70%'; name='vtp_headerFont' id='vtp_headerFont' value='".$tp->toFORM($pref['vtp_headerFont'])."' />
				</td>
			</tr>
			<tr>
				<td class='table-end' colspan='2'>
					<input class='button' name='savesettings' type='submit' value='".VTP_PLUGIN_3."' />
				</td>
			</tr>
		</tbody>
	</table>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>
			<tr>
				<th colspan='2' style='text-align:left'><h3>".VTP_PLUGIN_56."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_57."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_linkColor']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_linkColor' id='vtp_linkColor' value='".$tp->toFORM($pref['vtp_linkColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_linkColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_108."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_flinkColor']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_flinkColor' id='vtp_flinkColor' value='".$tp->toFORM($pref['vtp_flinkColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_flinkColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td class='table-end' colspan='2'>
					<input class='button' name='savesettings' type='submit' value='".VTP_PLUGIN_3."' />
				</td>
			</tr>
		</tbody>
	</table>
";

$vtp_text .= "
	<div class='tip'>
		<p><strong>".VTP_TIPS_1."</strong> ".VTP_TIPS_7."</p>
	</div>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_58."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_112."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_titleSize' id='vtp_titleSize' style='width:135px;' >
						<option value='1em' ".
						( $pref['vtp_titleSize'] == '1em'?"selected='selected'":"" )
						.">1em (16px)</option>
						<option value='1.125em' ".
						( $pref['vtp_titleSize'] == '1.125em'?"selected='selected'":"" )
						.">1.125em (18px)</option>
						<option value='1.25em' ".
						( $pref['vtp_titleSize'] == '1.25em'?"selected='selected'":"" )
						.">1.25em (20px)</option>
						<option value='1.375em' ".
						( $pref['vtp_titleSize'] == '1.375em'?"selected='selected'":"" )
						.">1.375em (22px)</option>
						<option value='1.5em' ".
						( $pref['vtp_titleSize'] == '1.5em'?"selected='selected'":"" )
						.">1.5em (24px)</option>
						<option value='1.625em' ".
						( $pref['vtp_titleSize'] == '1.625em'?"selected='selected'":"" )
						.">1.625em (26px)</option>
						<option value='1.75em' ".
						( $pref['vtp_titleSize'] == '1.75em'?"selected='selected'":"" )
						.">1.75em (28px)</option>
						<option value='1.875em' ".
						( $pref['vtp_titleSize'] == '1.875em'?"selected='selected'":"" )
						.">1.875em (30px)</option>
						<option value='2em' ".
						( $pref['vtp_titleSize'] == '2em'?"selected='selected'":"" )
						.">2em (32px)</option>
					</select>
					
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_59."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_titleColor']).";'></div>
					<input type='text' class='tbox' style='width:150px'; name='vtp_titleColor' id='vtp_titleColor' value='".$tp->toFORM($pref['vtp_titleColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_titleColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_60."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_titleShadow']).";'></div>
					<select class='tbox' name='vtp_titleShadow_left' id='vtp_titleShadow_left' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_titleShadow_left'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_titleShadow_left'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_titleShadow_left'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_titleShadow_left'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_titleShadow_left'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_titleShadow_left'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_titleShadow_left'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_titleShadow_left'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_titleShadow_left'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_titleShadow_left'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_titleShadow_left'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_titleShadow_bottom' id='vtp_titleShadow_bottom' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_titleShadow_bottom'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_titleShadow_bottom'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_titleShadow_bottom'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_titleShadow_bottom'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_titleShadow_bottom'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_titleShadow_bottom'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_titleShadow_bottom'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_titleShadow_bottom'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_titleShadow_bottom'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_titleShadow_bottom'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_titleShadow_bottom'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_titleShadow_blur' id='vtp_titleShadow_blur' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_titleShadow_blur'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_titleShadow_blur'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_titleShadow_blur'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_titleShadow_blur'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_titleShadow_blur'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_titleShadow_blur'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_titleShadow_blur'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_titleShadow_blur'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_titleShadow_blur'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_titleShadow_blur'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_titleShadow_blur'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<input type='text' class='tbox' style='width:150px'; name='vtp_titleShadow' id='vtp_titleShadow' value='".$tp->toFORM($pref['vtp_titleShadow'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_titleShadow'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_61."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_navColor']).";'></div>
					<input type='text' class='tbox' style='width:150px'; name='vtp_navColor' id='vtp_navColor' value='".$tp->toFORM($pref['vtp_navColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_navColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_62."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_navShadow']).";'></div>
					<select class='tbox' name='vtp_navShadow_left' id='vtp_navShadow_left' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_navShadow_left'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_navShadow_left'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_navShadow_left'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_navShadow_left'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_navShadow_left'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_navShadow_left'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_navShadow_left'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_navShadow_left'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_navShadow_left'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_navShadow_left'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_navShadow_left'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_navShadow_bottom' id='vtp_navShadow_bottom' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_navShadow_bottom'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_navShadow_bottom'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_navShadow_bottom'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_navShadow_bottom'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_navShadow_bottom'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_navShadow_bottom'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_navShadow_bottom'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_navShadow_bottom'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_navShadow_bottom'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_navShadow_bottom'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_navShadow_bottom'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_navShadow_blur' id='vtp_navShadow_blur' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_navShadow_blur'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_navShadow_blur'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_navShadow_blur'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_navShadow_blur'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_navShadow_blur'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_navShadow_blur'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_navShadow_blur'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_navShadow_blur'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_navShadow_blur'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_navShadow_blur'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_navShadow_blur'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<input type='text' class='tbox' style='width:150px'; name='vtp_navShadow' id='vtp_navShadow' value='".$tp->toFORM($pref['vtp_navShadow'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_navShadow'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_113."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_navBg']).";'></div>
					<input type='text' class='tbox' style='width:150px'; name='vtp_navBg' id='vtp_navBg' value='".$tp->toFORM($pref['vtp_navBg'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_navBg'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_114."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_navBghover']).";'></div>
					<input type='text' class='tbox' style='width:150px'; name='vtp_navBghover' id='vtp_navBghover' value='".$tp->toFORM($pref['vtp_navBghover'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_navBghover'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td class='table-end' colspan='2'>
					<input class='button' name='savesettings' type='submit' value='".VTP_PLUGIN_3."' />
				</td>
			</tr>
		</tbody>
	</table>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_63."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_64."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_textColor']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_textColor' id='vtp_textColor' value='".$tp->toFORM($pref['vtp_textColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_textColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_65."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_textShadow']).";'></div>
					<select class='tbox' name='vtp_textShadow_left' id='vtp_textShadow_left' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_textShadow_left'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_textShadow_left'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_textShadow_left'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_textShadow_left'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_textShadow_left'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_textShadow_left'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_textShadow_left'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_textShadow_left'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_textShadow_left'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_textShadow_left'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_textShadow_left'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_textShadow_bottom' id='vtp_textShadow_bottom' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_textShadow_bottom'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_textShadow_bottom'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_textShadow_bottom'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_textShadow_bottom'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_textShadow_bottom'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_textShadow_bottom'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_textShadow_bottom'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_textShadow_bottom'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_textShadow_bottom'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_textShadow_bottom'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_textShadow_bottom'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_textShadow_blur' id='vtp_textShadow_blur' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_textShadow_blur'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_textShadow_blur'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_textShadow_blur'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_textShadow_blur'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_textShadow_blur'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_textShadow_blur'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_textShadow_blur'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_textShadow_blur'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_textShadow_blur'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_textShadow_blur'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_textShadow_blur'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<input type='text' class='tbox' style='width:150px' name='vtp_textShadow' id='vtp_textShadow' value='".$tp->toFORM($pref['vtp_textShadow'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_textShadow'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_94."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_sidebarColor']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_sidebarColor' id='vtp_sidebarColor' value='".$tp->toFORM($pref['vtp_sidebarColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_sidebarColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_95."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_sidebarShadow']).";'></div>
					<select class='tbox' name='vtp_sidebarShadow_left' id='vtp_sidebarShadow_left' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_sidebarShadow_left'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_sidebarShadow_left'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_sidebarShadow_left'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_sidebarShadow_left'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_sidebarShadow_left'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_sidebarShadow_left'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_sidebarShadow_left'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_sidebarShadow_left'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_sidebarShadow_left'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_sidebarShadow_left'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_sidebarShadow_left'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_sidebarShadow_bottom' id='vtp_sidebarShadow_bottom' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_sidebarShadow_bottom'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_sidebarShadow_bottom'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_sidebarShadow_bottom'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_sidebarShadow_bottom'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_sidebarShadow_bottom'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_sidebarShadow_bottom'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_sidebarShadow_bottom'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_sidebarShadow_bottom'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_sidebarShadow_bottom'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_sidebarShadow_bottom'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_sidebarShadow_bottom'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_sidebarShadow_blur' id='vtp_sidebarShadow_blur' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_sidebarShadow_blur'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_sidebarShadow_blur'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_sidebarShadow_blur'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_sidebarShadow_blur'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_sidebarShadow_blur'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_sidebarShadow_blur'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_sidebarShadow_blur'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_sidebarShadow_blur'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_sidebarShadow_blur'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_sidebarShadow_blur'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_sidebarShadow_blur'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<input type='text' class='tbox' style='width:150px' name='vtp_sidebarShadow' id='vtp_sidebarShadow' value='".$tp->toFORM($pref['vtp_sidebarShadow'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_sidebarShadow'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_66."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_footerColor']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_footerColor' id='vtp_footerColor' value='".$tp->toFORM($pref['vtp_footerColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_footerColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_67."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_footerShadow']).";'></div>
					<select class='tbox' name='vtp_footerShadow_left' id='vtp_footerShadow_left' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_footerShadow_left'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_footerShadow_left'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_footerShadow_left'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_footerShadow_left'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_footerShadow_left'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_footerShadow_left'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_footerShadow_left'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_footerShadow_left'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_footerShadow_left'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_footerShadow_left'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_footerShadow_left'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_footerShadow_bottom' id='vtp_footerShadow_bottom' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_footerShadow_bottom'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_footerShadow_bottom'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_footerShadow_bottom'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_footerShadow_bottom'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_footerShadow_bottom'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_footerShadow_bottom'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_footerShadow_bottom'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_footerShadow_bottom'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_footerShadow_bottom'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_footerShadow_bottom'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_footerShadow_bottom'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_footerShadow_blur' id='vtp_footerShadow_blur' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_footerShadow_blur'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_footerShadow_blur'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_footerShadow_blur'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_footerShadow_blur'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_footerShadow_blur'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_footerShadow_blur'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_footerShadow_blur'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_footerShadow_blur'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_footerShadow_blur'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_footerShadow_blur'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_footerShadow_blur'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<input type='text' class='tbox' style='width:150px' name='vtp_footerShadow' id='vtp_footerShadow' value='".$tp->toFORM($pref['vtp_footerShadow'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_footerShadow'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td class='table-end' colspan='2'>
					<input class='button' name='savesettings' type='submit' value='".VTP_PLUGIN_3."' />
				</td>
			</tr>
		</tbody>
	</table>
";
$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_68."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_69."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_pageTitleColor']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_pageTitleColor' id='vtp_pageTitleColor' value='".$tp->toFORM($pref['vtp_pageTitleColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_pageTitleColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_70."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_pageTitleShadow']).";'></div>
					<select class='tbox' name='vtp_pageTitleShadow_left' id='vtp_pageTitleShadow_left' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_pageTitleShadow_left'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_pageTitleShadow_left'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_pageTitleShadow_left'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_pageTitleShadow_left'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_pageTitleShadow_left'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_pageTitleShadow_left'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_pageTitleShadow_left'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_pageTitleShadow_left'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_pageTitleShadow_left'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_pageTitleShadow_left'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_pageTitleShadow_left'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_pageTitleShadow_bottom' id='vtp_pageTitleShadow_bottom' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_pageTitleShadow_bottom'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_pageTitleShadow_blur' id='vtp_pageTitleShadow_blur' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '0px'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_pageTitleShadow_blur'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<input type='text' class='tbox' style='width:150px' name='vtp_pageTitleShadow' id='vtp_pageTitleShadow' value='".$tp->toFORM($pref['vtp_pageTitleShadow'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_pageTitleShadow'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_71."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_menuTitleColor']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_menuTitleColor' id='vtp_menuTitleColor' value='".$tp->toFORM($pref['vtp_menuTitleColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_menuTitleColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_72."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_menuTitleShadow']).";'></div>
					<select class='tbox' name='vtp_menuTitleShadow_left' id='vtp_menuTitleShadow_left' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_menuTitleShadow_left'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_menuTitleShadow_left'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_menuTitleShadow_left'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_menuTitleShadow_left'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_menuTitleShadow_left'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_menuTitleShadow_left'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_menuTitleShadow_left'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_menuTitleShadow_left'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_menuTitleShadow_left'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_menuTitleShadow_left'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_menuTitleShadow_left'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_menuTitleShadow_bottom' id='vtp_menuTitleShadow_bottom' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_menuTitleShadow_bottom'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_menuTitleShadow_blur' id='vtp_menuTitleShadow_blur' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_menuTitleShadow_blur'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_menuTitleShadow_blur'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_menuTitleShadow_blur'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_menuTitleShadow_blur'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_menuTitleShadow_blur'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_menuTitleShadow_blur'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_menuTitleShadow_blur'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_menuTitleShadow_blur'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_menuTitleShadow_blur'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_menuTitleShadow_blur'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_menuTitleShadow_blur'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<input type='text' class='tbox' style='width:150px' name='vtp_menuTitleShadow' id='vtp_menuTitleShadow' value='".$tp->toFORM($pref['vtp_menuTitleShadow'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_menuTitleShadow'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_73."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_footerTitleColor']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_footerTitleColor' id='vtp_footerTitleColor' value='".$tp->toFORM($pref['vtp_footerTitleColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_footerTitleColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_74."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_footerTitleShadow']).";'></div>
					<select class='tbox' name='vtp_footerTitleShadow_left' id='vtp_footerTitleShadow_left' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_footerTitleShadow_left'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_footerTitleShadow_left'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_footerTitleShadow_left'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_footerTitleShadow_left'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_footerTitleShadow_left'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_footerTitleShadow_left'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_footerTitleShadow_left'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_footerTitleShadow_left'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_footerTitleShadow_left'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_footerTitleShadow_left'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_footerTitleShadow_left'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_footerTitleShadow_bottom' id='vtp_footerTitleShadow_bottom' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_footerTitleShadow_bottom'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_footerTitleShadow_blur' id='vtp_footerTitleShadow_blur' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_footerTitleShadow_blur'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_footerTitleShadow_blur'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_footerTitleShadow_blur'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_footerTitleShadow_blur'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_footerTitleShadow_blur'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_footerTitleShadow_blur'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_footerTitleShadow_blur'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_footerTitleShadow_blur'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_footerTitleShadow_blur'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_footerTitleShadow_blur'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_footerTitleShadow_blur'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<input type='text' class='tbox' style='width:150px' name='vtp_footerTitleShadow' id='vtp_footerTitleShadow' value='".$tp->toFORM($pref['vtp_footerTitleShadow'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_footerTitleShadow'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td class='table-end' colspan='2'>
					<input class='button' name='savesettings' type='submit' value='".VTP_PLUGIN_3."' />
				</td>
			</tr>
		</tbody>
	</table>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_109."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_110."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_widont' id='vtp_widont' value='1' " . ( $pref['vtp_widont'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td class='table-end' colspan='2'>
					<input class='button' name='savesettings' type='submit' value='".VTP_PLUGIN_3."' />
				</td>
			</tr>
		</tbody>
	</table>
";

$vtp_text .= "
</form>
<p><center>Vanilla Theme Plugin v".$pref['plug_installed']['vanilla_plugin']." by <a href='http://www.xenthemes.com' target='_blank'>Xen Themes</a></center></p>";


$ns->tablerender( VTP_PLUGIN_1, $vtp_text );
require_once( e_ADMIN . "footer.php" );