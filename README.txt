=== Disable More Link ===
Contributors: slushman
Donate link: https://www.slushman.com/
Tags: excerpt
Requires at least: 0.71
Tested up to: 4.9.6
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Removes all content from the "more link" added at the end of excerpts.



== Description ==

Removes all content from the "more link" added at the end of excerpts.

This is done so when fetching and displaying content via the REST API, links can be
routed properly, like when using React in a headless configuration.



== Installation ==

1. Download the zip file from Github using the "clone or download" button.
2. Log into your WordPress site and go to Plugins
3. Click the "Add New" button at the top
4. Click the "Upload Plugin" button at the top.
5. Click the "Choose File" button and choose the file from your computer.
6. Activate the plugin once installed



== Frequently Asked Questions ==

= Why would I do this again? =

If you are creating a headless website using WordPress as the backend and something like
React on the frontend, the "more links" at the end of excerpts link to the live site 
instead of within your development site. While that's not a problem once the site is published,
the routing should be completely handled within React. To avoid this, the more link is 
disabled altogether and recreated for each post so the links point to something within React.



== Changelog ==

= 1.0.1 =
* Fix weird invalid function error for hook callback.

= 1.0.0 =
* Plugin published.



== Upgrade Notice ==

= 1.0.1 =
* Fixes weird invalid function error for hook callback.

= 1.0.0 =
* Plugin published.