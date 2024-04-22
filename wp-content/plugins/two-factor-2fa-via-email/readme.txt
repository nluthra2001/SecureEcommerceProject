=== Two Factor (2FA) Authentication via Email ===
Contributors: SS88_UK
Donate link: https://paypal.me/SS88/
Tags: 2fa, two factor, 2fa authentication, two-factor authentication, authentication, 2fa email
Requires at least: 4.1
Tested up to: 6.5
Stable tag: 1.6.4
Requires PHP: 5.6
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A lightweight plugin to allow the use of two-factor authentication (2FA) through email. One-click login with this Two-Factor (2FA) Authentication plugin for WordPress.

== Description ==

A simple, lightweight, yet effective plugin to enable two factor (2FA) authentication via email. You can enable this on an individual user basis, for all administrators, editors, or all accounts with one line of code in your `wp-config.php` file.

https://www.youtube.com/watch?v=GgOAcwK_4m4

WordPress is the world’s most popular content management system (CMS), with over 40% of all websites running on it. As such, it has become a prime target for hackers looking to exploit vulnerabilities to gain unauthorized access to websites. One of the best ways to enhance the security of a WordPress site is to enable two-factor authentication (2FA) for administrators.

* Simply enable the plugin then edit a user account to enable 2FA for that individual user.
* Please make sure your WordPress website sends and receives emails correctly. The best way is to use a SMTP plugin.

== Installation ==

Use the automatic installer via WordPress or download the plugin and:

1. Upload the plugin files to the `/wp-content/plugins/two-factor-2fa-via-email` directory.
1. Activate the plugin through the 'Plugins' screen in WordPress.
1. Navigate to your profile or any other users and enable to toggle 2FA to enable per account.

== Frequently Asked Questions ==

= Help! I’m locked out! =

If you are not receiving the email to login then in order to regain access to your account, you’ll have to disable the plugin. The only way to do this is by renaming the plugin folder from `two-factor-2fa-via-email` to `two-factor-2fa-via-email.backup` or equivalent.

= 15 minutes is too long/short for me. Can this be changed? =

Yes! As of version 1.5.2 you can now add a defined constant to your `wp-config.php` file;

`define('SS88_2FAVE_LINK_EXPIRES_MINUTES', 10);`

Where the number 10 is, change this to whatever value (in minutes) you prefer.

= Can I enable this for every Administrator? =

Yes! As of version 1.6 you can now add a defined constant to your `wp-config.php` file;

`define('SS88_2FAVE_ENABLE_ADMINS', true);`

= Can I enable this for every Editor? =

Yes! As of version 1.6 you can now add a defined constant to your `wp-config.php` file;

`define('SS88_2FAVE_ENABLE_EDITORS', true);`

= Can I enable this for every account? =

Yes! As of version 1.6 you can now add a defined constant to your `wp-config.php` file;

`define('SS88_2FAVE_ENABLE_ALL', true);`

= Can I change who receives the plugin deactivated email? =

Yes! As of version 1.6 you can now add a defined constant to your `wp-config.php` file;

`define('SS88_2FAVE_NOTIFICATION_EMAIL', 'john@doe.com');`

Change `john@doe.com` to your preferred email.

== Screenshots ==

1. Under each user account settings, you can click the toggle to turn 2FA on/off.
2. When 2FA is enabled, the user will see this screen after a log-in.
3. An example of an error screen.
4. An email sent to the site admin when the 2FA plugin is disabled.

== Changelog ==

= 1.6.4 =
* Integration with the default Remember Me checkbox from WordPress

= 1.6.3 =
* Integration with Ultimate Member

= 1.6.2 =
* Removed accidental code forcing everyone who logged in to receive a 2FA screen

= 1.6.1 =
* Deactivation fatal error fix

= 1.6 =
* New Features:
* Wording changed when SMTP is not enabled.
* The plugin now sends an email to the site admin if the plugin is deactivated. The email can be overridden by defining the constant `SS88_2FAVE_NOTIFICATION_EMAIL` in `wp-config.php` i.e. `define('SS88_2FAVE_NOTIFICATION_EMAIL', 'john@doe.com');`
* Three new constants added which can be added in wp-config.php to override individual user settings to force 2FA to be enabled. They are: `SS88_2FAVE_ENABLE_ALL` (to enable for every single account), `SS88_2FAVE_ENABLE_ADMINS` (to enable only for Administrators), and `SS88_2FAVE_ENABLE_EDITORS` (to enable for Editors) i.e. `define('SS88_2FAVE_ENABLE_ALL', true);`.

= 1.5.2 =
* Replaced sanitize_url in favor of esc_url
* Added a new constant `SS88_2FAVE_LINK_EXPIRES_MINUTES` so that users can define their own link expiry time in minutes
* Added a JavaScript countdown timer to the login page

= 1.5.1 =
* Email content fix

= 1.5 =
* 'Fancy' emails
* Moving files into appropriate folders
* Re-order of security features when logging in

= 1.4 =
* Added PHP_INT_MAX to wp_login hook
* Added support for advanced developers to use a custom 2FA template. You can now override the 2FA page by copying `assets/2fa-page.php` to your theme's directory. Upload this file to `wp-content/themes/xxx/ss88-2fa-page.php` to customize it!

= 1.3 =
* Fixed 'dismiss' link on notification
* Added support for SMTP Mailer check

= 1.2 =
* Added support link to plugin page

= 1.1 =
* Fix openssl key
* Fix echo'ing

= 1.0 =
* Initial release.

== Upgrade Notice ==
