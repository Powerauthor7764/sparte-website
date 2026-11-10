<?php
/**
 * Plugin Name: Spartec Refinements
 * Description: Adds restrained hero motion and scroll polish to the existing Spartec Avada site.
 * Version: 1.0.0
 */
if (!defined('ABSPATH')) exit;
add_action('wp_enqueue_scripts', function () {
 wp_enqueue_style('spartec-refinements', plugin_dir_url(__FILE__) . 'refresh.css', array(), '1.0.0');
 wp_enqueue_script('spartec-refinements', plugin_dir_url(__FILE__) . 'refresh.js', array(), '1.0.0', true);
}, 99);
