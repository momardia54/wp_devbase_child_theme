# Roadmap

What this starter might grow, and what it deliberately won't. It is a
scaffold, so the bar for adding anything is high: every file here gets
copied into every client site and then diverges, which means a bad
decision here is one you fix N times.

## Considered

**A base Twig layout.** Right now `views/` has a single template and every
project builds its own structure. If most client sites end up writing the
same `base.twig` with the same blocks, that scaffolding belongs here.
Waiting until the pattern is actually visible rather than guessing it.

**More content stubs.** `inc/content/` covers forms, post types and schema.
Taxonomies and SCF field group registration are plausible additions — both
are things nearly every client site writes, and both have conventions
worth encoding.

**A build step for assets.** Styles are plain CSS enqueued directly, which
is deliberate: no toolchain to maintain, nothing to break in two years. If
projects consistently reach for Sass or a bundler, a minimal and optional
setup could ship here.

**A setup script.** Renaming the theme means editing `style.css`, the text
domain and every `__()` call. A script could do it in one step and remove
a class of half-finished rename.

## Not planned

**Anything the base theme should own.** If a feature would be useful to
every client, it belongs in the parent where one release updates all of
them. The test is simple: would you want to fix this once, or once per
site?

**Opinionated design.** No CSS framework, no component library, no starter
design system. Client design is the one thing genuinely different every
time, and a default would mostly be something to delete.

**Bundled example content.** Demo posts and placeholder images are quick
to add and slow to remove.

## Contributing

This starter is small on purpose. A change here should be something every
client site would want, not something one project needed — anything else
belongs in that project's own theme, or in the base theme.
