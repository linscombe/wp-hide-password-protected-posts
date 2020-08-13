# wp-hide-password-protected-posts
This is a WordPress plugin which hides password protected posts from the standard WordPress loop.
Simply set a password on a post in the WordPress Dashboard and publish it like you normally would.
The post will not be visible in the normal feed but visitors with the exact permalink and the post's password can see it.

### Why use this plugin?
Normally WordPress will display password protected posts in your blog feed which isn't a great user experience for visitors.
The alternative is to set a post's visibility to "Private" and share a permalink. In this case, WordPress would require a visitor to login with credentials and a proper role already set on the site.

This plugin provides another option.
The solution: simply hide password protected pages unless the exact url is known.
Everything else will function as it did before.
Visitors who know the permalink will be required to enter the password and WordPress Authors, Editors and Administrators will still have visibility of theirs posts in wp-admin.

### Install

To get started, download the zip file of this repo and upload on the Plugins page of your WordPress site.

https://github.com/linscombe/wp-hide-password-protected-posts/archive/master.zip

Disclaimer: This plugin (and password protected posts) is not a replacement for strong security for your content. Use at your own risk. Plugin tested and developed using WordPress version 5.4.2.
