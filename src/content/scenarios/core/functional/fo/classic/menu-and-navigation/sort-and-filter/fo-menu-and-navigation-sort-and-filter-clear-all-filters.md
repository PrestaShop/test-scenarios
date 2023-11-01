---
title: "FO - Menu and Navigation - Sort and filter - Clear all filters"
weight: 3
---

# FO - Menu and Navigation - Sort and filter - Clear all filters
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1242

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO> all products | All products page is displayed |
| Filter products by Composition. | Only products with Composition *Ceramic*,  *Cotton* and *Recycled cardboard* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Cotton, Composition: Recycled cardboard. |
| Filter by price products already filtered. | Only products with Composition *Ceramic*,  *Cotton* and *Recycled cardboard* , and Price is between *€14.00 - €20.00* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Cotton, Composition: Recycled cardboard, Price : €14.00 - €20.00. |
| Filter by brand products already filtered. | Products with Composition *Ceramic*,  *Cotton* and *Recycled cardboard* , Price is between *€14.00 - €20.00* and Brand is  *Graphic Corner* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Cotton, Composition: Recycled cardboard, Price : €14.00 - €20.00, Brand :  Graphic Corner. |
| Click on _clean all_ button | No more filter is displayed.<br><br>All products are displayed. |
| Filter products by Dimension. | Products with Dimension 40x60cm and 60x90cm are displayed.<br><br>Active filters *Dimension*: 40x60cm, *Dimension*: 60x90cm |
| Filter by Availability products already filtered. | Products with Dimension 40x60cm, 60x90cm and Availability: available are displayed.<br><br>Active filters *Dimension*: 40x60cm, *Dimension*: 60x90cm, *Availability*: Available |
| Click on _clean all_ button | No more filter is displayed.<br><br>All products are displayed. |
