---
title: "BO - Advanced Parameters - Performance - Optional features"
weight: 3
---

# BO - Advanced Parameters - Performance - Optional features
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-1136

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Customer settings > Click on the Groups tab | Groups page is displayed |
| Click on the Edit button next to Customer > Change the Discount field to 5 > Click on Save button | Successful update message is displayed |
| Click View my store > Click on the product "The best is yet to come Framed poster" | The product page "The best is yet to come Framed poster" is displayed.<br><br>The price displayed is €34.80. |
| Scroll down > Click on "Product Details" | The Tab product detail is displayed with Data sheet block : "Composition : Matt Paper" |
| Click on Sign In button on top right corner > Set your account > Click on "Sign in" button | You are now logged into your customer account.<br><br>The product page "The best is yet to come Framed poster" is displayed.<br><br>The price displayed is €33.06. |
| Go to BO > Advanced Parameters > Performance > Scroll down to Optional features block > Disable Features > Save | Update successful message is displayed |
| Go back to your product page > Refresh it > Scroll down > Click on "Product Details" | "Product Details" tab is displayed<br>Data sheet is not displayed anymore |
| Go to BO > Advanced Parameters > Performance > Scroll down to Optional features block > Disable Customer groups > Save | Update successful message is displayed |
| Go back to your product page > Refresh it | The product page "The best is yet to come Framed poster" is displayed.<br><br>The price displayed is €34.80 |
| Go to BO >  Catalog > Products | Products listing page is displayed |
| Select all the combination products > Click on "Bulk action" > Click on the Delete selection > Delete selection > Close | There are now 8 products on the list |
| Go to BO > Advanced Parameters > Performance > Scroll down to Optional features block > Disable Combinations > Save | Update successful message is displayed |
| Disable the Combination switch button and click on save button | You should be redirected to the performance page with the green notification "Update successful" |
| Go to BO > Catalog > Products > Click on Add new product | You can only create those types of products :<br><br>Standard product <br>Pack of products <br>Virtual products |
