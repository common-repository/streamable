<?php
/**
 * Streamable Wordpress plugin
 *
 * @link        https://streamable.com
 * @since       1.0
 *
 * @wordpress-plugin
 * Plugin Name: Streamable
 * Plugin URI:  https://streamable.com
 * Description: Embed Streamable videos in your posts.
 * Version:     1.0
 * Author:      Streamable
 * Author URI:  https://streamable.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Return the embed HTML of a Streamable video.
 * @since 1.0
 */
function streamable_render_embed( $atts ) {
    $atts = shortcode_atts(
        array(
            'id'       => '',
            'width'    => '',
            'height'   => '',
            'autoplay' => '',
            'muted'    => ''
        ), $atts );

    $embed_url = add_query_arg( $atts, 'https://streamable.com/e/' . esc_attr( $atts['id'] ) );

    if ( $atts['width'] && $atts['height'] ) {
        $embed = '<iframe class="streamable-embed" src="' . $embed_url . '" width="' . esc_attr( $atts['width'] ) . '" height="' . esc_attr( $atts['height'] ) . '" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>';
    } else {
        $embed = '<div class="streamable-embed-container" style="width: 100%; height: 0px; position: relative; padding-bottom: 56.338%;"><iframe class="streamable-embed" src="' . $embed_url . '" frameborder="0" scrolling="no" style="width: 100%; height: 100%; position: absolute;" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe></div>';
    }

    return $embed;
}

/**
 * Register the Streamable embed handler.
 * @since 1.0
 */
function streamable_embed_handler( $matches, $attr, $url, $rawattr ) {
    $params = array();
    parse_str( parse_url( $url, PHP_URL_QUERY ), $params );
    $embed = streamable_render_embed( array_merge ( array( 'id' => $matches[1] ), $params ) );
    return apply_filters( 'streamable_embed', $embed, $matches, $attr, $url, $rawattr );
}

function streamable_embed() {
    wp_embed_register_handler(
        'streamable',
        '#https?://streamable.com/([^?]*).*#i',
        'streamable_embed_handler'
    );
}

add_action( 'init', 'streamable_embed' );

/**
 * Register Streamable shortcode.
 * @since 1.0
 */
function streamable_shortcode( $atts ) {
    $embed = streamable_render_embed( $atts );

    return $embed;
}

add_shortcode( 'streamable', 'streamable_shortcode' );
