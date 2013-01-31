If you use this plugin on a live site, 100 kittens and 50 dolphins will die a slow, painful death.

This plugin is not ready to be used on a live site. It's just an idea I've been thinking about and threw it together in the last hour.

=== About ===

Admin Themes is an easy way to install "admin themes" for WordPress.  

=== Usage ===

Basically, you create a new directory named "admin-themes" in your "wp-content" directory.  Then, you drop an admin theme folder inside.  This admin theme requires a "style.css" file with the following info at the top:

	/*
	Admin Theme Name: Something
	Colors: #000, #111, #222, #333
	*/

	/* You'll want to put some style rules here. */

You'd have something like this:

yoursite.com/wp-content/admin-themes/something-1/style.css
yoursite.com/wp-content/admin-themes/something-2/style.css
yoursite.com/wp-content/admin-themes/something-3/style.css
yoursite.com/wp-content/admin-themes/something-4/style.css

To choose an admin theme, go your Profile page in the WordPress admin and select an "Admin Color Scheme" (we're using this system for our admin themes).

=== Need inspiration or a "getting started" guide? ===

Open "wp-admin/css/colors-fresh.css" or "wp-admin/css/colors-classic.css" and see how WordPress does it.

=== Want to see this plugin happen? ===

Start designing admin themes.  Report issues and enhancements here on GitHub.  Feedback is welcome.

To be continued...