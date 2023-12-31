---
title: "FO - Menu and Navigation - Sort and filter - Clear one filter"
weight: 4
---

# FO - Menu and Navigation - Sort and filter - Clear one filter
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1243
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/08_menuAndNavigation/02_sortAndFilter/03_clearOneFilter.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO> all products | All products page is displayed |
| Filter products by Composition. | Only products with Composition *Ceramic*,  *Cotton* and *Recycled cardboard* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Cotton, Composition: Recycled cardboard. |
| On active filter, close a filter. | Only products with Composition *Ceramic* and *Recycled cardboard* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Recycled cardboard. |
| Filter by Availability products already filtered. | Only products with Composition *Ceramic*,  *Recycled cardboard* , and Availability : *In stock* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Recycled cardboard, Availability : In stock. |
| On active filter, close some filters. | Only products with Composition *Recycled cardboard* are displayed.<br><br>Active filters Composition: Recycled cardboard. |