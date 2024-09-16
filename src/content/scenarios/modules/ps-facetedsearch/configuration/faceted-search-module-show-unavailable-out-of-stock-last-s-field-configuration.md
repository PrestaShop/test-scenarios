---
title: "Faceted search module - Show unavailable, out of stock last\'s field configuration"
weight: 4
---

# Faceted search module - Show unavailable, out of stock last\'s field configuration
## Details
* **Component** : ps_facetedsearch
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4150
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_facetedsearch/02_configuration/04_showUnavailableOutOfStockLastFieldConfiguration.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Click on  the last created product (pre-condition) | "Product page" is displayed |
| Change the quantity > Click on "Save" button | A blue notice with "Settings updated" is displayed |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module > See that the "Show unavailable, out of stock last" field is disabled | "Configure Faceted search" should be displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | * Many product should be displayed<br> * "Out of stock" should not be the last item |
| Go back to BO > "Configure Faceted search" page > Click on the switch named "Show unavailable, out of stock last" to enable it > Click on "Save" button | A successful message "Settings saved successfully" is displayed |
| Go to FO > Reload the page | * Many product should be displayed<br> * "Out of stock" product should be the last one |
