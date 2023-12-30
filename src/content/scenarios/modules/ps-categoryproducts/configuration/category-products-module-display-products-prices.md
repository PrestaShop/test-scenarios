---
title: "Category products module - Display products\' prices"
weight: 1
---

# Category products module - Display products\' prices
## Details
* **Component** : ps_categoryproducts
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4105

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_categoryproducts | The module page list should be displayed and *Products in the same category* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * "Display products' prices" is enabled by default<br> * "Number of product to display" field is set to 16 by default |
| Set to "Disabled" the"Display products' prices" switch button > Click on "Save" button | * A successful message "The settings have been updated" is displayed<br> * The "Display products' prices" switch button is "Disabled" and is grey |
| Go to FO > Click on a product | * The product page should be displayed.<br> * If you scroll down, you see "other products in the same category" block with products which have not their prices displayed |
| Go back to BO, on "Configure" page of the module > Set to "Enabled" the"Display products' prices" switch button > Click on "Save" button | * A successful message "The settings have been updated" is displayed<br> * The "Display products' prices" switch button is "Enabled" and is green |
| Go to FO > Click on a product | * The product page should be displayed.<br> * If you scroll down, you see "other products in the same category" block with products which have their prices displayed |