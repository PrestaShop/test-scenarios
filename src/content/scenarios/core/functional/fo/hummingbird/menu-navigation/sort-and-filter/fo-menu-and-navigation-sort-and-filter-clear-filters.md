---
title: "FO - Menu and Navigation - Sort and filter : Clear filters"
weight: 3
---

# FO - Menu and Navigation - Sort and filter : Clear filters
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6955
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/08_menuAndNavigation/02_sortAndFilter/03_clearFilters.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on All products | All products page is displayed<br><br>There are 19 products. |
| Filter products by Composition. | Only products with Composition *Ceramic*,  *Cotton* and *Recycled cardboard* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Cotton, Composition: Recycled cardboard.<br><br>There are 9 products. |
| On Active filters > Remove a filter | Only products with Composition *Ceramic* and *Recycled cardboard* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Recycled cardboard.<br><br>There are 7 products. |
| Filter by Availability > Check "In stock" | Only products with Composition *Ceramic*,  *Recycled cardboard* , and Availability : *In stock* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Recycled cardboard, Availability : In stock.<br><br>There are 7 products. |
| On active filters > Remove some filters. | Only products with Composition *Recycled cardboard* are displayed.<br><br>Active filters Composition: Recycled cardboard.<br><br>There are 3 products. |
| In left block > Click Clear all | No more filters. There are 19 products. |
