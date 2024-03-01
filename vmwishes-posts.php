<?php
namespace VMWPosts;

/**
 * Plugin Name: VMWishes PostsByCatetory
 * Plugin URI: https://github.com/mikemayer67/vmwishes-posts
 * Description: Plugin for showing posts by category in admin sidebar
 * Version: 0.0.1
 * Author: Michael A. Mayer
 * Requires PHP: 7.3.0
 * License: GPLv3
 * License URL: https://www.gnu.org/licenses/gpl-3.0.html
 */

if( ! defined('WPINC') ) { die; }

function custom_menu()
{
  global $menu, $submenu;

  $categories = get_categories();

  foreach($categories as $cat) {
    $submenu['edit.php'][] = array(
      $cat->name,
      "edit_posts",
      "edit.php?cat=".$cat->term_id,
    );
  }

}

add_action('admin_menu','VMWPosts\custom_menu');

