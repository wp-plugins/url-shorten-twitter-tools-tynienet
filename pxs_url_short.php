<?php
/*
Plugin Name: URL Shorten (Twitter Tools > Tynie.net)
Plugin URI: http://oneshortlife.com
Description: Works with Twitter Tools to shorten the URL using Tynie.net
Version: 0.3
Author: Shane Marriott
Author URI: http://oneshortlife.com
*/

function pxs_short_url($long_url) { 
$pxs_url = "http://tynie.net/maketynie.php?api=".$long_url;
$pxs_tynie= fopen($pxs_url,"r");
$pxs_tynie_u = fgets($pxs_tynie);
fclose($pxs_tynie); 
return $pxs_tynie_u;
}
add_filter('tweet_blog_post_url', 'pxs_short_url');


?>