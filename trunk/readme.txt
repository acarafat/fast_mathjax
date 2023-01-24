=== Fast MathJax ===
Contributors: acarafat, rafisics
Tags: mathjax, latex
Donate link: https://www.paypal.com/paypalme/arft
Requires at least: 5.0
Tested up to: 6.1
Requires PHP: 7.0
Stable tag: trunk
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A MathJax plugin to show beautiful LaTex without slowing your website.

== Description ==
Want a MathJax plugin to show beautiful LaTex without slowing your website? Fast Mathjax will do that for you. 

Just add [mathjax] shortcode in the post or page you want to show a LaTex. MathJax will load only in that post or page. 

Since this plugin does not load MathJax javascript across the whole website, other articles (or posts/pages) that do not have [mathjax] shortcode loads quickly. Overall it improves loading speed and page experience for your readers. The plugin won\'t load MathJax JS globally on the WordPress site. 

To load MathJax in a specific post, the shortcode [mathjax] is needed to be placed anywhere in the post. Then, the following LaTeX syntaxes for inline and display math can be used there:

Inline Math:
    - $`E=mc^2$`
    - `\\(E=mc^2\\)`
Display Math:
    - `$$E=mc^2$$`
    - `\\[E=mc^2\\]`

== Installation ==
1. Upload the `myplugin` folder to the `/wp-content/plugins` directory
2. Activate the plugin through the \'Plugins\' menu in WordPress


== Frequently Asked Questions ==
= Can I use this for inline LaTex? =

Yes! Just use `$E=mc^2$` or `\\(E=mc^2\\)` syntax-format.

= Does this loads in all pages? =

No. MathJax JS is not loaded globally in your site, therefore site speed increase.

== Changelog ==
=1.0=
Initial Release
