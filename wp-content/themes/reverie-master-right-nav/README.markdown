A Brief Introduction
====================
Reverie Framework is an extremely versatile HTML5 WordPress framework based on ZURB's [Foundation](http://foundation.zurb.com), a powerful tool for building prototypes on any kind of devices. Reverie follows [HTML5 Boilerplate](http://html5boilerplate.com) standard and is [hNews microformat](https://www.readability.com/publishers/guidelines) ready. It is optimized for Search Engine while at the same time improves readability.

It is extremely easy to create your blog, CMS, brochure and any other kind of sites with Reverie. You can see some [samples](http://foundation.zurb.com/templates.php) on ZURB and how they make these prototypes. Did I just mention Reverie works well with [bbPress 2.0](http://bbpress.org/) and [BuddyPress 1.5](http://buddypress.org/)?

###Important###
Please note Reverie 4 was built from groud up (almost), as well as Foundation, thus there is no easy way to upgrade from prior version. Read more about the release on [ThemeFortress](http://themefortress.com/reverie-framework-4/). And start with this version, Reverie will only support the latest and second latest WordPress. Why, [Yoast](http://yoast.com/why-we-dont-support-old-wordpress-versions/) explains it well.

###jQuery###
By default, Foundation 4 was packed with jQuery 1.9.1, that's why Reverie loads Google's jQuery library by deregistering WordPress's bundled version. This is a really "bad" practice and it is my duty to point out. If you encounter any jQuery problems with some of your plugins, like Lightbox, the reason may be the jQuery. Note that Google's library is not nonConflit mode, and in this case, you can do a quick fix as below.

Find and remove the following line in `lib/clean.php`

```php
// deregister WordPress built in jQuery
wp_deregister_script('jquery');
// register Google jQuery
wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js", false, null, true);
```

WordPress now will load the bundled version, which is 1.8.3, and you can expect some of the Foundation features will not work, including the top bar. It is a trade-off at this point. However, the problem will be fixed in the upcoming 3.6 version of WordPress, which bundled with 1.9.0. Will update Reverie at that time and check back for future updates.


###Child Theme###
Reverie 4 supports child theme but need a simple step to activate. Check out the [instruction](http://themefortress.com/child-theme-reverie-4/) on the blog.


###Links of Reverie###
* Homepage:      http://themefortress.com/reverie
* Introduction:  http://themefortress.com/reverie-versatile-html5-wordpress-framework/
* ThemeFortress: http://themefortress.com

###Learn more about Foundation###
* Homepage:      http://foundation.zurb.com  
* Documentation: http://foundation.zurb.com/docs  
* GitHub:        https://github.com/zurb/foundation

What are the Features?
======================
Reverie Framework inherits all the cool features from Foundation, and packs with several other interesting features to optimize the experience for WordPress and HTML5. Including customized output for WordPress menus and caption. You can view the features list by scrolling down.

Reverie utilizes Foundation's grid to implement layouts. It is quite easy to start building your own layouts (like this page). You can read Foundation's [documentation](http://foundation.zurb.com/docs/) for how to implement these cool features.

###Basic Features###
* Sass compatible.
* Mobile first.
* HTML5 Boilerplate standard and is hNews microformat ready.
* SEO friendly.
* Basic CSS included, you can also use it as a finished theme.
* Foundation files are separate (for vanilla CSS version), you can update Foundation without any problems. Of course, is is always a good idea to have some backups.

###WordPress Features###
* Clean image HTML output for TinyMCE, only class and alt are returned. Post title will be automatically used for alt.
* Post formats support.
* Pagination for Foundation
* Custom Background Image and Color support
* Custom menu output for ZURB's top bar.
* Custom caption output for HTML5 figure and figcaption tags.
* Custom filter for images, will automatically wrap images with figure tag.
* Two Widget: sidebar and footer.
* Two menus: top navigation menu and footer information menu.
* bbPress.php included, compatible with bbPress 2.
* Several custom page templates are included in the package.

###PressTrends###
Thanks to the generosity of [George](https://twitter.com/prstrends) from [PressTrends](http://www.presstrends.io/), Reverie Framework is using the service to track the usage of the framework and help us to improve it. Of course, you can always disable it by removing it from functions.php.

What about Mobile Devices?
==========================
Positive. With the power of Foundation, Reverie uses media query to adjust for all kinds of devices, including phones, tablets and computers. Reverie is also optimized for iPhone and iPad. Icons and loading images will be display when you save your website as a Home Screen app (example in the above image). Add this page to Home Screen on any iOS devices to see what I mean.

ThemeFortress
=============
Reverie is a WordPress framework created by [ThemeFortress](http://themefortress.com), a WordPress blog that focus on theme design and plugins.

Please note Reverie Framework is under MIT License, the same as Foundation.

