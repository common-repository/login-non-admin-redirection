<?php
/*
Plugin Name: Login Non-Admin Redirection
Description: Sets login redirection to front-end site url if 'redirect to' parameter isn't set.
Author: edik
Author URI: http://edik.ch/
Version: 1.0
License: GPLv3

Copyright 2014  Edgard Schmidt  (email : edik@edik.ch)

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

namespace login_non_admin_redirection;

class Main {

function __construct() {
	add_filter( 'login_redirect', array( $this, 'set_url' ), 10, 3 );
}


function set_url( $url, $requested, $user ) {
	if ( !empty( $requested ) ) {
		return $url;
	}
	return site_url();
}

}

new Main;
