CMSPagesBundle
====

This bundle includes some common pages for use with the KunstmaanBundlesCMS Content Management System.

- Home Page
 -
- Content Page
 - Basic Content page, with templates for:
  - Full-width
  - Left sidebar
  - Right sidebar
- Separator Page
 - Used as a menu separator (a node with no content)
  - @todo - include the current node menu for siblings for robots

All of the page templates are designed with TWBS 3.0 in mind, with a main layout.html.twig similar to:

```html
<main class="container"> <!-- or .container-fluid -->
    {% block content %}
    <!-- templates are nested in a div.row -->
    {% endblock content %}
</main>
```


All of the pages are mapped superclasses, and meant to be used with Doctrine/ORM. Add fields to your entities,
and extend the page you want for basic templating.

Override templates by overriding/extending the getDefaultView() in your entity.

Override possible templates by overriding/extending the getPageTemplates() in your entity.

Override possible page part admin configuration by overriding/extending the getPagePartAdminConfigurations() in your entity.

Override possible children by overriding/extending the getPossibleChildTypes() in your entity.

Override the AdminType by overriding/extending the getDefaultAdminType() in your entity.

