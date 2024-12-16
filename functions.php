<?php

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');

// Charger Bootstrap et les styles personnalisés
function she_safe_enqueue_scripts()
{
  // Bootstrap CSS
  wp_enqueue_style(
    'bootstrap-css',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
  );

  // Styles personnalisés
  wp_enqueue_style(
    'style-css',
    get_template_directory_uri() . '/css/style.css'
  );

  // Bootstrap JS
  wp_enqueue_script(
    'bootstrap-js',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
    [],
    false,
    true
  );

  // JS personnalisé
  wp_enqueue_script(
    'app-js',
    get_template_directory_uri() . '/assets/js/app.js',
    ['bootstrap-js'],
    1,
    true
  );
}

add_action('wp_enqueue_scripts', 'she_safe_enqueue_scripts');

// Enregistrer le menu principal
register_nav_menus([
  'header' => 'Menu principal',
]);

// Ajouter des classes Bootstrap pour les menus WordPress
function she_safe_menu_class($classes)
{
  $classes[] = 'nav-item'; // Ajoute 'nav-item' aux <li>
  return $classes;
}

function she_safe_menu_link_class($attrs)
{
  $attrs['class'] = 'nav-link'; // Ajoute 'nav-link' aux <a>
  return $attrs;
}

add_filter('nav_menu_css_class', 'she_safe_menu_class');
add_filter('nav_menu_link_attributes', 'she_safe_menu_link_class');
