<?php
/*
Plugin Name: Always Show Toolbar
Plugin URI: https://brianhogg.com/
Description: Make sure the post editing toolbar (the second row) is always shown!
Version: 1.0
Author: Brian Hogg
Author URI: https://brianhogg.com
License: GPLv2 or later
*/

/*  Copyright Brian Hogg <email: brian@brianhogg.com>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'ALWAYS_SHOW_TOOLBAR_VERSION', 1 );

function always_show_toolbar_enqueue_script( $hook ) {
    if ( $hook != 'post-new.php' and $hook != 'post.php' )
        return;

    wp_enqueue_script( 'always-show-toolbar', plugins_url( 'js/always-show-toolbar.js', __FILE__ ), array( 'jquery' ), ALWAYS_SHOW_TOOLBAR_VERSION, true );

    // TODO: Verify if the tooltip is even localized?  In plugin.js it seems to be a raw string.
    wp_localize_script( 'always-show-toolbar', 'always_show_toolbar', array(
            'tooltip' => __( 'Toolbar Toggle' )
        )
    );
}
add_action( 'admin_enqueue_scripts', 'always_show_toolbar_enqueue_script' );