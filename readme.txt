=== Login Non-Admin Redirection ===
Contributors: plocha
Tags: login, redirect, front-end, frontend, redirect_to, url, site_url, site url, admin, back-end, backend, wp-admin
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Sets login redirection to front-end site url if 'redirect to' parameter isn't set.

== Description ==

By default WordPress redirects users to admin back-end if no 'redirect_to' parameter is set. The plugin replaces that default redirection url by the [front-end site url](http://codex.wordpress.org/Function_Reference/site_url). Logins with 'redirect_to' parameter are still redirected to the given url.

== Changelog ==

= 1.0 =
* site url redirection added

== Upgrade Notice ==

= 1.0 =
First release
