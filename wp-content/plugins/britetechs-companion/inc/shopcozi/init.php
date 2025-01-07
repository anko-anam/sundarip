<?php
function bc_shopcozi_get_template_part($slug, $name = null) {

  do_action("shopcozi_get_template_part_{$slug}", $slug, $name);

  $templates = array();
  if (isset($name))
      $templates[] = "{$slug}-{$name}.php";

  $templates[] = "{$slug}.php";

  bc_shopcozi_get_template_path($templates, true, false);
}

function bc_shopcozi_get_template_path($template_names, $load = false, $require_once = true ) {
  $themedata = wp_get_theme();
  $mytheme = $themedata->name;
  $mytheme = strtolower( $mytheme );
  $mytheme = str_replace( ' ','-', $mytheme );

    if($themedata->parent()=='Shopcozi'){
      $mytheme = 'shopcozi';
    }

    $located = ''; 
    foreach ( (array) $template_names as $template_name ) { 
      if ( !$template_name ) 
        continue; 

      /* search file within the PLUGIN_DIR_PATH only */ 
      if ( file_exists(bc_plugin_dir . "inc/$mytheme/" . $template_name)) { 
        $located = bc_plugin_dir . "inc/$mytheme/" . $template_name; 
        break; 
      }
    }

    if ( $load && '' != $located )
        load_template( $located, $require_once );

    return $located;
}

include('default-data.php');

function bc_shopcozi_theme_init(){

  if( class_exists('Shopcozi_Primary_Color_Control') ){
    return;
  }
  
  include('header_helpers.php');
  include('footer_helpers.php');
  include('front-page-helpers.php');
  include('customizer/options/customizer-header.php');
  include('customizer/options/customizer-general.php');
  include('customizer/options/customizer-footer.php');
  include('customizer/options/customizer-typography.php');
  include('customizer/sections-homepage/section-slider.php');
  include('customizer/sections-homepage/section-service.php');
  include('customizer/sections-homepage/section-banner.php');
  include('customizer/sections-homepage/section-testimonial.php');
}
add_action('init','bc_shopcozi_theme_init', 20 );