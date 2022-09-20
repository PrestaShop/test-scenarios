---
title: "BO - Catalog - Features - Values - Sort & Pagination & bulk delete"
weight: 7
---

# BO - Catalog - Features - Values - Sort & Pagination & bulk delete
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features page | The Features page is displayed |
| Search by Name = Composition | The list contains the searched Name |
| Click on "View" | The list Value page is displayed |
| Sort by ID desc | The list is sorted by ID desc (3->2->1) |
| Sort by Value asc | The list is sorted by Value asc (a->b->c) |
| Sort by Value desc | The list is sorted by Value desc (c->b->a) |
| Sort by ID asc | The list is sorted by ID asc |
| Change Display items to 20 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Filter by Value ("Todelete": data created as a pre-condition) | Number Values=15 and the list contains the searched Value |
| Click on Bulk action button | A drop down is displayed |
| Click on "Select All" | All Values are selected |
| Click on Bulk action button | A drop down is displayed |
| Click on "Delete selected" and confirm the deletion | A green alert "The selection has been successfully deleted." is displayed and the list empty |
| Reset Filter | **Number of Values = 6 |
