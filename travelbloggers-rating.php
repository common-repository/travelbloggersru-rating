<?php
/*
Plugin Name: Travelbloggers.ru Rating
Plugin URI: http://travelbloggers.ru/rating.html
Description: This plugin adds a counter to your site that is needed for <a href="http://travelbloggers.ru/rating.html">Travelbloggers.ru rating</a>.
Version: 1.0
Author: ajayver
Author URI: http://ajayver.com/
License: GPL2
*/

add_action('wp_footer', 'add_script');

function add_script()
{
	echo 
	'
		<!--Travelbloggers counter-->
		    <script type="text/javascript">
		        <!--
		            new Image().src = "http://travelbloggers.ru/counter/";
		        //-->
		    </script>
		<!--/Travelbloggers counter-->
	';
}

?>