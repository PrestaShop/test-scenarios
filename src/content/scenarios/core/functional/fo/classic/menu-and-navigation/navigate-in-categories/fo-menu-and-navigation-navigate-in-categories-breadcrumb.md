---
title: "FO - Menu and Navigation - Navigate in Categories - Breadcrumb"
weight: 2
---

# FO - Menu and Navigation - Navigate in Categories - Breadcrumb
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1238
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/08_menuAndNavigation/01_navigateInCategories/02_breadcrumb.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on Clothes category | Clothes category is well displayed<br>Breadcrumb is like : Home / Clothes |
| Hover on Clothes > Click on Men | Men category is well displayed<br>Breadcrumb is like : Home / Clothes / Men |
| Click on Clothes in breadcrumb | Clothes category is well displayed<br>Breadcrumb is like : Home / Clothes |
| Click on Home in breadcrumb | Homepage is displayed<br>No more breadcrumb is displayed |
| Hover on Accessories category > Click on Stationery category | Stationery category is well displayed<br>Breadcrumb is like : Home / Accessories / Stationery |
| Click on Accessories in breadcrumb | Accessories category is well displayed<br>Breadcrumb is like : Home / Accessories |
| Click on Home in breadcrumb | Homepage is displayed<br>No more breadcrumb is displayed |