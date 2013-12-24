=== Plugin Name ===
Contributors: aarontgrogg
Tags: multisite, admin, network, links
Requires at least: 3.1
Tested up to: 3.8
Stable tag: 1.0
License: GPLv2 or later


figure-figcaption


== Description ==

Another WordPress plug-in that started with me finding something to be annoying,
finding a way to fix it, then figuring if it made my life a little better,
someone else might appreciate it too...

Currently, when you insert media in WordPress and adda caption, WP creates a few DIVs and Ps 
to display that content in your pages.  HTML5 says that could (and should) be done another way.
So this plugin fixes that.

Please note that I borrowed quite extensively from the following article:

http://justintadlock.com/archives/2011/07/01/captions-in-wordpress

In fact, all I really did was change some mark-up in the code, and wrap it in a `function_exists`.

I also recommend adding something like this to your site's CSS:

.wp-caption.aligncenter img {
	margin: 0 auto;
}
.wp-caption.aligncenter figcaption {
	text-align: center;
}

Please let me know if you have any questions/suggestions/thoughts,

Atg

http://aarontgrogg.com/

aarontgrogg@gmail.com


== Installation ==

1. Download the ZIP
2. Unzip the ZIP
3. Copy/paste the unzipped files into your WP plug-in directory (`/wp-content/plugins/`)
4. From within WP's Plugin Admin panel, Activate the plug-in
5. Enjoy the fewer clicks this simple plugin brings to your life...


== Frequently Asked Questions ==

= None so far, what do you have?  =
* ...


== Changelog ==

= 1.0 =
2013-12-24:
- Well, this is the first version, so... here it is!
