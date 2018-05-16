<?php
  /*
    Plugin Name: Free Landing Pages Builder by Wishpond
    Plugin URI:  https://wordpress.org/plugins/landing-pages-builder/
    Description: Create amazing landing pages from your wordpress site and host them anywhere. Monitor analytics, collect emails, improve conversion rates and more.
    Version:     2.0.2
    Author:      Wishpond
    Author URI:  https://www.wishpond.com/landing-pages/
    License:     GPL2
    License URI: https://www.gnu.org/licenses/gpl-2.0.html
    Text Domain: landing-pages-builder

    Website Forms is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    any later version.

    Website Forms is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Website Forms. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
  */

  $WP_PLUGIN_FILES = array(
    'constants.php',
    'class-wishpond-campaign.php',
    'class-wishpond-plugin.php',
    'class-wishpond-shortcode.php',
    'class-wishpond-utilities.php'
  );

  foreach($WP_PLUGIN_FILES as $file) {
    include_once(plugin_dir_path(__FILE__) . $file);
  }

  new WishpondPlugin(
    array(
      'version' => '2.0.2',
      'name' => 'landing_pages_builder',
      'slug' => 'landing-pages-builder',
      'menu' => array(
        'main'      => 'Landing Pages',
        'dashboard' => 'Dashboard',
        'editor'    => 'New Landing Page',
        'settings'  => 'Settings',
      )
    )
  );
?>
