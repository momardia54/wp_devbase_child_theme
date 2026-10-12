<?php

// The forms on THIS client site.
//
// Each entry registers a form name with the parent theme's form system,
// which gives it: a Registered Form post in wp-admin, a selectable entry
// on Theme Settings > Form Destinations and > Retention Policy, automatic
// submission logging, CSRF and CAPTCHA gating, and email/webhook dispatch.
// See the parent's inc/forms/AGENT.md and inc/helpers/forms/AGENT.md.
//
// DO NOT add a client's forms to the parent theme's own
// inc/forms/registry/registered-forms.json — the parent ships identically
// to every site, so a form added there would appear on every other
// client's site too. This filter is the correct place.
//
//   'name'  — the STABLE machine key. This is what the form's own code
//             passes to devbase_form_log_submission() and
//             devbase_form_nonce_field(), and what a Form Destinations row
//             stores. Renaming it later orphans existing destination rows
//             and retention policies, so choose it once and leave it.
//   'label' — the initial admin post title only. Safe to reword any time;
//             nothing matches on it.
//
// Removing an entry here deletes its Registered Form post on the next
// 'init' and strips the name from every destination/retention row that
// referenced it — that cleanup is automatic and intended, not a bug.

add_filter( 'devbase/forms/registered_forms', function ( array $forms ) {
	// $forms[] = array( 'name' => 'contact_form', 'label' => 'Contact Form' );
	// $forms[] = array( 'name' => 'quote_request', 'label' => 'Quote Request' );

	return $forms;
} );
