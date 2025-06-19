---
title: "Faceted search module - Category filter depth field configuration"
weight: 5
---

# Faceted search module - Category filter depth field configuration
## Details
* **Component** : ps_facetedsearch
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4151
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_facetedsearch/02_configuration/05_categoryFilterDepthFieldConfiguration.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on the field next to "Category filter depth (0 for no limits, 1 by default)" to setup this field > Click on "save" button | A successful message "Settings saved successfully" is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | Many product should be displayed and you can see on the left only three different categories |
| Go back to BO > "Configure Faceted search" page > Click on the field next to "Category filter depth (0 for no limits, 1 by default)" to setup this field > Click on "save" button | A successful message "Settings saved successfully" is displayed |
| Go to FO > Reload the page | Many product should be displayed and you can see on the left more than three different categories |
| Go back to BO > "Configure Faceted search" page > Click on the field next to "Category filter depth (0 for no limits, 1 by default)" to setup this field > Click on "save" button | An error message should be displayed |
| Click on the field next to "Category filter depth (0 for no limits, 1 by default)" to setup this field > Click on "save" button | An error message should be displayed |
| Click on the field next to "Category filter depth (0 for no limits, 1 by default)" to setup this field > Click on "save" button | An error message should be displayed |
| Click on the field next to "Category filter depth (0 for no limits, 1 by default)" to setup this field > Click on "save" button | An error message should be displayed |
| Click on the field next to "Category filter depth (0 for no limits, 1 by default)" to setup this field > Click on "save" button | An error message should be displayed |
| Click on the field next to "Category filter depth (0 for no limits, 1 by default)" to setup this field > Click on "save" button | An error message should be displayed |
| Click on the field next to "Category filter depth (0 for no limits, 1 by default)" to setup this field > Click on "save" button | A successful message "Settings saved successfully" is displayed and the number is changed to "1" |
