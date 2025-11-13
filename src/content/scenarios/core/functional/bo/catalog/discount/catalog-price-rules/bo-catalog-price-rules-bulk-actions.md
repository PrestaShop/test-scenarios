---
title: "BO - Catalog price Rules : Bulk actions"
weight: 3
---

# BO - Catalog price Rules : Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10329
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/07_discounts/02_catalogPriceRules/03_bulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On BO > Catalog > Discount > Catalog Price Rules | Catalog price Rules page displayed |
| Click "Add new catalog price rule" | Catalog price Rules creation page displayed |
| fill the form and Save | Successful creation |
| Click "Add new catalog price rule" | Catalog price Rules creation page displayed |
| fill the form and Save | Successful creation |
| Bulk actions -> Select all | The status has been successfully updated.<br> <br>All Catalog Price Rules are selected |
| Bulk actions -> Unselect all | The status has been successfully updated.<br> <br>All Catalog Price Rules are unselected |
| Bulk actions -> Delete selected | We have a message: "You must select at least one element to delete." |
| Bulk actions -> Select all | The status has been successfully updated.<br> <br>All Catalog Price Rules selected |
| Bulk actions -> Delete selected>click Yes | We have a message :" The selection has been successfully deleted. " |
