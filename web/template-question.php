<?php /* Template Name: Questions */
get_header();
	if (has_wpqa() && wpqa_plugin_version >= "5.9.8") {
		include wpqa_get_template("logged-only.php","theme-parts/");
	}
	$page_id = $post_id_main = $post->ID;
	$wp_page_template = discy_post_meta("_wp_page_template",$post_id_main,false);
	$its_post_type    = wpqa_questions_type;
	include locate_template("theme-parts/loop.php");
get_footer();?>