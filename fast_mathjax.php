<?php

/*
Plugin Name: Fast MathJax
Plugin URI: https://github.com/acarafat/fast_mathjax/
Description: A plugin to use simple shortcode to load MathJax in WordPress post.
Version: 1.0
Author: Arafat Rahman
Author URI: https://bigganblog.org
Author: Mubtasim Fuad
Author URI: https://bigganblog.org
License: GPLv3
*/

add_action(‘init’, ‘addMathJaxConfig’);

function addMathJaxConfig() {
  return "
  <script src=\"https://polyfill.io/v3/polyfill.min.js?features=es6\"></script> \n 
  <script type=\"text/javascript\" id=\"MathJax-script\" async src=\"https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js\"></script> \n 
  <script> \n 
	  window.MathJax = { \n 
		  tex: { \n 
			  inlineMath: [ ['$','$'],['\\\(','\\\)'] ],\n 
			  displayMath: [ ['$$','$$'], ['\\\[','\\\]'] ],\n 
			  processEscapes: true,\n 
			  processRefs: true,\n 
			  packages: ['base', 'ams'] \n 
			}, \n 
	          options: { \n
		  	  	ignoreHtmlClass: 'tex2jax_ignore|editor-rich-text' \n 
			  } \n 
		  }; \n 
  </script>";
}

add_shortcode('mathjax','addMathJaxConfig');

?>
