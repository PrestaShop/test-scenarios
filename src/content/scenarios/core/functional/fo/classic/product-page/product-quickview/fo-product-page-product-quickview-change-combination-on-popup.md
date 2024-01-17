---
title: "FO - Product Page - Product Quickview - Change combination on popup"
weight: 6
---

# FO - Product Page - Product Quickview - Change combination on popup
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1253

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "Hummingbird printed t-shirt" | The button "Quickview" should be displayed with colored boxes |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| * Click on the box related to the Size<br> * Choose the "XL" | * You should see all the Size enabled ( S - M - L - XL )<br> * on the top of this box you should have "Size : XL" |
| * Click on the Black box under "Color :" <br> * Click on the White box "under Color : Black" | * the border of the Black box should be bold, the image show a black t-shirt and on the top of this box, you should have "Color : Black"<br> * the border of the White box should be bold, the image show a White t-shirt and on the top of this box, you should have "Color : White" |
| Click on the cross at the top right | The modal shouldn't be displayed and the page of your shop should be displayed |
| Put your mouse over the product "The best is yet to come' Framed poster" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| * Click on the box related to the Dimension<br> * Choose the "60x90cm" | * You should see all the Dimenson enabled ( 40x60cm - 60x90cm - 80x120cm )<br> * On the top of this box you should have "Dimension : 60x90cm"<br> * The price should change (from 29$ to 49$) |
| * Click on the box related to the Size<br> * Choose the "XL" | * You should see all the Size enabled ( S - M - L - XL )<br> * on the top of this box you should have "Size : XL" |
