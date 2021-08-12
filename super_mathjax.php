<?php

/*
Plugin Name: Super MathJax
Plugin URI: https://github.com/acarafat/fast_mathjax/
Description: A plugin where you can use simple shortcode to load MathJax-LaTeX both inline and display.

Version: 1.0

Author: @acarafat
Author URI: https://bigganblog.org

License: GPLv3

*/

add_action(‘init’, ‘addMathJaxConfig’);
  function addMathJaxConfig() {
  //some code here
  echo "Config will be added";

}

add_shortcode( 'supermathjax’, ‘addMathJaxConfig’ );
