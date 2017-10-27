<?php

/*
Plugin Name: Obigeek Custom CSS
Author: Joe Izzard
Version: 1.0.0
*/

$Obicust = array(
  'Version' => '1.0.0',
  'Minified' => false
);

/* ----- Enqueue The Style ----- */
function Obicust_CSS_enqueue() {
  global $Obicust;

  if ($Obicust['Minified'] == true) { $style = 'style_min'; } else { $style = 'style'; }

  wp_register_style('ObigeekCustomCSS', plugins_url($style . '.css', __FILE__), array(), $Obicust['Version']);
  wp_enqueue_style('ObigeekCustomCSS');
}
add_action('wp_enqueue_scripts', 'Obicust_CSS_enqueue');
