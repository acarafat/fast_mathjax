<?php

/*
Plugin Name: Fast MathJax
Plugin URI: https://github.com/acarafat/fast_mathjax/
Description: Show beautiful MathJax LaTex in your article without slowing the whole site down.
Version: 1.0.0
Author: Arafat Rahman, Mubtasim Fuad
Author URI: https://arftrhmn.net/, https://mubtasimfuad.com/
License: GPLv3
*/

add_action(‘init’, ‘addMathJaxConfig’);

function addMathJaxConfig() {
	wp_register_script('polyfill', 'https://polyfill.io/v3/polyfill.min.js?features=es6', null, null, true);
	
	wp_enqueue_script('polyfill');
	wp_enqueue_script('tex-mml-chtml', plugins_url( '/public/tex-mml-chtml.js', __FILE__ ));
	wp_enqueue_script('math-jax-init', plugins_url( '/public/math-jax-init.js', __FILE__ ));
}


add_shortcode('mathjax','addMathJaxConfig');

?>
