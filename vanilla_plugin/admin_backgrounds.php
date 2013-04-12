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

require_once(e_HANDLER.'upload_handler.php');

if ( isset( $_POST['savesettings'] ) ) {

    $pref['vtp_bodyBg'] =  $tp->toDB($_POST['vtp_bodyBg']);
    $pref['vtp_bodyBg_img'] =  $tp->toDB($_POST['vtp_bodyBg_img']);
    $pref['vtp_bodyBg_repeat'] = $_POST['vtp_bodyBg_repeat'];
    $pref['vtp_bodyBg_attach'] = $_POST['vtp_bodyBg_attach'];
    $pref['vtp_bodyBg_position_x'] = $_POST['vtp_bodyBg_position_x'];
    $pref['vtp_bodyBg_position_y'] = $_POST['vtp_bodyBg_position_y'];
    
    $pref['vtp_contentBg'] =  $tp->toDB($_POST['vtp_contentBg']);
    $pref['vtp_contentBg_img'] =  $tp->toDB($_POST['vtp_contentBg_img']);
    $pref['vtp_contentBg_repeat'] = $_POST['vtp_contentBg_repeat'];
    $pref['vtp_contentBg_attach'] = $_POST['vtp_contentBg_attach'];
    $pref['vtp_contentBg_position_x'] = $_POST['vtp_contentBg_position_x'];
    $pref['vtp_contentBg_position_y'] = $_POST['vtp_contentBg_position_y'];
    $pref['vtp_contentBoxShadow'] = (int)$_POST['vtp_contentBoxShadow'];
    
    $pref['vtp_footerBg'] =  $tp->toDB($_POST['vtp_footerBg']);
    $pref['vtp_footerBg_img'] =  $tp->toDB($_POST['vtp_footerBg_img']);
    $pref['vtp_footerBg_repeat'] = $_POST['vtp_footerBg_repeat'];
    $pref['vtp_footerBg_attach'] = $_POST['vtp_footerBg_attach'];
    $pref['vtp_footerBg_position_x'] = $_POST['vtp_footerBg_position_x'];
    $pref['vtp_footerBg_position_y'] = $_POST['vtp_footerBg_position_y'];
    
    $pref['vtp_topbarBg'] =  $tp->toDB($_POST['vtp_topbarBg']);
    $pref['vtp_gradient'] = (int)$_POST['vtp_gradient'];
    $pref['vtp_topbarBoxShadow'] = (int)$_POST['vtp_topbarBoxShadow'];
    $pref['vtp_widgetBg'] =  $tp->toDB($_POST['vtp_widgetBg']);
    $pref['vtp_mainmenuBoxShadow'] = (int)$_POST['vtp_mainmenuBoxShadow'];
    $pref['vtp_asidewidgetBg'] =  $tp->toDB($_POST['vtp_asidewidgetBg']);
    $pref['vtp_sidemenuBoxShadow'] = (int)$_POST['vtp_sidemenuBoxShadow'];
    $pref['vtp_footerwidgetBg'] =  $tp->toDB($_POST['vtp_footerwidgetBg']);
    $pref['vtp_footermenuBoxShadow'] = (int)$_POST['vtp_footermenuBoxShadow'];
    $pref['vtp_itemBg'] =  $tp->toDB($_POST['vtp_itemBg']);
    $pref['vtp_itemBoxShadow'] = (int)$_POST['vtp_itemBoxShadow'];

    save_prefs();
    
    $vtp_message =  '<div class="alert"><p>'.VTP_PLUGIN_2.'</p></div>';
}

//-----------------------------------------------------------------------------------------------------------+

  $file_handle = opendir(e_THEME."vanilla_theme/images/backgrounds");

  while ($file_name = readdir($file_handle))
  {
    if ($file_name == "." || $file_name == "..") { continue; }

    $iconlist[] = $file_name;
  }

  closedir($file_handle);

  while (list($key, $icon)=each($iconlist))
  					{
    					$icontext .= " <a href='javascript:addtext(\"$icon\")'><img src='".e_THEME."vanilla_theme/images/backgrounds/$icon' style='border:0px;max-width:120px;max-height:120px;' alt='' /></a>";
    					$icontext2 .= " <a href='javascript:addtext2(\"$icon\")'><img src='".e_THEME."vanilla_theme/images/backgrounds/$icon' style='border:0px;max-width:120px;max-height:120px;' alt='' /></a>";
    					$icontext3 .= " <a href='javascript:addtext3(\"$icon\")'><img src='".e_THEME."vanilla_theme/images/backgrounds/$icon' style='border:0px;max-width:120px;max-height:120px;' alt='' /></a>";
 					}

//-----------------------------------------------------------------------------------------------------------+
		
$vtp_text = "
<form name='settings_form' id='dataform' method='post' action='" . e_SELF . "?update'>

	<div class='vtp-info'>
		" . $vtp_message . "
		<h2 class='vtp-admin-title'>".VTP_PLUGIN_29."</h2>
	</div>
	<div class='tip'>
		<p class='tips'><strong>".VTP_TIPS_1."</strong> ".VTP_TIPS_3."</p>
		<p>".VTP_TIPS_4."</p>
	</div>
";
			
$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_30."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_31."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_bodyBg']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_bodyBg' id='vtp_bodyBg' value='".$tp->toFORM($pref['vtp_bodyBg'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_bodyBg'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%;'>".VTP_PLUGIN_32."</td>
				<td style='width:70%;'>
					<input style='width:200px' class='tbox' type='text' name='vtp_bodyBg_img' value='".$pref['vtp_bodyBg_img']."' />
					<br /><br />
					<div>".$icontext."
					</div>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_33."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_bodyBg_repeat' id='vtp_bodyBg_repeat' >
						<option></option>
						<option value='repeat' ".
						( $pref['vtp_bodyBg_repeat'] == 'repeat'?"selected='selected'":"" )
						.">repeat</option>
						<option value='no-repeat' ".
						( $pref['vtp_bodyBg_repeat'] == 'no-repeat'?"selected='selected'":"" )
						.">no-repeat</option>
						<option value='repeat-x' ".
						( $pref['vtp_bodyBg_repeat'] == 'repeat-x'?"selected='selected'":"" )
						.">repeat-x</option>
						<option value='repeat-y' ".
						( $pref['vtp_bodyBg_repeat'] == 'repeat-y'?"selected='selected'":"" )
						.">repeat-y</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_34."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_bodyBg_attach' id='vtp_bodyBg_attach' >
						<option></option>
						<option value='scroll' ".
						( $pref['vtp_bodyBg_attach'] == 'scroll'?"selected='selected'":"" )
						.">scroll</option>
						<option value='fixed' ".
						( $pref['vtp_bodyBg_attach'] == 'fixed'?"selected='selected'":"" )
						.">fixed</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_35."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_bodyBg_position_x' id='vtp_bodyBg_position_x' >
						<option></option>
						<option value='left' ".
						( $pref['vtp_bodyBg_position_x'] == 'left'?"selected='selected'":"" )
						.">left</option>
						<option value='right' ".
						( $pref['vtp_bodyBg_position_x'] == 'right'?"selected='selected'":"" )
						.">right</option>
						<option value='center' ".
						( $pref['vtp_bodyBg_position_x'] == 'center'?"selected='selected'":"" )
						.">center</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_36."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_bodyBg_position_y' id='vtp_bodyBg_position_y' >
						<option></option>
						<option value='top' ".
						( $pref['vtp_bodyBg_position_y'] == 'top'?"selected='selected'":"" )
						.">top</option>
						<option value='bottom' ".
						( $pref['vtp_bodyBg_position_y'] == 'bottom'?"selected='selected'":"" )
						.">bottom</option>
						<option value='center' ".
						( $pref['vtp_bodyBg_position_y'] == 'center'?"selected='selected'":"" )
						.">center</option>
					</select>
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
		<p class='tips'><strong>".VTP_TIPS_1."</strong> ".VTP_TIPS_5."</p>
		<p>".VTP_TIPS_6."</p>
	</div>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_37."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_31."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_contentBg']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_contentBg' id='vtp_contentBg' value='".$tp->toFORM($pref['vtp_contentBg'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_contentBg'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%;'>".VTP_PLUGIN_32."</td>
				<td style='width:70%;'>
					<input  style='width:200px' class='tbox' type='text' name='vtp_contentBg_img' value='".$pref['vtp_contentBg_img']."' />
					<br /><br />
					<div>".$icontext2."
					</div>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_33."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_contentBg_repeat' id='vtp_contentBg_repeat' >
						<option></option>
						<option value='repeat' ".
						( $pref['vtp_contentBg_repeat'] == 'repeat'?"selected='selected'":"" )
						.">repeat</option>
						<option value='no-repeat' ".
						( $pref['vtp_contentBg_repeat'] == 'no-repeat'?"selected='selected'":"" )
						.">no-repeat</option>
						<option value='repeat-x' ".
						( $pref['vtp_contentBg_repeat'] == 'repeat-x'?"selected='selected'":"" )
						.">repeat-x</option>
						<option value='repeat-y' ".
						( $pref['vtp_contentBg_repeat'] == 'repeat-y'?"selected='selected'":"" )
						.">repeat-y</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_34."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_contentBg_attach' id='vtp_contentBg_attach' >
						<option></option>
						<option value='scroll' ".
						( $pref['vtp_contentBg_attach'] == 'scroll'?"selected='selected'":"" )
						.">scroll</option>
						<option value='fixed' ".
						( $pref['vtp_contentBg_attach'] == 'fixed'?"selected='selected'":"" )
						.">fixed</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_35."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_contentBg_position_x' id='vtp_contentBg_position_x' >
						<option></option>
						<option value='left' ".
						( $pref['vtp_contentBg_position_x'] == 'left'?"selected='selected'":"" )
						.">left</option>
						<option value='right' ".
						( $pref['vtp_contentBg_position_x'] == 'right'?"selected='selected'":"" )
						.">right</option>
						<option value='center' ".
						( $pref['vtp_contentBg_position_x'] == 'center'?"selected='selected'":"" )
						.">center</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_36."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_contentBg_position_y' id='vtp_contentBg_position_y' >
						<option></option>
						<option value='top' ".
						( $pref['vtp_contentBg_position_y'] == 'top'?"selected='selected'":"" )
						.">top</option>
						<option value='bottom' ".
						( $pref['vtp_contentBg_position_y'] == 'bottom'?"selected='selected'":"" )
						.">bottom</option>
						<option value='center' ".
						( $pref['vtp_contentBg_position_y'] == 'center'?"selected='selected'":"" )
						.">center</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_38."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_contentBoxShadow' id='vtp_contentBoxShadow' value='1' " . ( $pref['vtp_contentBoxShadow'] == 1?'checked="checked"':'' ) . "/>
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
				<th colspan='2'><h3>".VTP_PLUGIN_39."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_31."</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_footerBg']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_footerBg' id='vtp_footerBg' value='".$tp->toFORM($pref['vtp_footerBg'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_footerBg'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%;'>".VTP_PLUGIN_32."</td>
				<td style='width:70%;'>
					<input  style='width:200px' class='tbox' type='text' name='vtp_footerBg_img' value='".$pref['vtp_footerBg_img']."' />
					<br /><br />
					<div>".$icontext3."
					</div>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_33."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_footerBg_repeat' id='vtp_footerBg_repeat' >
						<option></option>
						<option value='repeat' ".
						( $pref['vtp_footerBg_repeat'] == 'repeat'?"selected='selected'":"" )
						.">repeat</option>
						<option value='no-repeat' ".
						( $pref['vtp_footerBg_repeat'] == 'no-repeat'?"selected='selected'":"" )
						.">no-repeat</option>
						<option value='repeat-x' ".
						( $pref['vtp_footerBg_repeat'] == 'repeat-x'?"selected='selected'":"" )
						.">repeat-x</option>
						<option value='repeat-y' ".
						( $pref['vtp_footerBg_repeat'] == 'repeat-y'?"selected='selected'":"" )
						.">repeat-y</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_34."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_footerBg_attach' id='vtp_footerBg_attach' >
						<option></option>
						<option value='scroll' ".
						( $pref['vtp_footerBg_attach'] == 'scroll'?"selected='selected'":"" )
						.">scroll</option>
						<option value='fixed' ".
						( $pref['vtp_footerBg_attach'] == 'fixed'?"selected='selected'":"" )
						.">fixed</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_35."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_footerBg_position_x' id='vtp_footerBg_position_x' >
						<option></option>
						<option value='left' ".
						( $pref['vtp_footerBg_position_x'] == 'left'?"selected='selected'":"" )
						.">left</option>
						<option value='right' ".
						( $pref['vtp_footerBg_position_x'] == 'right'?"selected='selected'":"" )
						.">right</option>
						<option value='center' ".
						( $pref['vtp_footerBg_position_x'] == 'center'?"selected='selected'":"" )
						.">center</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_36."</td>
				<td style='width:70%'>
					<select class='tbox' name='vtp_footerBg_position_y' id='vtp_footerBg_position_y' >
						<option></option>
						<option value='top' ".
						( $pref['vtp_footerBg_position_y'] == 'top'?"selected='selected'":"" )
						.">top</option>
						<option value='bottom' ".
						( $pref['vtp_footerBg_position_y'] == 'bottom'?"selected='selected'":"" )
						.">bottom</option>
						<option value='center' ".
						( $pref['vtp_footerBg_position_y'] == 'center'?"selected='selected'":"" )
						.">center</option>
					</select>
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
				<th colspan='2'><h3>".VTP_PLUGIN_40."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_41 . "</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_topbarBg']).";'></div>
					<input type='text' class='tbox' style='width:150px'; name='vtp_topbarBg' id='vtp_topbarBg' value='".$tp->toFORM($pref['vtp_topbarBg'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_topbarBg'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_111."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_gradient' id='vtp_gradient' value='1' " . ( $pref['vtp_gradient'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_42."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_topbarBoxShadow' id='vtp_topbarBoxShadow' value='1' " . ( $pref['vtp_topbarBoxShadow'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_43 . "</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_widgetBg']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_widgetBg' id='vtp_widgetBg' value='".$tp->toFORM($pref['vtp_widgetBg'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_widgetBg'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_44."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_mainmenuBoxShadow' id='vtp_mainmenuBoxShadow' value='1' " . ( $pref['vtp_mainmenuBoxShadow'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_45 . "</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_asidewidgetBg']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_asidewidgetBg' id='vtp_asidewidgetBg' value='".$tp->toFORM($pref['vtp_asidewidgetBg'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_asidewidgetBg'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_46."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_sidemenuBoxShadow' id='vtp_sidemenuBoxShadow' value='1' " . ( $pref['vtp_sidemenuBoxShadow'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_47 . "</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_footerwidgetBg']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_footerwidgetBg' id='vtp_footerwidgetBg' value='".$tp->toFORM($pref['vtp_footerwidgetBg'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_footerwidgetBg'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_48."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_footermenuBoxShadow' id='vtp_footermenuBoxShadow' value='1' " . ( $pref['vtp_footermenuBoxShadow'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_49 . "</td>
				<td style='width:70%'>
					<div class='previewbox' style='background:".$tp->toFORM($pref['vtp_itemBg']).";'></div>
					<input type='text' class='tbox' style='width:150px' name='vtp_itemBg' id='vtp_itemBg' value='".$tp->toFORM($pref['vtp_itemBg'])."' />
					<a href=\"javascript:TCP.popup(document.forms['settings_form'].elements['vtp_itemBg'])\"><img width=\"28\" height=\"28\" border=\"0\" alt=\"Click Here to Pick up the color\" src=\"images/swatch.png\" style=\"vertical-align:middle;padding-bottom:2px;\"></a>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_103."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_itemBoxShadow' id='vtp_itemBoxShadow' value='1' " . ( $pref['vtp_itemBoxShadow'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td class='table-end' colspan='2'>
					<input class='button' name='savesettings' type='submit' value='".VTP_PLUGIN_3."' />
				</td>
			</tr>
		</tbody>
	</table>
</form>
<p><center>Vanilla Theme Plugin v".$pref['plug_installed']['vanilla_plugin']." by <a href='http://www.xenthemes.com' target='_blank'>Xen Themes</a></center></p>";


$ns->tablerender( VTP_PLUGIN_1, $vtp_text );
require_once( e_ADMIN . "footer.php" );