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

	$pref['vtp_disclaim'] = (int)$_POST['vtp_disclaim'];

    save_prefs();
    
    $vtp_message =  '<div class="alert"><p>'.VTP_PLUGIN_2.'</p></div>';
}

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
		<h2 class='vtp-admin-title'>".VTP_PLUGIN_101."</h2>
	</div>
";
	
$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>		
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_104."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:100%;'>
					".VTP_PLUGIN_105."
				</td>
			</tr>
		</tbody>
	</table>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>		
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_102."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%;'>
					Site theme:
				</td>
				<td style='width:70%;'>
					".$pref['sitetheme']."
				</td>
			</tr>
			<tr>
				<td style='width:30%;'>
					Plugin version:
				</td>
				<td style='width:70%;'>
					".$pref['plug_installed']['vanilla_plugin']."
				</td>
			</tr>
				<td style='width:30%;'>
					e107 version:
				</td>
				<td style='width:70%;'>
					".$e107info['e107_version']."
				</td>
			</tr>
			<tr>
				<td style='width:30%;'>
					PHP version:
				</td>
				<td style='width:70%;'>
					".phpversion()."
				</td>
			</tr>
			<tr>
				<td style='width:30%;'>
					MySQL version:
				</td>
				<td style='width:70%;'>
					".mysql_get_server_info()."
				</td>
			</tr>
			<tr>
				<td style='width:30%;'>
					Site URL:
				</td>
				<td style='width:70%;'>
					".SITEURL."
				</td>
			</tr>
			<tr>
				<td style='width:30%;'>
					Plugins installed:
				</td>
				<td style='width:70%;'>
";

$knownPlugs=array('vanilla_plugin','pm','pdf','integrity_check','log');
foreach($pref['plug_installed'] as $plugInst=>$key) {
	if(!in_array($plugInst,$knownPlugs)) {				
		$vtp_text .= $plugInst." - v".$key."<br />";
	}
}
$vtp_text .= "
				</td>
			</tr>
		</tbody>
	</table>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>		
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_106."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:100%;'>
					
					<h4>Vanilla Theme v1.2.1</h4>
					<p class='licence'><a href='http://www.xenthemes.com'>Vanilla e107 Theme</a> (c) copyright 2013, Xen Themes.</p>
					<p class='licence'>Dual licensed under the <a href='http://www.opensource.org/licenses/mit-license.php'>MIT</a> or <a href='http://www.gnu.org/licenses/gpl-2.0.txt'>GPL Version 2</a> licenses</p>
				
					<h4>jQuery &#8212; JavaScript Library</h4>
					<p class='licence'><a href='http://jquery.com/'>http://jquery.com</a> (c) Copyright 2010-2012, John Resig</p>
					<p class='licence'>Dual licensed under the <a href='http://jquery.org/license'>MIT or GPL</a> Version 2 licenses.</p>
					
					<h4>jQWidon't &#8212; Suppress typographic widows</h4>
					<p class='licence'><a href='http://davecardwell.co.uk/javascript/jquery/plugins/jquery-widont/'>jQWidon’t</a> is a plugin for the jQuery JavaScript library that replaces the whitespace between the last two words of a given element’s contents with a non-breaking space, to prevent typographic widows.</p>
					<p class='licence'>jQWidon’t is dual-licensed under the <a href='http://www.opensource.org/licenses/mit-license.php'>MIT</a> and <a href='http://www.gnu.org/licenses/gpl.txt'>GNU GPL</a> licenses</p>
					
					<h4>Selectivizr.js &#8212; CSS3 selectors for IE</h4>
					<p class='licence'><a href='http://selectivizr.com'>selectivizr.com</a> (c) Keith Clark, freely distributable under the terms of the <a href='http://www.opensource.org/licenses/mit-license.php'>MIT</a> license.</p>
					
					<h4>HTML5shiv.js</h4>
					<p class='licence'>Dual licensed under the <a href='http://www.opensource.org/licenses/mit-license.php'>MIT</a> or <a href='http://www.gnu.org/licenses/gpl-2.0.txt'>GPL Version 2</a> licenses</p>
					
					<h4>IE9.js</h4>
					<p class='licence'><a href='http://code.google.com/p/ie7-js/'>IE7/IE8/IE9.js</a> - copyright 2004-2010, Dean Edwards. Released under the <a href='http://www.opensource.org/licenses/mit-license.php'>MIT</a> licence.</p>
					
					<h4>FitVids.js</h4>
					<p class='licence'><a href='https://github.com/davatron5000/FitVids.js'>FitVids.js</a> Released under the <a href='http://sam.zoy.org/wtfpl/'>WTFPL</a> license.</p>
					
					<h4>Social Media Icon Set by Designsidea</h4>
					<p class='licence'>The <a href='http://designsidea.com/social-media-icon-set-by-designsidea/'>Social Media icon set</a> is licensed under a <a href='http://creativecommons.org/licenses/by-sa/3.0/'>Creative Commons Attribution Share-Alike 3.0 Unported</a> license. You are free to share, use and modify this work for personal or commercial purposes.</p>
					
				</td>
			</tr>
		</tbody>
	</table>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>		
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_107."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:100%;'>
				
					<h4>Vanilla Theme Plugin v1.2</h4>
					<p class='licence'><a href='http://www.xenthemes.com'>Vanilla e107 Theme Plugin</a> (c) copyright 2013, Xen Themes.</p>
					<p class='licence'>This plugin is licenced under the <a href='http://www.gnu.org/licenses/gpl-2.0.txt'>GPL Version 2</a> licence.</p>
					
					<h4>Tigra Color Picker</h4>
					<p class='licence'><a href='http://www.softcomplex.com/products/tigra_color_picker/'>Tigra Color Picker</a> Permission given to use this script in ANY kind of applications if header lines are left unchanged.</p>

					<h4>Ace Code Editor</h4>
					<p class='licence'><a href='https://github.com/ajaxorg/ace'>Ace Code Editor</a> Copyright (c) 2010, Ajax.org B.V. All rights reserved.<br />THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS \"AS IS\" AND
						ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
						WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
						DISCLAIMED. IN NO EVENT SHALL AJAX.ORG B.V. BE LIABLE FOR ANY
						DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
						(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
						LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
						ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
						(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
						SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</p>
					
				</td>
			</tr>
		</tbody>
	</table>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_27."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_28."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_disclaim' id='vtp_disclaim' value='1' " . ( $pref['vtp_disclaim'] == 1?'checked="checked"':'' ) . "/>
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
<p><center>Vanilla Theme Plugin v".$pref['plug_installed']['vanilla_plugin']." by <a href='http://www.xenthemes.com' target='_blank'>Xen Themes</a></center></p>
";


$ns->tablerender( VTP_PLUGIN_1, $vtp_text );
require_once( e_ADMIN . "footer.php" );