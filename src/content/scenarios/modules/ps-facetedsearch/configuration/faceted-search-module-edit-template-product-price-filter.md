---
title: "Faceted search module - Edit template - Product price filter"
weight: 20
---

# Faceted search module - Edit template - Product price filter
## Details
* **Component** : ps_facetedsearch
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4256

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_facetedsearch | The module page list should be displayed and *Faceted search* module should be displayed on the list |
| Click on "Configure" button at the right of the module | "Configure Faceted search" should be displayed |
| Click on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" block > Set "Product price filter" switch button to disable > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on "All products" at the bottom of "Popular products" section | Many product should be displayed and you can't filter by "price" |
| Go back to BO > "Configure Faceted search" page > Click on on "Edit" button on the same line of your template | The "New filters template" tab is displayed |
| In "Filters" > Check "Product price filter" > Click on "Save" button | It returns on the "Configure faceted search" page and you have a successful message " Your filter "[name of your template]" was updated successfully. " |
| Go to FO > Reload the page | Many product should be displayed and you can filter by "price" with a slider |
