<?php
/*
Plugin Name: Proxy Pro
Plugin Uri: https://github.com/Lerie82/proxypro
Author: Lerie Taylor
Description: A plugin that will help find and post proxies. This is a remake of the original "Proxy Poster" I created, which has been long dead. This plugin scans for proxies, posts proxies to your blog and even validates proxies. Proxy sites help to keep some people anonymous on the internet, some proxies are also used to help gather information about the masses, use proxy servers at your own risk.
Version: 1.0
Author Uri: https://github.com/Lerie82
License Uri: https://opensource.org/licenses/LGPL-3.0
License: LGPL3
*/

add_action("admin_menu", "ppro_create_admin_menu");
function ppro_create_admin_menu()
{
	add_menu_page("Proxy Pro", "Proxy Pro", "manage_options", "ppro", "ppro_main");
	add_submenu_page("ppro", "Proxy Pro - Proxy Search", "Proxy Search", "manage_options", "", "ppro_search",  "proxy_search");
}

function ppro_main()
{
	?>
	<div class="wrap">
		<h1>Proxy Pro</h1>
	</div>
	<?php
}

function ppro_search()
{
	?>
	<div class="wrap">
		<h1>Proxy Search</h1>
	</div>
	<?php
}
?>
