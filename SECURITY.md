# Security Policy

## Reporting a vulnerability

**Please do not open a public issue for a security problem.**

Report it privately through GitHub's
[security advisory](../../security/advisories/new) form on this
repository.

Before reporting, consider where the issue actually lives. This is a
starter theme — a scaffold of commented stubs with almost no behaviour of
its own. Most of what runs on a site built from it comes from the
[Dev Base Parent Theme](../wp_devbase_parent_theme), which has its own security
policy. Issues in form handling, CAPTCHA, SMTP, schema output, MCP access
or the update system belong there.

What belongs here:

- a flaw in this theme's own files
- a stub that demonstrates an insecure pattern, since copied code spreads
- documentation that leads someone to build something unsafe

Please include the theme version (`style.css`), the WordPress and PHP
versions, and steps to reproduce.

## Supported versions

Each client site runs its own copy of this starter, so there is no single
deployed version to patch. A fix here lands in the starter; existing
client themes are updated individually through their own release tracks.

## Things worth knowing

### This theme has final say over the parent

A child theme's `devbase/ase/enforced` filter overrides the base theme's
admin-hardening defaults unconditionally. That is the point — but it means
a child theme can switch off protections the parent enables by default,
including disabling the file editor and limiting login attempts.

Treat changes to `inc/overrides/ase.php` as security-relevant, and prefer
adding to the parent's defaults over weakening them here.

### Load order makes failures silent

WordPress loads this theme before the parent, so no parent function exists
while `functions.php` runs. Guarding a call with `function_exists()` makes
it fail silently rather than loudly — and if the guarded call was a
security check, it is now simply absent with no error.

Register filters at the top level, and defer anything that needs to call a
parent function to `after_setup_theme` or later.

### Registering a post type has consequences

A post type registered here with `public => true` and
`show_in_rest => true` becomes eligible for MCP exposure. It is not
exposed until an administrator enables it, but it does become something
that *can* be enabled. Post types holding sensitive data should not be
public, and should not be REST-exposed.

### Templates control what renders

Omitting `wp_head()`, `wp_body_open()` or `wp_footer()` from a template
silently disables anything the base theme outputs through them. Keep all
four calls in any layout.

## Out of scope

- Vulnerabilities in the base theme — report those on its repository.
- The commented example code in `inc/`, which does not execute.
