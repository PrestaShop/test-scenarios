---
title: "BO - Catalog - Products - Enable & Disable"
weight: 1
---

# BO - Catalog - Products - Enable & Disable
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7558
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/01_filterAndQuickEditProducts.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | The Product list page is displayed |
| Filter by Product Name | Number of products < Total of products<br><br>All products contain the searched Name |
| Click on the switch toggle and click on Disable | An alert "Product successfully deactivated." is displayed and the product is disabled |
| Click on the switch toggle and click on Enable | An alert "Product successfully activated." is displayed and the product is enabled |
| Reset Filters | Number of products = Total of products |
| Delete created products | Products well created |
