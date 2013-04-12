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

	$pref['custom_css'] =  $tp->toDB($_POST['custom_css']);

    save_prefs();
    
    $vtp_message =  '<div class="alert"><p>'.VTP_PLUGIN_2.'</p></div>';
}

$vtp_text = "
<form name='settings_form' id='custom_css_form' method='post' action='" . e_SELF . "?update'>

	<div class='vtp-info'>
		" . $vtp_message . "
		<h2 class='vtp-admin-title'>".VTP_PLUGIN_115."</h2>
	</div>
";
	
$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>		
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_116."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan='2' style='width:100%;font-weight:400;'>" . VTP_PLUGIN_117 . "</td>
			</tr>
			<tr>
				<td colspan='2' style='width:100%'>

					<div id='custom_css_container'>
                		<div name='custom_css' id='custom_css' style='border: 1px solid #DFDFDF; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; width: 100%; height: 400px; position: relative;'></div>
            		</div>

					<textarea id='custom_css_textarea' class='tbox' name='custom_css' style='display:none;'>".$pref['custom_css']."</textarea>
				</td>
			</tr>
			<tr>
				<td class='table-end' colspan='2'>
					<input class='button' name='savesettings' type='submit' value='" . VTP_PLUGIN_3 . "' />
				</td>
			</tr>
		</tbody>
	</table>
</form>
<p><center>Vanilla Theme Plugin v".$pref['plug_installed']['vanilla_plugin']." by <a href='http://www.xenthemes.com' target='_blank'>Xen Themes</a></center></p>";

$ns->tablerender( VTP_PLUGIN_1, $vtp_text );
require_once( e_ADMIN . "footer.php" );