# Fast MathJax
A MathJax plugin to show beautiful LaTeX without slowing your website.

# Description
Want a MathJax plugin to show beautiful LaTeX without slowing your website? Fast Mathjax will do that for you. 

Just add [mathjax] shortcode in the post or page you want to show a LaTex. MathJax will load only in that post or page. 

Since this plugin does not load MathJax javascript across the whole website, other articles (or posts/pages) that do not have [mathjax] shortcode loads quickly. Overall it improves loading speed and page experience for your readers. The plugin won\'t load MathJax JS globally on the WordPress site. 


- Inline Math: 
  - `$E=mc^2$` 
  - `\(E=mc^2\)`   
- Display Math: 
  - `$$E=mc^2$$` 
  - `\[E=mc^2\]`

# Example
**Mass in Special Relativity: Is Relativistic Mass Real?** by *Mubtasim Fuad* published in [SciTechFrontiers.com](https://scitechfrontiers.com/relativistic-mass/)

# Installation
1. Upload the `myplugin` folder to the `/wp-content/plugins` directory
2. Activate the plugin through the \'Plugins\' menu in WordPress


# Frequently Asked Questions 
- Can I use this for inline LaTex?
'''
Yes! Just use `$E=mc^2$` or `\\(E=mc^2\\)` syntax-format.
'''

- Does this loads in all pages?
'''
No. MathJax JS is not loaded globally in your site, therefore site speed increase.
'''

# Changelog
- 1.1 Update the code to implement modern JavaScript practices.
- 1.0 Initial Release
