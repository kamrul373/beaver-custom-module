<?php
/**
 * Plugin Name: post_word_counter
 * Plugin URI: http://www.mywebsite.com
 * Description: post word counter
 * Version: 1.0
 * Author: Kamrul Hasan
 * Author URI: http://www.kamrulhasan.dev
 * Text Domain : word-counter
 * Domain Path : /languages/
 */
function word_counter_load_textdomain () {
	load_plugin_textdomain( "word-counter", false, dirname(__FILE__)."/languages" );
}
add_action("plugins_loaded",'word_counter_load_textdomain');

function word_counter_post_word_counter ($content) {
	$strip_content = strip_tags($content);
	$word_count = str_word_count($strip_content);
	$label = __("Total number of words", "word-counter");
	$label = apply_filters( "wordcounter_label", $label );
	$tag = apply_filters( "wordcounter_tag", 'h2' );
	$result = sprintf("<%s>%s %s</%s>",$tag,$label, $word_count, $tag);
	return $result;
}
 add_filter("the_content",'word_counter_post_word_counter');

