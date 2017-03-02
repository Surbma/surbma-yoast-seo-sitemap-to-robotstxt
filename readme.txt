=== Surbma - Yoast SEO Sitemap to robots.txt ===
Contributors: Surbma
Donate link: http://surbma.com/
Tags: yoast, yoast seo, wordpress seo, sitemap, XML sitemap, robots.txt, multisite
Requires at least: 3.0
Tested up to: 4.7
Stable tag: 1.0.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds Yoast SEO generated XML Sitemap to the virtual robots.txt file.

== Description ==

A missing feature from Yoast SEO plugin. This is a very important SEO step to add your sitemap to the robots.txt, as a lot of bots (Google also) automatically search for sitemaps in the robots.txt file.

If you don't have a separate robots.txt file on the server, than WordPress automatically generates a virtual robots.txt file with the necessary directives.

This plugin will add the Yoast SEO plugin's XML Sitemap URL to the virtual robots.txt file, so search bots will find your sitemap and can crawl your site easily.

**Multisite Network installs**

This plugin is also working on Multisite installs, adding the right sitemap for all your subsites. The plugin checks, if Yoast SEO plugin is activated and if the XML Sitemap is enabled on the sites, so it will add the sitemap URL only, if the sitemap exists.

**Do you want to contribute or help improving this plugin?**

You can find it on GitHub: [https://github.com/Surbma/surbma-yoast-seo-sitemap-to-robotstxt](https://github.com/Surbma/surbma-yoast-seo-sitemap-to-robotstxt)

**You can find my other plugins and projects on GitHub:**

[https://github.com/Surbma](https://github.com/Surbma)

Please feel free to contribute, help or recommend any new features for my plugins, themes and other projects.

**Do you want to know more about me?**

Visit my webpage: [Surbma.com](http://surbma.com/)

== Installation ==

1. Upload `surbma-yoast-seo-sitemap-to-robots-txt` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma - Yoast SEO Sitemap to robots.txt plugin through the 'Plugins' menu in WordPress
3. That's it. :)

== Frequently Asked Questions ==

= What is Yoast SEO XML Sitemap? =

It is a specially formatted file, that shows all available and enabled links for your website.

= Why doesn't Yoast SEO plugin add this sitemap to the robots.txt file? =

Good question, but I don't know the answer.

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 1.0.1 =

- Minor typo fixes.

= 1.0.0 =

- Initial release.
- First commit to WordPress repo.
