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

class General
{
  
  function getCurrentPluginVersion(){
  $vp_current_plugin_version = strtolower(trim(file_get_contents('http://xenthemes.com/vanilla-updates/vp_ver.php')));
  return $vp_current_plugin_version;
  }

  function getCurrentThemeVersion(){
  $vp_current_theme_version = strtolower(trim(file_get_contents('http://xenthemes.com/vanilla-updates/vt_ver.php')));
  return $vp_current_theme_version;
  }
  
}