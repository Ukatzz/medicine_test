# Staff plugin

Staff records plugin for October CMS.

## Installation

Run the following to install this plugin:

```
php artisan plugin:install Yamobile.Staff
```

To uninstall this plugin:

```
php artisan plugin:remove Yamobile.Staff
```

## Using components

This plugin provides 4 components — `Member`, `Members`, `Categories`, `Settings`. Components have no default markup but they provide convenient work with data. Markup must be added by themes.

### Member

This component allows to display current member. It contains the `slug` property for dynamic url parameter (or static if it needed). Basic usage example:

```Twig
[Member]
slug = "{{ :slug }}"
==
{% set member = Member.member %}

<h1>{{ member.name }}</h1>
<img scr="{{ member.photo | media }}" />
<ul>
    {% for position in member.positions %}
        <li>{{ position.name }}</li>
    {% endfor %}
</ul>
<p>{{ member.description }}</p>
{{ member.content | raw }}
```

### Members

This component allows to display members. It contains the `membersPerPage` property for pagination. Leave this field empty if you want to display all members. Basic usage example:

```Twig
[Members]
membersPerPage = "20"
==
{% set members = Members.members %}

<ul>
    {% for member in members %}
        <li>
            <a href="{{ member.slug }}">{{ member.name }}</a>
        </li>
    {% endfor %}
</ul>
```

### Categories

This component allows to display categories. It contains the `categoriesPerPage` property for pagination. Leave this field empty if you want to display all members. Basic usage example:

```Twig
[Categories]
categoriesPerPage = "20"
==
{% set categories = Categories.categories %}

{% for category in categories %}
    <article>
        <h2>{{ category.name }}</h2>
        <ul>
            {% for member in category.members %}
                <li>{{ member.name }}</li>
            {% endfor %}
        </ul>
    </article>
{% endfor %}
```

### Settings

This component allows to display staff main page settings.

```Twig
[Settings]
==
{% set staff_settings = Settings.settings %}

<h1>{{ staff_settings.heading }}</h1>
<img src="{{ staff_settings.image | media }}" />
<p>{{ staff_settings.description }}</p>
```
