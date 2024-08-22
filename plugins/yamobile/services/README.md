# Services plugin

Services for October CMS.

## Installation

Run the following to install this plugin:

```
php artisan plugin:install Yamobile.Services
```

To uninstall this plugin:

```
php artisan plugin:remove Yamobile.Services
```


## Using components

This plugin provides 5 components — `CategoryComponent`,`CategoriesComponent`,`ServiceComponent`,`ServicesComponent`,`SettingsComponent`.
All Components allow you to output information about categories or services to your template.
Categories, Services and Prices added to the backend panel of your site will be available in the twig template.


### CategoriesComponent

This component allows to output information about categories from the backend to your twig template in any form convenient for you.
This component supports property `items`, it is responsible for the number of output records.

```Twig
[CategoriesComponent]
items = "" or "need count"
==

```

This component provides 1 variable - `categories`. If you need to display all categories, then enter assign to the `items` value the value of `all`, if only a certain number, then enter the required number of records.

```Twig
[CategoriesComponent]
items = ""
==

{% for category in CategoriesComponent.categories %}
    <a href="{{'home' | page}}/{{ category.slug }}">{{ category.name }}</a>
{% endfor %}

```
You can output pagination for your list of categories.

```
[CategoriesComponent]
items = "6"
==

<div>
    {% for category in CategoriesComponent.categories %}
        <div>
            <div>
                <img src="{{ category.image | media }}" alt="{{ category.name }}">
            </div>
                <h4><a href="{{ category.slug }}">{{ category.name }}</a></h3>
                <p>
                    {{category.description}}
                </p>
        </div>
    {% endfor %}
</div>
{{ CategoriesComponent.categories.render | raw }}
```




### CategoryComponent

This component allows you to output information from the backend to your Twig template to display a specific category by url.
This component supports the `slug` property, for part of the url.
To use the component, you must enter `:slug` in the page url when creating the page.
This component provides 2 public variable - `category`, `breadcrumbs`.
`category` - this variable outputs all the information about the category.
`breadcrumbs` - this variable outputs an array with a link and the name of the current category.

```Twig
[CategoryComponent]
slug = "{{ :slug }}"
==

{% set category = CategoryComponent.category %}
{% set breadcrumbs = CategoryComponent.breadcrumbs %}


{% for breadcrumb_item in breadcrumbs %}
   {% if breadcrumb_item.link %}
        <a href="{{ breadcrumb_item.link }}">{{ breadcrumb_item.name }}</a>
   {% else %}
        <span>{{ breadcrumb_item.name }}</span>
   {% endif %}
{% endfor %}

{{ category.meta_title }}
{{ category.desctiption }}
{{ category.keywords }}
{{ category.name }}
{{ category.description }}
{{ category.image }}
{{ category.content }}

```
You will also have access to all the services linked to the category, with all their properties.

```Twig
[CategoryComponent]
slug = "{{ :slug }}"
==
{% set category = CategoryComponent.category %}

<ul>
    {% for service in category.services %}
        <li>
            <a href="{{'home' | page}}/{{ service.slug }}/{{service.slug}}">{{ subservice.name }}</a>
        </li>
    {% endfor %}
</ul>

```

The category has the ability to link price lists to display within the category.
Price lists can be created manually or imported via a csv file.

```Twig
[CategoryComponent]
slug = "{{ :slug }}"
==
{% set category = CategoryComponent.category %}

<ul>
    {% for price in category.prices %}
        <li>
            {{ price.name }} - {{ price.price }}
        </li>
    {% endfor %}
</ul>   
```


### ServicesComponent

This component allows you to output information from the backend to your twig template in any form convenient for you.
This component supports the `items` property, it is responsible for the number of output services.

```Twig
[ServicesComponent]
items = "" or "need count"
==

```

This component provides 1 variable - `services`.
If you need to display all services, then enter assign `items` an empty value,
if only a certain number, then enter the required number of records.

```Twig
[ServicesComponent]
items = ""
==

{% for service in ServicesComponent.services %}
    <a href="{{'home' | page}}/{{ service.slug }}">{{ service.name }}</a>
{% endfor %}

```


You can output pagination for your list of categories.

```
[ServicesComponent]
items = "6"
==

<div>
    {% for service in ServicesComponent.services %}
        <div>
            <div>
                <img src="{{ service.image | media }}" alt="{{ service.name }}">
            </div>
                <h4><a href="{{ service.slug }}">{{ service.name }}</a></h3>
        </div>
    {% endfor %}
</div>
{{ ServicesComponent.services.render | raw }}
```

### ServiceComponent


This component allows you to output information from the backend
to your twig template to display a specific service by the `slug` property.
This component supports the properties - `slug`, `category_slug`.
To use the component, you must enter `:category_slug/:slug` in the page url when creating the page.
This component provides 2 public variable - `service`, `breadcrumbs`.
`service` - this variable outputs all the information about the service.
`breadcrumbs` - this variable outputs an array with a link and the name of the current category.


```Twig
[ServiceComponent]
category_slug = "{{ :category_slug }}"
slug = "{{ :slug }}"
==

{% set service = ServiceComponent.service %}
{% set breadcrumbs = ServiceComponent.breadcrumbs %}


{% for breadcrumb_item in breadcrumbs %}
   {% if breadcrumb_item.link %}
        <a href="{{ breadcrumb_item.link }}">{{ breadcrumb_item.name }}</a>
   {% else %}
        <span>{{ breadcrumb_item.name }}</span>
   {% endif %}
{% endfor %}

{{ service.meta_title }}
{{ service.desctiption }}
{{ service.keywords }}
{{ service.name }}
{{ service.image }}
{{ service.content }}

```
Just like the category has access to all the linked services.
The service has access to all the properties of the parent category.

```Twig
[ServiceComponent]
category_slug = "{{ :category_slug }}"
slug = "{{ :slug }}"

==
{% set service = ServiceComponent.service %}

{{ service.category.name }}     // display name of the parent category


```


### ServiceSettings

This component provides 1 public variable - `settings`.
`settings` - this variable outputs all the information from settings plugin.

It can be used for the main page of services.
In the settings, you can enter the page metadata,
an image and a description of the page.

```Twig
meta_title = {{ service_settings.meta_title }}
meta_description = {{ service_settings.meta_description }}

[ServiceSettings]
==

{% set service_settings = ServiceSettings.settings %}

<h1>{{ service_settings.h1 }}</h1>
<p>{{ service_settings.description }}</p>
<img src="{{ service_settings.image |media }}" />
```


