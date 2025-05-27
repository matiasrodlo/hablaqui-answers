<?php get_header();
	if (has_wpqa() && wpqa_plugin_version >= "5.9.8") {
		include wpqa_get_template("content-none.php","theme-parts/");
	}
get_footer();?>