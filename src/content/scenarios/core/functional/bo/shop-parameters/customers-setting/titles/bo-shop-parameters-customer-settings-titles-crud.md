---
title: "BO - Shop parameters - Customer Settings - Titles - CRUD"
weight: 2
---

# BO - Shop parameters - Customer Settings - Titles - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1093
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/05_contact/02_stores/05_sortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/customers-settings/customer-settings/titles

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Customer Settings > Titles Tab | Title page is displayed |
| Click on Add new social title | Title creation page is displayed |
| Fill all fields > Click on Save | Alert Successful creation is displayed |
| Click on Edit for the last created Title > Edit the Social Title > Edit the Gender > Click on Save | Alert Successful update is displayed |
| For the last 2 created Social titles : Click On Delete with the dropdown > Yes | Alert Successful deletion is displayed |
