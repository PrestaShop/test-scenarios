---
title: "BO - Shop Parameters - Order return status - Bulk actions "
weight: 4
---

# BO - Shop Parameters - Order return status - Bulk actions 
## Details
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7655
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/02_orderSettings/02_statuses/statuses/04_bulkActions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/order-settings/statuses

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to 'Shop parameters > Order settings > Status' | Statuses page is displayed successfully |
| Create 2 new order statuses | Statuses are created successfully |
| Select all statuses> Click on bulk actions > Delete selected | Statuses are deleted successfully |
