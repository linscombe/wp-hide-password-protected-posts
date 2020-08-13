<?php
/**
 * This plugin will hide password protected posts from the WordPress loop
 *
 * @package Hide Password Protected Posts
 * @author Jason Linscombe
 * @license GPL-3.0+
 * @link https://github.com/linscombe/wp-hide-password-protected-posts
 * @copyright 2020 Jason Linscombe All rights reserved.
 *
 *            @wordpress-plugin
 *            Plugin Name: Hide Password Protected Posts
 *            Plugin URI: https://github.com/linscombe/wp-hide-password-protected-posts
 *            Description: This plugin will hide password protected posts from the WordPress loop
 *            Version: 1.0
 *            Author: Jason Linscombe
 *            Author URI: https://github.com/linscombe
 *            Text Domain: wp-hide-password-protected-posts
 *            Contributors: Jason Linscombe
 *            License: GPL-3.0+
 *            License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */
 
function posts_where_password_filter( $wheresql = '' ) {
    if(!is_single() && !is_admin()) {
        $wheresql .= " AND post_password = ''";
    }
    return $wheresql;
}
add_filter( 'posts_where', 'posts_where_password_filter' );

?>
