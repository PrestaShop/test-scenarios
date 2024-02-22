---
title: "FO - Product Page - Product Quickview - Change quantity"
weight: 2
---

# FO - Product Page - Product Quickview - Change quantity
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1249

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| Click on the up Arrow next to the number under Quantity | The number should be 2 |
| Click on the down Arrow next to the number under Quantity | The number should be 1 |
| * Click on the number and write 12<br> * Click on Add to cart | 12 Product should be successfully added to you shopping cart |
| Clic on "Continue Shopping" | The modal should be hidden |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| * Click on the number and write -24<br> * Click on Add to cart | 1 Product should be successfully added to you shopping cart |
| Clic on "Continue Shopping" | The modal should be hidden |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| * Click on the number and write "prestashop"<br> * Try to click on Add to cart | "Add to cart" button should be disabled |
| * Click on the number and scroll up <br> * Click on the number and scroll down | * The number of quantity should increase <br> * The number of quantity should decrease |
