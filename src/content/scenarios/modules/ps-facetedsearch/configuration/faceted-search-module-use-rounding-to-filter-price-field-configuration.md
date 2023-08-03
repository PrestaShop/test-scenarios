---
title: "Faceted search module - Use rounding to filter price field configuration"
weight: 7
---

# Faceted search module - Use rounding to filter price field configuration
## Details
* **Component** : ps_facetedsearch
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4206

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Click on  the last created product (pre-condition) | "Product page" is displayed |
| Change the price > Click on "Save" button | A blue notice with "Settings updated" is displayed |
| Go to Shop Parameters > General | "Preferences" page is displayed |
| Change "Round mode" switch button to "Round down to the nearest value" > Click on "Save" button | A successful message "Successful update" is displayed |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on the switch named ""Use rounding to filter price" to disable it > Click on "Save" button | A successful message "Settings saved successfully" is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | Many product should be displayed and your new product isn't  displayed |
| Go back to BO > "Configure Faceted search" page > Click on the switch named "Use rounding to filter price" to enable it > Click on "Save" button | A successful message "Settings saved successfully" is displayed |
| Go to FO > Reload the page | Many product should be displayed and your new product should be displayed |
