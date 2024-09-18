---
title: "BO - Shop Parameters - Product Settings - Label of in-stock products"
weight: 5
---

# BO - Shop Parameters - Product Settings - Label of in-stock products
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1076
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/03_productsStock/06_labelOfInStockProducts.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/product-settings

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Products Settings > Scroll down to block Products stock | See Label of in-stock products is empty |
| Click View my store > Open any product | See that no particular label is displayed |
| Go back to BO > Shop Parameters > Products Settings > Scroll down to block Products stock > Add a label "In Stock" for "Label of in-stock products" > Save | Message Update successful is displayed |
| Go back to the FO > Refresh the page | See the label "In Stock" under the quantity |
