<?php

// Which wp-admin menu items this client site hides.
//
// The parent theme hides Posts and Comments by default, because most
// client sites don't use the built-in blog. That's wrong for a site that
// genuinely runs one, so it's filterable rather than fixed — see the
// parent's inc/hide-admin-menu-items.php.

add_filter( 'devbase/admin_menu/hidden_items', function ( array $items ) {
	// This client DOES run a blog — give Posts and Comments back:
	//
	// return array_diff( $items, array( 'edit.php', 'edit-comments.php' ) );

	// Or hide something else as well:
	//
	// $items[] = 'tools.php';

	return $items;
} );
