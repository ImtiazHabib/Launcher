<?php

function launcher_basic_setup(){
	load_textdomain("launcher");
	add_theme_support("post-thumbnails");
	add_theme_support("title-tags");
}
add_action("after_setup_theme","launcher_basic_setup");
?>