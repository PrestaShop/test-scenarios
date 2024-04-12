---
title: "FO - Product Page - Display tag products (New, On sale, Pack, Out-of-stock, Discount...)"
weight: 8
---

# FO - Product Page - Display tag products (New, On sale, Pack, Out-of-stock, Discount...)
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6981

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | List of products is displayed |
| Click on "Add new product" > Click on "Pack of product" > Click on "Add new product" | The product configuration page is be displayed |
| Set up the Product name > Add an image > Click on the switch button "Offline" > Save | Successful update alert is displayed |
| Go to "Options" tab > Click on the switch button under "Web only (not sold in your retail store)" > Click Save and publish | Successful update alert is displayed |
| Preview the product | The product page is displayed in a new tab<br><br>See the 4 tags displayed on the product image : Online only, New, Pack, Out-of-Stock |
| Go back to the product page edition > Click on the "Pricing" tab > Set the Retail price (tax incl.) to 20 > Click on "Add a specific price" > Enable "Apply a discount to the initial price" > Set to 2 € Tax included  > Click on save and publish > Click on Cancel | The specific price is displayed<br><br>Discount (tax incl.) = -€2.00 |
| Click on Save and publish | Successful update alert is displayed |
| Preview the product | The product page is displayed in a new tab<br><br>See a new tag is displayed with a white background on the product image : -€2.00 |
