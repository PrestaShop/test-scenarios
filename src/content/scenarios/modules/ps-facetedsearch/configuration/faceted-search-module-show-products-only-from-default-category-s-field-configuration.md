---
title: "Faceted search module - Show products only from default category\'s field configuration"
weight: 3
---

# Faceted search module - Show products only from default category\'s field configuration
## Details
* **Component** : ps_facetedsearch
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4138
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_facetedsearch/02_configuration/03_showProductsOnlyFromDefaultCategorysFieldConfiguration.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on the switch named "Show products only from default category" to enable it > Click on "Save" button | * A successful message "Settings saved successfully" is displayed<br> * "Show products from subcategories" switch button is disabled and deactivated automatically |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | * "No products available yet" is displayed with description and search bar<br> * Only categories will be showed |
| Click on the "Art" category | Only products linked to this category are displayed |
| Go back to BO > "Configure Faceted search" page > Click on the switch named "Show products only from default category" to enabled it > Click on "Save" button | * A successful message "Settings saved successfully" is displayed<br> * "Show product from subcategories" should be clickable |
| Go to FO > Reload the page | Many product should be displayed and you can see at the bottom left many parameters to refined your research |
