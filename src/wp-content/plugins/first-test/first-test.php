<?php
/**
 * Plugin Name: My First Plugin
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://www.mywebsite.com
 */
include 'class-first-test-admin.php';

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
  $extra = get_option('myplugin_option_name');
  return $content .= '<p>' . $extra . '</p>';
}
