---
title: "BO - Catalog price Rules - Bulk actions"
weight: 3
---

# BO - Catalog price Rules - Bulk actions
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-10329

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Bulk actions -> Select all | The status has been successfully updated.<br> <br>All Catalog Price Rules are selected |
| Bulk actions -> Unselect all | The status has been successfully updated.<br> <br>All Catalog Price Rules are unselected |
| Bulk actions -> Delete selected | We have a message: "You must select at least one element to delete." |
| Bulk actions -> Select all | The status has been successfully updated.<br> <br>All Catalog Price Rules selected |
| Bulk actions -> Delete selected>click Yes | We have a message :" The selection has been successfully deleted. " |
