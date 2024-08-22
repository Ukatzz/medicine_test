# Ya-mobile.Blog
Blog plugin for October CMS.
## Installation
Run the following to install this plugin:
```
php artisan plugin:install Yamobile.Blog
```
To uninstall this plugin:
```
php artisan plugin:remove Yamobile.Blog
```
## Using components
This plugin provides 4 components: Categories, Category, Posts and Post. Components have no default markup but they provide convenient work with data. Markup must be added by themes.
### Categories component
This component allows you to display all categories.
Basic usage example:
```
[Categories]
==
{% for category in Categories.categories %}
    <section>
        <h2>
            <a href="{{ category.slug }}">
                {{ category.name }}
            </a>
        </h2>
        <p>
            {{ category.description }}
        </p>
    </section>
{% endfor %}
```
### Category component
This component allows you to display data of a specific category.
Basic usage example:
```
[Category]
slug = "{{ :slug }}"
==
<h1>
    {{ Category.category.name }}
</h1>
<p>
    {{ Category.category.description }}
</p>
```
### Posts component
This component allows you to display all posts by a specific category.
Basic usage example:
```
[Posts]
slug = "{{ :slug }}"
==
{% for post in Posts.posts %}
    <section>
        <h2>
            <a href="{{ post.slug }}">
                {{ post.name }}
            </a>
        </h2>
        <img src="{{ post.image | media }}">
        <p>
            {{ post.description }}
        </p>
    </section>
{% endfor %}
```
### Post component
This component allows you to display data of a specific post.
Basic usage example:
```
[Post]
slug = "{{ :slug }}"
==
<h1>
    {{ Post.post.name }}
</h1>
{{ Post.post.content | raw }}
```
