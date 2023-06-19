<?php
// Here's a code to run only for posts
// Also, to enqueue a custom stylesheet on a child theme
// It can goes under a child's theme function.php or any other generic wordpress file or a code block

if(is_singular('post')) {
		wp_enqueue_style ( 'single-post-custom', get_stylesheet_directory_uri() . '/css/single-post-custom.css', false, '1.0', 'all');
	}

