=== Streamable ===
Contributors: streamable
Tags: video, embed, streamable, streamable.com
Requires at least: 3.5
Tested up to: 4.3.1
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed Streamable videos in your WordPress posts.

== Description ==

Instantly embed any Streamable video into WordPress simply by pasting the video link!

= Streamable =

[Streamable](https://streamable.com) is the simplest way to share a video. Upload your own video or create a clip from hundreds of different video sites. It's 100% free to use, and you don't even have to sign up!

= Using Streamable with Wordpress =

With the Streamable WordPress plugin, embedding Streamable videos is a breeze. Navigate to any video on Streamable, copy the link, and paste it into the post editor. Done!

== Installation ==

1. Go to the Plugins section of the admin.
2. Click the "Add New" button.
3. Click the "Upload Plugin" button.
4. Select the .zip file containing the Streamable plugin.

== Frequently Asked Questions ==

= How do I embed a Streamable video? =

You can embed a video by adding the link to the video on it's own line:

    https://streamable.com/moo

= How do I change the size of the video? =

Include the `width` and `height` parameters in the video link:

    https://streamable.com/moo?width=560&height=315

= How do I enable autoplay? =

Include the `autoplay=1` parameter in the video link:

    https://streamable.com/moo?autoplay=1

= How do I mute a video? =

Include the `muted=1` parameter in the video link:

    https://streamable.com/moo?muted=1

= Can I combine link parameters? =

Yes. The `width`, `height`, `muted`, and `autoplay` parameters can be combined however you like. For example, you can set the video to autoplay and be muted:

    https://streamable.com/moo?autoplay=1&muted=1

= How do I embed with a shortcode? =

You can use the `streamable` shortcode to embed a video. The most basic form is a self-closing shortcode with an `id` attribute:

    [streamable id=moo]

The same parameters for links can be used as shortcode attributes to control the video display.

== Screenshots ==

1. Paste the Streamable video link in the text editor.
2. Paste the Streamable video link in the visual editor.

== Changelog ==

= 1.0 =

* The first release!
