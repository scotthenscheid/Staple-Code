---
layout: document
title: "Field Filters"
date: 2018-02-20 15:58:00
categories: Filters
---

## Field Filters

`FieldFilter` objects can be added to form fields to filter the field content. 
Filters are executed before Validators, so they can modify content in time for 
validation.

Unlike Validators, Field Filters are not tied to a specific field once added and 
can be reused on multiple fields.

### Using a `FieldFilter`

```php?start_line=1
$tagFilter = new TagFilter();
```