---
title: "FO - Menu and Navigation - Sort and filter - Clear one filter"
weight: 4
---

# FO - Menu and Navigation - Sort and filter - Clear one filter
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-1243

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO> all products | All products page is displayed |
| Filter products by Composition. | Only products with Composition *Ceramic*,  *Cotton* and *Recycled cardboard* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Cotton, Composition: Recycled cardboard. |
| Filter by price products already filtered. | Only products with Composition *Ceramic*,  *Cotton* and *Recycled cardboard* , and Price is between *€14.00 - €20.00* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Cotton, Composition: Recycled cardboard, Price : €14.00 - €20.00. |
| Filter by price products already filtered. | Products with Composition *Ceramic*,  *Cotton* and *Recycled cardboard* , Price is between *€14.00 - €20.00* and Brand is  *Graphic Corner* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Cotton, Composition: Recycled cardboard, Price : €14.00 - €20.00, Brand :  Graphic Corner. |
