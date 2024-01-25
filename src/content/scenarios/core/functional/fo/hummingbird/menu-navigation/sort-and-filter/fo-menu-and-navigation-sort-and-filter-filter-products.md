---
title: "FO - Menu and Navigation - Sort and filter - Filter products"
weight: 2
---

# FO - Menu and Navigation - Sort and filter - Filter products
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-6953

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO> all products | All products page is displayed |
| Filter products by Categories | There are 9 products.<br><br>Active filters Categories : Art and Categories : Clothes |
| Click on _clear all_ button | No more filter is displayed.<br><br>All products are displayed. |
| Filter products by Size. | Only products with size S, L and XL are displayed.<br><br>Active filters Size: S, Size: L, Size: XL |
| Filter by Color products already filtered. | Only products with size *S*, *L* and *XL* and color is *black* are displayed.<br><br>Active filters Size: S, Size: L, Size: XL, Color: Black. |
| Click on _clear all_ button | No more filter is displayed.<br><br>All products are displayed. |
| Filter products by Composition. | Only products with Composition *Ceramic*,  *Cotton* and *Recycled cardboard* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Cotton, Composition: Recycled cardboard. |
| Filter by price products already filtered. | Only products with Composition *Ceramic*,  *Cotton* and *Recycled cardboard* , and Price is between *€14.00 - €20.00* are displayed.<br><br>Active filters Composition: Ceramic, Composition: Cotton, Composition: Recycled cardboard, Price : €14.00 - €20.00. |
| Filter by brand products already filtered. | Products with Composition *Recycled cardboard* , Price is between *€14.00 - €20.00* and Brand is  *Graphic Corner* are displayed.<br><br>Active filters Composition: Recycled cardboard, Price : €14.00 - €20.00, Brand :  Graphic Corner. |
| Click on _clean all_ button | No more filter is displayed.<br><br>All products are displayed. |
| Filter products by Dimension. | Products with Dimension 40x60cm and 60x90cm are displayed.<br><br>Active filters *Dimension*: 40x60cm, *Dimension*: 60x90cm |
| Filter by Availability products already filtered. | Products with Dimension 40x60cm, 60x90cm and Availability: In stock are displayed.<br><br>Active filters *Dimension*: 40x60cm, *Dimension*: 60x90cm, *Availability*: In stock |
| Click on _clean all_ button | No more filter is displayed.<br><br>All products are displayed. |
| Filter products by Paper Type. | Products with Paper Type Ruled, Plain and Squarred are displayed.<br><br>Active filters *Paper Type*: Ruled, *Paper Type*: Plain and *Paper Type*: Squarred. |
| Click on _clean all_ button | No more filter is displayed.<br><br>All products are displayed. |
