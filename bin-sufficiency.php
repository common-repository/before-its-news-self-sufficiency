<?php
/*
Plugin Name: Before It's News&reg;: Self-Sufficiency
Plugin URI: http://www.beforeitsnews.com/widgets
Description: Your widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up to date. The widget loads fast and won't bog down your page-load time.
Version: 0.2
Author: Justin Dawson
Author URI: http://justindawson.com
*/

/* Add the widget widgets_init */
add_action( 'widgets_init', 'bin_load_sufficiency_widgets' );

/* Register the widget */
function bin_load_sufficiency_widgets() {
	register_widget( 'Sufficiency_Widget' );
} /* End registration of the widget */

/* sufficiency_Widget class */
class Sufficiency_Widget extends WP_Widget {
	
	/* Widget setup */
	function Sufficiency_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'sufficiency', 'description' => __( 'You widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up todate. The widget loads fans and won\'t bog down your page-load time.', 'sufficiency' ) );
		
		/* Create the widget */
		$this->WP_Widget( 'sufficiency-wdiget', __( 'Before It\'s News&reg;: Self-sufficiency', 'sufficiency' ), $widget_ops );
	
	} /* End widget setup */
	
	/* Display the widget once activated */
	function widget( $args ) {
		extract( $args );
		
		/* Before widget */
		echo $before_widget;
		
		/* During widget */
		echo '<a class="b4in-widget" href="http://beforeitsnews.com/widget/sufficiency">Before It\'s News | People Powered News</a><script type="text/javascript" src="http://beforeitsnews.com/widgets/js/widget.js"></script>';
		
		/* After widget */
		echo $after_widget;
		
	} /* Stop displaying the widget */
	
} /* End sufficiency_Widget class */

?>