<?php /* Template Name: Blog */
get_header();
	if (has_wpqa() && wpqa_plugin_version >= "5.9.8") {
		include wpqa_get_template("logged-only.php","theme-parts/");
	}
	$page_id = $post_id_main = $post->ID;
	$wp_page_template = discy_post_meta("_wp_page_template",$post_id_main,false);
	do_action("discy_before_blog_action");
	include locate_template("theme-parts/loop.php");
	do_action("discy_after_blog_action");
get_footer();?>