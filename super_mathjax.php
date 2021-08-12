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
	
  echo "<script src=\"https://polyfill.io/v3/polyfill.min.js?features=es6\"></script>\n <script type=\"text/javascript\" id=\"MathJax-script\" async src=\"https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js\"></script>\n <script>\n window.MathJax = {\n tex: {\n inlineMath: [ ['$','$'],['\\(','\\)'] ],\n displayMath: [ ['$$','$$'], ['\\[','\\]'] ],\n processEscapes: true,\n processRefs: true,\n packages: ['base', 'ams'] \n },	\n options: { \n ignoreHtmlClass: 'tex2jax_ignore|editor-rich-text' \n } \n }; \n </script>";
}

add_shortcode('supermathjax','addMathJaxConfig');

