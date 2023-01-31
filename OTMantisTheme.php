<?php

class OTMantisThemePlugin extends MantisPlugin {

  function register() {
    $this->name        = 'OT Mantis Theme';
    $this->description = 'Adds Our Town colors and logo';

    $this->version     = '0.0.2';
    $this->requires    = array(
      'MantisCore'       => '2.0.0',
    );

    $this->author      = 'Our Town America';
    $this->contact     = 'it@ourtowmaerica.com';
    $this->url         = 'ourtownamerica.com';
  }

  function hooks() {
    return array(
        'EVENT_LAYOUT_RESOURCES' => 'add_layout_resources_hook'
    );
  }

  function add_layout_resources_hook($p_event) {
      echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('OTMantisTheme.css') . '" />' . "\n";
	  echo '<script src="' . plugin_file('OTMantisTheme.js') . '&logourl=' . urlencode(plugin_file('otalogo.png')) . '" ></script>' . "\n";
  }

}