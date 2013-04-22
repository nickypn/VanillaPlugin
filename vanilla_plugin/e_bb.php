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

$bb['name']		= 'fitvids'; 
$bb['onclick']		= ''; 
$bb['onclick_var']	= "[fitvids][/fitvids]"; 
$bb['icon']		= e_PLUGIN."vanilla_plugin/images/fitvids.png"; 
$bb['helptext']		= "Insert FitVids wrapper: [fitvids]media here[/fitvids]";
$bb['function']		= '';   
$bb['function_var']     = '';  

// append the bbcode to the default templates:
 
$BBCODE_TEMPLATE .= "{BB=fitvids}"; 
$BBCODE_TEMPLATE_NEWSPOST .= "{BB=fitvids}";
$BBCODE_TEMPLATE_ADMIN .= "{BB=fitvids}";
$BBCODE_TEMPLATE_CPAGE .= "{BB=fitvids}"; 

$eplug_bb[] = $bb;  // add to the global list - Very Important!    

?>