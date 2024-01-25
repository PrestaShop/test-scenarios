---
title: "BO - Shop Parameters - Product Settings - Display unavailable product attributes on the product page"
weight: 8
---

# BO - Shop Parameters - Product Settings - Display unavailable product attributes on the product page
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1070
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/03_productSettings/03_productsStock/03_displayUnavailableProductAttributes.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/product-settings

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Product Settings > Scroll down to Products stock | "Display unavailable attributes on the product page" option is set to YES |
| Go to BO > Catalog > Products > Edit "Brown bear notebook" > Combinations > Edit quantity to 0 for "Paper Type - Ruled" > Save and publish | Message Successful update is displayed |
| Preview the product | See in product page "Product available with different options" |
| Change combination to "Plain" | See label "In stock" displayed |
| Go back to BO > Shop Parameters > Product Settings > Scroll down to Products stock > Disable Display unavailable attributes on the product page > Save | Message Successful update is displayed |
| Preview the "Brown bear notebook" product | See that the option "Ruled" is not displayed in the dropdown.<br>Only Plain, Squared, Dotted are displayed |
