<?php

// This client site's own post types and taxonomies.
//
// The parent theme registers only registered_form and form_data (its own
// submission-log plumbing). Everything a client actually publishes —
// services, projects, team members, case studies — belongs here.
//
// Registered on 'init' at the default priority 10, which matters for two
// parent-theme features that pick CPTs up automatically:
//
//   • inc/archive/ adds an "Archive" options sub-page per post type with
//     has_archive => true, and injects archives into the internal link
//     picker. It deliberately runs on 'wp_loaded' (not 'acf/init', which
//     fires inside init at priority 5) precisely so CPTs registered here
//     at priority 10 are already known. Register later than 'init' and you
//     lose the archive options page silently.
//
//   • The MCP content abilities (inc/abilities/) expose any post type with
//     show_in_rest => true AND public => true — but only once it's been
//     explicitly ticked on under Theme Settings > Miscellaneous > MCP
//     Access. Nothing is AI-readable or AI-writable by default.

add_action( 'init', function () {
	// register_post_type( 'service', array(
	//     'labels'        => array(
	//         'name'          => __( 'Services', 'devbase_child_theme' ),
	//         'singular_name' => __( 'Service', 'devbase_child_theme' ),
	//     ),
	//     'public'        => true,
	//     'has_archive'   => true,
	//     'show_in_rest'  => true,
	//     'menu_icon'     => 'dashicons-hammer',
	//     'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	//     'rewrite'       => array( 'slug' => 'services' ),
	// ) );
} );
