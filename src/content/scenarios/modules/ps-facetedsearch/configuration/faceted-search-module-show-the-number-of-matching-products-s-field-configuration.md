---
title: "Faceted search module - Show the number of matching products\'s field configuration"
weight: 1
---

# Faceted search module - Show the number of matching products\'s field configuration
## Details
* **Component** : ps_facetedsearch
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4111

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on the switch named "Show the number of matching products" to disable it > Click on "Save" button | A successful message "Settings saved successfully" is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | Many product should be displayed and you can see at the bottom left many parameters without number of matching product on it |
| Go back to BO > "Configure Faceted search" page > Click on the switch named "Show the number of matching products" to enable it > Click on "Save" button | A successful message "Settings saved successfully" is displayed |
| Go to FO > Reload the page | Many product should be displayed and you can see at the bottom left many parameters with number of matching product on it |