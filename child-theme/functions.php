<?php
/**
 * Your code here.
 *
 */

/**
 * Adding Custom Font
 * to
 */

 function add_custom_font( $fonts ) {

 $fonts['Spartan:200'] = 'Spartan 200';
 $fonts['Spartan:400'] = 'Spartan 400';
 $fonts['Spartan:600'] = 'Spartan 600';
 $fonts['Spartan:800'] = 'Spartan 800';

 $fonts['Open Sans:400'] = 'Open Sans Regular';
 $fonts['Open Sans:700'] = 'Open Sans Bold';
 //to add more fonts, just define they like this
 //$fonts['my-font-family'] = 'my-font-name';
 return $fonts;
 }

 add_filter( 'presscore_options_get_safe_fonts', 'add_custom_font' ,30 , 1 );

remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_plugins', '__return_null');
