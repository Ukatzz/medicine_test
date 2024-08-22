# Third Party Code

A simple third party code management tool for October CMS.

## Using components

This plugin provides 1 component — `Codes`. The component have no default markup but it provide convenient work with backend data. Markup must be added by themes.

### Codes component

This component allows to display active codes from backend.

The blogPosts component injects the following variables to the page where it's used:

- **target** — codes with what target to display

Basic usage example:

```Twig
[Codes]
target="body"
==
{% set codes = Codes.get %}

{% for code in codes %}
    {{ code.code | raw }}
{% endfor %}
```
