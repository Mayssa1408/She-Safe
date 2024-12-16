<?php
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');
function add_bootstrap()
{
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'add_bootstrap');

/*Add references to Bootstrap*/
function styles_scripts()
{
  wp_enqueue_style(
    'bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
  );
  wp_enqueue_style(
    'style',
    get_template_directory_uri() . '/css/style.css'
  );

  wp_enqueue_script(
    'bootstrap-bundle',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
    false,
    1,
    true
  );
}

/*Add menu*/

add_theme_support('menus'); // Activer le support des menus
add_theme_support('title-tag'); // Support du titre de la page
add_theme_support('post-thumbnails'); // Support des images des articles

register_nav_menu('header', 'Menu principal'); // Emplacement du menu principal


wp_enqueue_script(
  'app-js',
  get_template_directory_uri() . '/assets/js/app.js',
  ['bootstrap-bundle'],
  1,
  true
);


add_action('wp_enqueue_scripts', 'styles_scripts');

register_nav_menus([
  'header' => 'Menu principal',
]);

function montheme_menu_class($classes)
{
  $classes[] = 'nav-item'; // Ajoute la classe Bootstrap aux <li>
  return $classes;
}

function montheme_menu_link_class($attrs)
{
  $attrs['class'] = 'nav-link'; // Ajoute la classe Bootstrap aux <a>
  return $attrs;
}

add_filter('nav_menu_css_class', 'montheme_menu_class'); // Filtre pour les classes <li>
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class'); // Filtre pour les classes <a>
