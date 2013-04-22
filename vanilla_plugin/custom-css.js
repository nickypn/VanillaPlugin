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

( function( global, $ ) {
	var editor,
		syncCSS = function() {
			$( '#custom_css_textarea' ).val( editor.getSession().getValue() );
		},
		loadAce = function() {
			editor = ace.edit( 'custom_css' );
			global.safecss_editor = editor;
			editor.getSession().setUseWrapMode( true );
			editor.setShowPrintMargin( false );
			editor.getSession().setValue( $( '#custom_css_textarea' ).val() );
			editor.getSession().setMode("ace/mode-css.js");
			jQuery.fn.spin&&$( '#custom_css_container' ).spin( false );
			$( '#custom_css_form' ).submit( syncCSS );
		};
	if ( $.browser.msie&&parseInt( $.browser.version, 10 ) <= 7 ) {
		$( '#custom_css_container' ).hide();
		$( '#custom_css_textarea' ).show();
		return false;
	} else {
		$( global ).load( loadAce );
	}
	global.aceSyncCSS = syncCSS;
} )( this, jQuery );