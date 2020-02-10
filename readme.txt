=== Surbma | Yoast SEO Sitemap to robots.txt ===
Contributors: Surbma, CherryPickStudios
Donate link: https://surbma.com/donate/
Tags: yoast, yoast seo, wordpress seo, sitemap, XML sitemap, robots.txt, multisite
Requires at least: 5.1
Tested up to: 5.3
Stable tag: 2.0
Requires PHP: 5.6.20
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

Visit my webpage: [Surbma.com](https://surbma.com/)

== Installation ==

1. Upload `surbma-yoast-seo-sitemap-to-robots-txt` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma | Yoast SEO Sitemap to robots.txt plugin through the 'Plugins' menu in WordPress
3. That's it. :)

== Frequently Asked Questions ==

= What is Yoast SEO XML Sitemap? =

It is a specially formatted file, that shows all available and enabled links for your website.

= Why doesn't Yoast SEO plugin add this sitemap to the robots.txt file? =

Good question, but I don't know the answer.

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 2.0 =

Release date: 2020-02-10

IMPORTANT! Only update if you already updated Yoast SEO plugin to 13.0 or above! This version will work only with the new version. If you didn't update the Yoast SEO plugin yet, you can keep the 1.1 version of this plugin also, it is working without any problem.

It is always recommended to use the latest versions of plugins, so please do update Yoast SEO to 13.0 or above and do the update also for my plugin!

FIX

- Yoast SEO 13.0 changed the option for XML sitemaps. (Props: @iarovuo)

TWEAK

- Minor changes in title and description.
- Tested with WordPress 5.3 version.
- Updated to use a new way to deploy it to wp.org repo.

= 1.1 =

- Release date: 2019-05-09
- TWEAK - Minor changes in description.
- TWEAK - New shorter version numbering.
- Tested up to WordPress 5.2 version.
- Tested up to Yoast SEO 11.x version.
- Added minimum PHP requirement.

= 1.0.2 =

- Minor typo fixes.
- Tested with WordPress 4.8 version.

= 1.0.1 =

- Minor typo fixes.

= 1.0.0 =

- Initial release.
- First commit to WordPress repo.
