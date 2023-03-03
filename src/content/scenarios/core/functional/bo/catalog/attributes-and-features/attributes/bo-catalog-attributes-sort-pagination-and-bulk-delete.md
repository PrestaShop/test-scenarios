---
title: "BO - Catalog - Attributes - Sort, Pagination and bulk delete"
weight: 2
---

# BO - Catalog - Attributes - Sort, Pagination and bulk delete
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes page | The Attributes page well displayed |
| Sort by ID desc | The list is well sorted by id_attribute desc (3->2->1) |
| Sort by name asc | The list is sorted by name asc (a->b->c) |
| Sort by name desc | The list is sorted by name desc (c->b->a) |
| Sort by Position asc | The list is sorted by position asc (1->2->3) |
| Sort by ID asc | The list is sorted by ID asc (1->2->3) |
| Change Display items to 20 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Delete the Created attributes by bulk actions | Attributes are well deleted |
