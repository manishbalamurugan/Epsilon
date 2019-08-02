---
title: Blog
menu: 'Our Blog'
visible: true
admin:
    children_display_order: collection
hero_classes: 'page-header page-header--single page-hero'
content:
    items:
        - '@self.children'
    limit: 7
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
blog_url: blog
sitemap:
    changefreq: monthly
    priority: 1.03
feed:
    description: 'Blog news'
    limit: 0
pagination: true
---

