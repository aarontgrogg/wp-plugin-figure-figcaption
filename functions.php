<?php
/* *
 * Plugin Name: Replace WP DIVs with FIGURE and FIGCAPTION
 * Description: Replace WordPress' &lt;div&gt;s with HTML5's &lt;figure&gt; and &lt;figcaption&gt;.
 * Version: 1.2
 * Author: Aaron T. Grogg
 * Author URI: http://aarontgrogg.com/
 * License: GPLv2 or later
 * */

	if (!function_exists( 'atg_figure_caption' )) :
	
		function atg_figure_caption( $output, $attr, $content ) {

			/* We're not worried abut captions in feeds, so just return the output here. */
			if ( is_feed() ) { return $output; }

			/* Set up the default arguments. */
			$defaults = array(
				'id' => '',
				'align' => 'alignnone',
				'width' => '',
				'caption' => ''
			);

			/* Merge the defaults with user input. */
			$attr = shortcode_atts( $defaults, $attr );

			/* If the width is less than 1, return the content wrapped between the [caption] tags. */
			if ( 1 > $attr['width'] ) { return $content; }

			/* Set up the attributes for the caption <figure>. */
			$attributes = ( !empty( $attr['id'] ) ? ' id="' . esc_attr( $attr['id'] ) . '"' : '' );
			$attributes .= ' class="wp-caption ' . esc_attr( $attr['align'] ) . '"';
			//$attributes .= ' style="width: ' . esc_attr( $attr['width'] ) . 'px"';

			/* Open the caption <figure>. */
			$output = '<figure' . $attributes .'>';

			/* Allow shortcodes for the content the caption was created for. */
			$output .= do_shortcode( $content );

			/* Append the caption text. */
			if ($attr['caption'] !== '') :
				$output .= '<figcaption class="wp-caption-text">' . $attr['caption'] . '</figcaption>';
			endif;

			/* Close the caption </figure>. */
			$output .= '</figure>';

			/* Return the formatted, clean figure & figcaption. */
			return $output;
		}
		
	endif;
	add_filter( 'img_caption_shortcode', 'atg_figure_caption', 10, 3 );

?>