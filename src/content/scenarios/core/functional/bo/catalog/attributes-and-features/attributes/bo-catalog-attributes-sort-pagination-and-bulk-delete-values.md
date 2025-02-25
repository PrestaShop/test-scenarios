---
title: "BO - Catalog - Attributes - Sort, Pagination and bulk delete Values"
weight: 7
---

# BO - Catalog - Attributes - Sort, Pagination and bulk delete Values
## Details
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1777

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features page | The Attributes page is displayed |
| Reset filter | Number of Attributes = Total Attributes |
| Filter Attribute by Name = Color | Number Attributes < Total Attributes and the searched list contains the Color Name |
| Click on View button | Page title = 'Color' & The Colors List page is displayed |
| Sort by ID desc | The page is well displayed and sort by ID desc ( 3->2->1) |
| Sort by Name asc | The list is sorted by name asc  (a->b->c) |
| Sort by name desc | the list is sorted by name desc (c->b->a) |
| Sort by color asc | The list is sorted by color asc |
| Sort by color desc | The list is sorted by color desc |
| Sort by Position asc | The list is sorted by position asc |
| Sort by Position desc | The list page is sorted by position desc |
| Sort by ID asc | The list is sorted by ID asc |
| Change Display items to 20 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Delete the Created values by bulk actions | Values are well deleted |
| Click to Back  to list button | The Attributes page is displayed |
