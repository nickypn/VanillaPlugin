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

	$pref['vtp_site_title'] =  $tp->toDB($_POST['vtp_site_title']);
    $pref['vtp_brand_img'] =  $tp->toDB($_POST['vtp_brand_img']);
    
    $pref['vtp_sidebarFloat'] = $tp->toDB($_POST['vtp_sidebarFloat']);
	$pref['vtp_layout2'] =  $tp->toDB($_POST['vtp_layout2']);
	$pref['vtp_fmenuwidth'] = $tp->toDB($_POST['vtp_fmenuwidth']);
	$pref['vtp_borderRadius'] = (int)($_POST['vtp_borderRadius']);
	$pref['vtp_userBar'] = (int)($_POST['vtp_userBar']);
	$pref['vtp_bannerToggle'] = (int)($_POST['vtp_bannerToggle']);
	
	$pref['vtp_btnbgColor'] =  $tp->toDB($_POST['vtp_btnbgColor']);
	$pref['vtp_btntextColor'] =  $tp->toDB($_POST['vtp_btntextColor']);
	$pref['vtp_btntextShadow_onoff'] = (int)($_POST['vtp_btntextShadow_onoff']);
	$pref['vtp_btntextShadow'] =  $tp->toDB($_POST['vtp_btntextShadow']);
	$pref['vtp_btntextShadow_left'] =  $tp->toDB($_POST['vtp_btntextShadow_left']);
    $pref['vtp_btntextShadow_bottom'] =  $tp->toDB($_POST['vtp_btntextShadow_bottom']);
    $pref['vtp_btntextShadow_blur'] =  $tp->toDB($_POST['vtp_btntextShadow_blur']);
    
    $pref['vtp_analytics'] = (int)$_POST['vtp_analytics'];
    $pref['vtp_analytic_code'] =  $tp->toDB($_POST['vtp_analytic_code']);

    save_prefs();
    
    $vtp_message =  '<div class="alert"><p>'.VTP_PLUGIN_2.'</p></div>';
}

//-----------------------------------------------------------------------------------------------------------+

  $file_handle = opendir(e_THEME."vanilla_theme/images/logos");

  while ($file_name = readdir($file_handle))
  {
    if ($file_name == "." || $file_name == "..") { continue; }

    $iconlist[] = $file_name;
  }

  closedir($file_handle);

  while (list($key, $icon)=each($iconlist))
  					{
    					$icontext .= " <a href='javascript:addtext(\"$icon\")'><img src='".e_THEME."vanilla_theme/images/logos/$icon' style='border:0px;max-width:200px;max-height:80px;' alt='' /></a>";
 					}

//-----------------------------------------------------------------------------------------------------------+
		
$filename = e_THEME."vanilla_theme/vanilla_theme_ver.php";

if(file_exists($filename)) {

	$vt_ok = true;

} else {
		
	$vt_ok = false;
		
}
		
if($vt_ok) {

	$vtp_text = "";

} else {

	$vtp_text = "
		<div class='error' style='margin-top:0;'>
			<h3>".VTP_ERROR_00."</h3>
			<p>".VTP_ERROR_01."</p>
			<p>".VTP_ERROR_03."</p>
		</div>";

}

$vtp_text .= "
<form name='settings_form' id='dataform' method='post' action='" . e_SELF . "?update'>

	<div class='vtp-info'>
		" . $vtp_message . "
		<h2 class='vtp-admin-title'>".VTP_PLUGIN_4."</h2>
	</div>
	<div class='tip'>
		<p><strong>".VTP_TIPS_1."</strong> ".VTP_TIPS_2."</p>
	</div>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_10."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_11."</td>
				<td style='width:70%'>
					<span>".
						($pref['vtp_sidebarFloat'] == 0 ? "<input type='radio' id='leftaligned' name='vtp_sidebarFloat' value='0' checked='checked' />" : "<input type='radio' name='vtp_sidebarFloat' value='0' />")."
						".VTP_PLUGIN_12."
					</span>
					<span>".
						($pref['vtp_sidebarFloat'] == 1 ? "<input type='radio' id='rightaligned' name='vtp_sidebarFloat' value='1' checked='checked' />" : "<input type='radio' name='vtp_sidebarFloat' value='1' />")."
						".VTP_PLUGIN_13."
					</span>				
				</td>
			</tr>		
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_14."</td>
				<td style='width:70%'>
					<textarea rows='3' class='tbox' style='width:80%'; name='vtp_layout2' onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\"/>".$pref['vtp_layout2']."</textarea>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_15."</td>
				<td style='width:70%'>
					<span>".
						($pref['vtp_fmenuwidth'] == 0 ? "<input type='radio' name='vtp_fmenuwidth' value='0' checked='checked' />" : "<input type='radio' name='vtp_fmenuwidth' value='0' />")."
						".VTP_PLUGIN_16."
					</span>
					<span>".
						($pref['vtp_fmenuwidth'] == 1 ? "<input type='radio' name='vtp_fmenuwidth' value='1' checked='checked' />" : "<input type='radio' name='vtp_fmenuwidth' value='1' />")."
						".VTP_PLUGIN_17."
					</span>
					<span>".
						($pref['vtp_fmenuwidth'] == 2 ? "<input type='radio' name='vtp_fmenuwidth' value='2' checked='checked' />" : "<input type='radio' name='vtp_fmenuwidth' value='2' />")."
						".VTP_PLUGIN_18."
					</span>
					<span>".
						($pref['vtp_fmenuwidth'] == 3 ? "<input type='radio' name='vtp_fmenuwidth' value='3' checked='checked' />" : "<input type='radio' name='vtp_fmenuwidth' value='3' />")."
						".VTP_PLUGIN_19."
					</span>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_96."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_borderRadius' id='vtp_borderRadius' value='1' " . ( $pref['vtp_borderRadius'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_122."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_userBar' id='vtp_userBar' value='1' " . ( $pref['vtp_userBar'] == 1?'checked="checked"':'' ) . "/>
					".VTP_PLUGIN_123."
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_124."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_bannerToggle' id='vtp_bannerToggle' value='1' " . ( $pref['vtp_bannerToggle'] == 1?'checked="checked"':'' ) . "/>
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
				<th colspan='2'><h3>".VTP_PLUGIN_5."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_6."</td>
				<td style='width:70%'>
					<span>".
						($pref['vtp_site_title'] == 0 ? "<input type='radio' name='vtp_site_title' value='0' checked='checked' />" : "<input type='radio' name='vtp_site_title' value='0' />")."
						".VTP_PLUGIN_7."
					</span>
					<span>".
						($pref['vtp_site_title'] == 1 ? "<input type='radio' name='vtp_site_title' value='1' checked='checked' />" : "<input type='radio' name='vtp_site_title' value='1' />")."
						".VTP_PLUGIN_8."
					</span>				
				</td>
			</tr>
			<tr>
				<td style='width:30%;'>".VTP_PLUGIN_9."</td>
				<td style='width:70%;'>
					<input style='width:200px' class='tbox' type='text' name='vtp_brand_img' value='".$pref['vtp_brand_img']."' />
					<br /><br />
					<div>".$icontext."
					</div>
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
				<th colspan='2' style='text-align:left'><h3>".VTP_PLUGIN_20."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_21."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_btnbgColor']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_btnbgColor' id='vtp_btnbgColor' value='".$tp->toFORM($pref['vtp_btnbgColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_btnbgColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_22."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_btntextColor']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_btntextColor' id='vtp_btntextColor' value='".$tp->toFORM($pref['vtp_btntextColor'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_btntextColor'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_23."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_btntextShadow_onoff' id='vtp_btntextShadow_onoff' value='1' " . ( $pref['vtp_btntextShadow_onoff'] == 1?'checked="checked"':'' ) . "/>&nbsp;&nbsp;
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_btntextShadow']).";'></div>
					<select class='tbox' name='vtp_btntextShadow_left' id='vtp_btntextShadow_left' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_btntextShadow_left'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_btntextShadow_left'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_btntextShadow_left'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_btntextShadow_left'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_btntextShadow_left'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_btntextShadow_left'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_btntextShadow_left'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_btntextShadow_left'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_btntextShadow_left'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_btntextShadow_left'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_btntextShadow_left'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_btntextShadow_bottom' id='vtp_btntextShadow_bottom' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_btntextShadow_bottom'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_btntextShadow_bottom'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_btntextShadow_bottom'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_btntextShadow_bottom'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_btntextShadow_bottom'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_btntextShadow_bottom'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_btntextShadow_bottom'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_btntextShadow_bottom'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_btntextShadow_bottom'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_btntextShadow_bottom'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_btntextShadow_bottom'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<select class='tbox' name='vtp_btntextShadow_blur' id='vtp_btntextShadow_blur' style='width:60px;' >
						<option value='-5px' ".
						( $pref['vtp_btntextShadow_blur'] == '-5px'?"selected='selected'":"" )
						.">-5px</option>
						<option value='-4px' ".
						( $pref['vtp_btntextShadow_blur'] == '-4px'?"selected='selected'":"" )
						.">-4px</option>
						<option value='-3px' ".
						( $pref['vtp_btntextShadow_blur'] == '-3px'?"selected='selected'":"" )
						.">-3px</option>
						<option value='-2px' ".
						( $pref['vtp_btntextShadow_blur'] == '-2px'?"selected='selected'":"" )
						.">-2px</option>
						<option value='-1px' ".
						( $pref['vtp_btntextShadow_blur'] == '-1px'?"selected='selected'":"" )
						.">-1px</option>
						<option value='0' ".
						( $pref['vtp_btntextShadow_blur'] == '0'?"selected='selected'":"" )
						.">0px</option>
						<option value='1px' ".
						( $pref['vtp_btntextShadow_blur'] == '1px'?"selected='selected'":"" )
						.">1px</option>
						<option value='2px' ".
						( $pref['vtp_btntextShadow_blur'] == '2px'?"selected='selected'":"" )
						.">2px</option>
						<option value='3px' ".
						( $pref['vtp_btntextShadow_blur'] == '3px'?"selected='selected'":"" )
						.">3px</option>
						<option value='4px' ".
						( $pref['vtp_btntextShadow_blur'] == '4px'?"selected='selected'":"" )
						.">4px</option>
						<option value='5px' ".
						( $pref['vtp_btntextShadow_blur'] == '5px'?"selected='selected'":"" )
						.">5px</option>
					</select>
					<input type='text' class='tbox' style='width:150px' name='vtp_btntextShadow' id='vtp_btntextShadow' value='".$tp->toFORM($pref['vtp_btntextShadow'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_btntextShadow'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
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
				<th colspan='2'><h3>".VTP_PLUGIN_24."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_25."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_analytics' id='vtp_analytics' value='1' " . ( $pref['vtp_analytics'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_26."</td>
				<td style='width:70%'>	
					<textarea  class='tbox' name='vtp_analytic_code' style='width: 80%'  rows='8' onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\">".$pref['vtp_analytic_code']."</textarea>
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