<?php
/**
 * Plugin Name: Sticky CTA Shortcode
 * Description: Adds [sticky_cta img="URL" link="URL" width="320"] to render a sticky image/CTA that remains visible on scroll.
 * Version: 1.0.0
 * Author: Muhammad Ahmed
 * License: GPL-2.0-or-later
 * Text Domain: wp-sticky-cta
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action('wp_enqueue_scripts', function () {
    wp_register_style('wp-sticky-cta', plugin_dir_url(__FILE__).'assets/cta.css', [], '1.0.0');
    wp_register_script('wp-sticky-cta', plugin_dir_url(__FILE__).'assets/cta.js', [], '1.0.0', true);
});

add_shortcode('sticky_cta', function ($atts) {
    $a = shortcode_atts([
        'img'   => '',
        'link'  => '#',
        'width' => '320',
        'alt'   => 'CTA'
    ], $atts, 'sticky_cta');

    if (empty($a['img'])) return '';

    wp_enqueue_style('wp-sticky-cta');
    wp_enqueue_script('wp-sticky-cta');

    $w    = (int) $a['width'];
    $img  = esc_url($a['img']);
    $link = esc_url($a['link']);
    $alt  = esc_attr($a['alt']);

    ob_start(); ?>
    <div class="at-sticky-cta" style="max-width:<?php echo $w; ?>px">
        <a href="<?php echo $link; ?>">
            <img src="<?php echo $img; ?>" alt="<?php echo $alt; ?>" loading="lazy" decoding="async">
        </a>
    </div>
    <?php
    return ob_get_clean();
});
