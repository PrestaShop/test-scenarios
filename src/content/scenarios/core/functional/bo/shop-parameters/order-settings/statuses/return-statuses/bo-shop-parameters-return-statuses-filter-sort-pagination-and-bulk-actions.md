---
title: "BO - Shop Parameters - Return statuses - Filter, sort, pagination and bulk actions"
weight: 2
---

# BO - Shop Parameters - Return statuses - Filter, sort, pagination and bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7654
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/02_orderSettings/02_statuses/returnStatuses/02_filterSortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/order-settings/statuses

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to \'Shop Parameters > Order Settings\' page | Order settings oage is displayed successfully |
| Go to statuses tab | Statuses tab is displayed successfully |
| Reset all filters and get number of return statuses | Return statuses should be above 0 |
| Filter order return status by ID | The searched value is displayed correctly |
| Reset all filters | Number of return statuses after filter = number of return statuses |
| Filter order return status by Status | The searched value is displayed correctly |
| Reset all filters | Number of return statuses after filter = number of return statuses |
| Sort order return status table by ID Desc | The table is sorted by ID desc |
| Sort order return status table by Status ASC | The table is sorted by Status ASC |
| Sort order return status table by Status DESC | The table is sorted by Status DESC |
| Sort order return status table by ID ASC | The table is sorted by ID ASC |
| Create 6 order return statuses | Messages Successful creation are displayed<br><br>Title of return status block is now : Return statuses (11)<br><br>Pagination is displayed with 50 elements per page |
| In block Return statuses (11) > Change pagination to 10 | Page (1/2) is displayed |
| Click on next | Page (2/2) is displayed |
| Click on previous | page (1/2) is displayed |
| In block Return statuses (11) > Change pagination to 20 | All the return statuses are displayed on 1 page |
| Select all statuses > Click on bulk action > Click on delete selected | All created statuses are deleted successfully |
