<?php

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