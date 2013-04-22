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
include_lan(e_PLUGIN."vanilla_plugin/languages/".e_LANGUAGE.".php");
require_once( e_ADMIN . "auth.php" );

require_once(e_HANDLER.'form_handler.php');
require_once(e_HANDLER.'userclass_class.php');
require_once(e_HANDLER.'ren_help.php');

if ( isset( $_POST['savesettings'] ) ) {

    $pref['vtp_tweet'] = (int)$_POST['vtp_tweet'];
    $pref['vtp_twitter_username'] = $tp->toDB( $_POST['vtp_twitter_username'] );
    $pref['vtp_plusone'] = (int)$_POST['vtp_plusone'];
    $pref['vtp_fbbtn'] = (int)$_POST['vtp_fbbtn'];
    $pref['vtp_fbid'] = $tp->toDB( $_POST['vtp_fbid'] );

    $pref['vtp_nsocial'] = (int)$_POST['vtp_nsocial'];
    $pref['vtp_retweet'] = (int)$_POST['vtp_retweet'];
    $pref['vtp_fblike'] = (int)$_POST['vtp_fblike'];
    $pref['vtp_inshare'] = (int)$_POST['vtp_inshare'];
    $pref['vtp_googleplus'] = (int)$_POST['vtp_googleplus'];
    $pref['vtp_social_text'] =  $tp->toDB($_POST['vtp_social_text']);
    
    $pref['vtp_icons_rss'] = (int)$_POST['vtp_icons_rss'];
    $pref['vtp_icons_rssurl'] = $tp->toDB( $_POST['vtp_icons_rssurl'] );
    $pref['vtp_icons_linkedin'] = (int)$_POST['vtp_icons_linkedin'];
    $pref['vtp_icons_linkedinurl'] = $tp->toDB( $_POST['vtp_icons_linkedinurl'] );
    $pref['vtp_icons_facebook'] = (int)$_POST['vtp_icons_facebook'];
    $pref['vtp_icons_facebookurl'] = $tp->toDB( $_POST['vtp_icons_facebookurl'] );
    $pref['vtp_icons_twitter'] = (int)$_POST['vtp_icons_twitter'];
    $pref['vtp_icons_twitterurl'] = $tp->toDB( $_POST['vtp_icons_twitterurl'] );
    $pref['vtp_icons_google'] = (int)$_POST['vtp_icons_google'];
    $pref['vtp_icons_googleurl'] = $tp->toDB( $_POST['vtp_icons_googleurl'] );     
    $pref['vtp_icons_youtube'] = (int)$_POST['vtp_icons_youtube'];
    $pref['vtp_icons_youtubeurl'] = $tp->toDB( $_POST['vtp_icons_youtubeurl'] );

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
<form id='dataform' method='post' action='" . e_SELF . "?update'>

	<div class='vtp-info'>
		" . $vtp_message . "
		<h2 class='vtp-admin-title'>".VTP_PLUGIN_75."</h2>
	</div>
";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>	
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_119."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_120 . "</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_tweet' id='vtp_tweet' value='1' " . ( $pref['vtp_tweet'] == 1?'checked="checked"':'' ) . "/>
					<input class='tbox' type='text' name='vtp_twitter_username' id='vtp_twitter_username'  style='width:200px' value='" . $tp->toFORM( $pref['vtp_twitter_username'] ) . "' />
				</td>
			</tr>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_124 . "</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_fbbtn' id='vtp_fbbtn' value='1' " . ( $pref['vtp_fbbtn'] == 1?'checked="checked"':'' ) . "/>
					<input class='tbox' type='text' name='vtp_fbid' id='vtp_fbid'  style='width:200px' value='" . $tp->toFORM( $pref['vtp_fbid'] ) . "' />
				</td>
			</tr>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_121 . "</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_plusone' id='vtp_plusone' value='1' " . ( $pref['vtp_plusone'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td class='table-end' colspan='2'>
					<input class='button' name='savesettings' type='submit' value='" . VTP_PLUGIN_3 . "' />
				</td>
			</tr>
		</tbody>
	</table>";

$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>	
			<tr>
				<th colspan='2'><h3>".VTP_PLUGIN_85."</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_86 . "</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_nsocial' id='vtp_nsocial' value='1' " . ( $pref['vtp_nsocial'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_87 . "</td>
				<td style='width:70%'>	
					<textarea  class='tbox' name='vtp_social_text' style='width: 70%'  rows='3' onselect='storeCaret(this);' onclick='storeCaret(this);' onkeyup='storeCaret(this);'>".$pref['vtp_social_text']."</textarea><br />";

$vtp_text .= display_help("helpb", "vanilla");

$vtp_text .= "
				</td>
			</tr>
			<tr>
				<td style='width:30%'>".VTP_PLUGIN_88."</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_fblike' id='vtp_fblike' value='1' " . ( $pref['vtp_fblike'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_89 . "</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_retweet' id='vtp_retweet' value='1' " . ( $pref['vtp_retweet'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_90 . "</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_inshare' id='vtp_inshare' value='1' " . ( $pref['vtp_inshare'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td style='width:30%'>" . VTP_PLUGIN_91 . "</td>
				<td style='width:70%'>
					<input type='checkbox' name='vtp_googleplus' id='vtp_googleplus' value='1' " . ( $pref['vtp_googleplus'] == 1?'checked="checked"':'' ) . "/>
				</td>
			</tr>
			<tr>
				<td class='table-end' colspan='2'>
					<input class='button' name='savesettings' type='submit' value='" . VTP_PLUGIN_3 . "' />
				</td>
			</tr>
		</tbody>
	</table>";
$vtp_text .= "
	<table class='vtp-table' style='" . ADMIN_WIDTH . "'>
		<thead>
			<tr>
				<th colspan='2'><h3>" . VTP_PLUGIN_76 . "</h3></th>
			</tr>
		</thead>
		<tbody>
			<tr>
			    <td style='width:30%;'>".VTP_PLUGIN_77."</td>
			    <td style='width:70%;'><strong>" . VTP_PLUGIN_78 . "</strong></td>
			</tr>
			<tr>
			    <td style='width:30%'>
			    	<img src='".e_PLUGIN."vanilla_plugin/images/social/rss.png' alt='' height='24' width='24' style='padding-right:15px;'/>
			    	<input type='checkbox' name='vtp_icons_rss' id='vtp_icons_rss' value='1' " . ( $pref['vtp_icons_rss'] == 1?'checked="checked"':'' ) . "/>
			    	<label for='vtp_icons_rss'> " . VTP_PLUGIN_79 . "</label>
			    </td>
			    <td style='width:70%;'>
			    	<input class='tbox' type='text' name='vtp_icons_rssurl' id='vtp_icons_rssurl'  style='width:80%' value='" . $tp->toFORM( $pref['vtp_icons_rssurl'] ) . "' />
			    </td>
			</tr>
			<tr>
			    <td style='width:30%'>
			    	<img src='".e_PLUGIN."vanilla_plugin/images/social/linkedin.png' alt='' height='24' width='24' style='padding-right:15px;'/>
			    	<input type='checkbox' name='vtp_icons_linkedin' id='vtp_icons_linkedin' value='1' " . ( $pref['vtp_icons_linkedin'] == 1?'checked="checked"':'' ) . "/>
			    	<label for='vtp_icons_linkedin'> " . VTP_PLUGIN_80 . "</label>
			    </td>
			    <td style='width:70%;'>
			    	<input class='tbox' type='text' name='vtp_icons_linkedinurl' id='vtp_icons_linkedinurl'  style='width:80%' value='" . $tp->toFORM( $pref['vtp_icons_linkedinurl'] ) . "' />
			    </td>
			</tr>
			<tr>
			    <td style='width:30%'>
			    	<img src='".e_PLUGIN."vanilla_plugin/images/social/google.png' alt='' height='24' width='24' style='padding-right:15px;'/>
			    	<input type='checkbox' name='vtp_icons_google' id='vtp_icons_google' value='1' " . ( $pref['vtp_icons_google'] == 1?'checked="checked"':'' ) . "/>
			    	<label for='vtp_icons_google'> " . VTP_PLUGIN_81 . "</label>
			    </td>
			    <td style='width:70%;'>
			    	<input class='tbox' type='text' name='vtp_icons_googleurl' id='vtp_icons_googleurl'  style='width:80%' value='" . $tp->toFORM( $pref['vtp_icons_googleurl'] ) . "' />
			    </td>
			</tr>
			<tr>
			    <td style='width:30%'>
			    	<img src='".e_PLUGIN."vanilla_plugin/images/social/facebook.png' alt='' height='24' width='24' style='padding-right:15px;'/>
			    	<input type='checkbox' name='vtp_icons_facebook' id='vtp_icons_facebook' value='1' " . ( $pref['vtp_icons_facebook'] == 1?'checked="checked"':'' ) . "/>
			    	<label for='vtp_icons_facebook'> " . VTP_PLUGIN_82 . "</label>
			    </td>
			    <td style='width:70%;'>
			    	<input class='tbox' type='text' name='vtp_icons_facebookurl' id='vtp_icons_facebookurl'  style='width:80%' value='" . $tp->toFORM( $pref['vtp_icons_facebookurl'] ) . "' />
			    </td>
			</tr>
			<tr>
			    <td style='width:30%'>
			    	<img src='".e_PLUGIN."vanilla_plugin/images/social/twitter.png' alt='' height='24' width='24' style='padding-right:15px;'/>
			    	<input type='checkbox' name='vtp_icons_twitter' id='vtp_icons_twitter' value='1' " . ( $pref['vtp_icons_twitter'] == 1?'checked="checked"':'' ) . "/>
			    	<label for='vtp_icons_twitter'> " . VTP_PLUGIN_83 . "</label>
			    </td>
			    <td style='width:70%;'>
			    	<input class='tbox' type='text' name='vtp_icons_twitterurl' id='vtp_icons_twitterurl'  style='width:80%' value='" . $tp->toFORM( $pref['vtp_icons_twitterurl'] ) . "' />
			    </td>
			</tr>					
			<tr>
			    <td style='width:30%'>
			    	<img src='".e_PLUGIN."vanilla_plugin/images/social/youtube.png' alt='' height='24' width='24' style='padding-right:15px;'/>
			    	<input type='checkbox' name='vtp_icons_youtube' id='vtp_icons_youtube' value='1' " . ( $pref['vtp_icons_youtube'] == 1?'checked="checked"':'' ) . "/>
			    	<label for='vtp_icons_youtube'> " . VTP_PLUGIN_84 . "</label>
			    </td>
			    <td style='width:70%;'>
			    	<input class='tbox' type='text' name='vtp_icons_youtubeurl' id='vtp_icons_youtubeurl'  style='width:80%' value='" . $tp->toFORM( $pref['vtp_icons_youtubeurl'] ) . "' />
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