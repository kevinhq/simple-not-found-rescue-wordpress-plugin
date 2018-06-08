<?php
/*
Plugin Name: Simple Not Found Rescue
Plugin URI: https://kevinhq.com/plugin-review/wordpress-plugin-to-redirect-all-404-errors-to-homepage/
Description: Rescue all 404 not found error and redirect it to homepage - Private Plugin
Version: 1.0
Author: kevinhq
Author URI: https://kevinhq.com/
License: GPL2

------------------------------------------------------------------------
Copyright kevinhq.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA

*/


/**
 * Redirect all 404 not found errors to homepage
 */

function snfr_redirect_to_home(){ 
  if ( is_404() ) {
    wp_redirect(home_url());
    exit();
  }
} 
add_action( 'template_redirect', 'snfr_redirect_to_home'); 