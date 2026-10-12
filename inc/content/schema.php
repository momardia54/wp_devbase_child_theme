<?php

// Extra schema.org types for THIS client site.
//
// The parent theme ships three types it considers universal — Organization,
// Website and Breadcrumb — and deliberately stops there rather than
// becoming a general-purpose schema mapping engine. Anything
// industry-specific (Product, Recipe, FAQPage, Review, LocalBusiness per
// branch) is a per-project addition, which means here.
//
// A type contributes a TAB to the existing Schema Markup page by filtering
// 'devbase/schema/tabs'; the parent assembles every contribution into one
// field group on acf/init priority 20. Do NOT call
// acf_add_local_field_group() yourself — it would render as a separate
// stacked box instead of a tab.
//
// This add_filter() call MUST stay at the top level (not wrapped in an
// acf/init callback) so it is registered before the parent's assembler
// runs. That's the same rule the parent's own types follow — see its
// inc/theme-settings/schema/AGENT.md.
//
// Then print the JSON-LD from a wp_head callback, one <script> tag per
// type so a broken or disabled type can't affect another. Read values with
// get_field( 'x', 'option' ) — every sub-page under Theme Settings shares
// the single 'option' store.
//
// If the output depends on conditional tags (is_singular(), is_front_page()),
// read the testing note in the parent's
// inc/theme-settings/schema/breadcrumb/AGENT.md first: a bare
// do_action('wp_head') from the CLI does not make those reflect a real URL.

add_filter( 'devbase/schema/tabs', function ( array $tabs ) {
	// $tabs[] = array(
	//     'label'  => __( 'FAQ', 'devbase_child_theme' ),
	//     'fields' => array(
	//         array(
	//             'key'           => 'field_client_schema_faq_enabled',
	//             'label'         => __( 'Enable FAQ Schema', 'devbase_child_theme' ),
	//             'name'          => 'schema_faq_enabled',
	//             'type'          => 'true_false',
	//             'ui'            => 1,
	//             'default_value' => 0,
	//         ),
	//     ),
	// );

	return $tabs;
} );
