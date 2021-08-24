---
title: "BO - Features - Sort & Pagination & Bulk delete"
weight: 3
---

# BO - Features - Sort & Pagination & Bulk delete
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Features page | The Features page is displayed |
| Sort by ID desc | The list is sorted by ID desc (3->2->1) |
| Sort by Name asc | The list is sorted by Name asc (a->b->c) |
| Sort by Name desc | The list is sorted by Name desc (c->b->a) |
| Sort by Position asc | The list is sorted by position asc (1->2->3) |
| Sort by Position desc | The list is sorted by position desc (3->2->1) |
| Sort by ID asc | The list is sorted by ID asc |
| Change Display items to 20 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Filter by Name ("Todelete": data created as a pre-condition) | Number Features=19 and the list contains the searched Name |
| Click on Bulk action button | A drop down is displayed |
| Click on "Select All" | All Features are selected |
| Click on Bulk action button | A drop down is displayed |
| Click on "Delete selected" and confirm the deletion | A green alert "The selection has been successfully deleted." is displayed and the list empty |
| Reset Filter | Number of Features = 2 |
