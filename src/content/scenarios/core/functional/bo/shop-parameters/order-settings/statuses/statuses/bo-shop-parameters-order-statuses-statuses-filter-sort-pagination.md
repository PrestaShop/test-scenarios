---
title: "BO - Shop Parameters - Order Statuses - Statuses - Filter, Sort,Pagination "
weight: 3
---

# BO - Shop Parameters - Order Statuses - Statuses - Filter, Sort,Pagination 
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1058
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/02_orderSettings/02_statuses/statuses/02_filterSortAndPagination.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to \'Shop Parameters > Order Settings\' page | Order settings oage is displayed successfully |
| Go to statuses tab | Statuses tab is displayed successfully |
| Reset all filters and get number of statuses | Statuses should be above 0 |
| Filter table by ID | The searched value is displayed correctly |
| Reset all filters and get number of statuses | Statuses should be above 0 |
| Filter table by name | The searched value is displayed correctly |
| Reset all filters and get number of statuses | Statuses should be above 0 |
| Filter table by send email | The searched value is displayed correctly |
| Reset all filters and get number of statuses | Statuses should be above 0 |
| Filter table by delivery | The searched value is displayed correctly |
| Reset all filters and get number of statuses | Statuses should be above 0 |
| Filter table by invoice | The searched value is displayed correctly |
| Reset all filters and get number of statuses | Statuses should be above 0 |
| Filter table by email template | The searched value is displayed correctly |
| Reset all filters and get number of statuses | Statuses should be above 0 |
| Sort order status table by ID DESC | The table is sorted by ID desc |
| Sort order status table by Name ASC | The table is sorted by Name ASC |
| Sort order status table by Name DESC | The table is sorted by Name DESC |
| Sort order status table by Template ASC | The table is sorted by Template ASC |
| Sort order status table by Template DESC | The table is sorted by Template DESC |
| Sort order status table by ID ASC | The table is sorted by ID ASC |
| In block Order statuses (13) > Change pagination to 10 | 2 pages are available now |
| Click on next | Page (2/2) is displayed |
| Click on previous | Page (1/2) is displayed |
| In block Order statuses (13) > Change pagination to 20 | All the order statuses are displayed on 1 page |