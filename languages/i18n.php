<?php

// Loads this CHILD theme's own translations.
//
// load_child_theme_textdomain() rather than load_theme_textdomain(): the
// parent calls the latter for its own 'devbase_parent_theme' domain, and
// that call covers only the parent. A string wrapped in
// __( '...', 'devbase_child_theme' ) in this theme resolves against
// this folder, and needs this.
//
// Two rules inherited from the parent's languages/AGENT.md, both of which
// have caused real silent failures there:
//
//   1. A .mo file bundled inside a theme directory must be named just
//      {locale}.mo — e.g. fr_CA.mo. NOT {domain}-{locale}.mo, which is the
//      convention for centrally-managed packs in wp-content/languages/.
//      Getting it wrong doesn't error; every string just quietly stays in
//      English.
//
//   2. Editing a .po does nothing on its own — recompile the .mo
//      (msgfmt -o fr_CA.mo fr_CA.po, or let Poedit/Loco do it on save).

add_action( 'after_setup_theme', function () {
	load_child_theme_textdomain( 'devbase_child_theme', get_stylesheet_directory() . '/languages' );
} );
