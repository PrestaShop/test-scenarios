---
title: "FO - Product Page - Display discount and volume discount"
weight: 13
---

# FO - Product Page - Display discount and volume discount
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6986

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Click on "Add new product" > Choose Standard product > Click on Add new product | The product configuration page should be displayed |
| Set up the Product name > Click on the switch "Offline" > Go to Stocks tab > Add Quantity = 30 > Click on Pricing Tab > Set the Retail price (tax incl.) = 20 > Save and publish | Successful update alert is displayed |
| Click on "Add a specific price" > Set the "Minimum number of units purchased" > Enable "Apply a discount to the initial price" > Set to 2€ Tax included > Click on save and publish > Close modal | Successful update alert is displayed<br><br>The newly created specific price is displayed |
| Preview the product | The product page is displayed :<br><br>The price is €20.00<br>The Volume discount with "Quantity" "3", "Unit discount" "€2.00" and "You Save" "€6.00" |
| Change quantity to 3 | The quantity number is 3<br><br>The price is displayed like so :<br>€18.00 -€20.00- (Save €2.00)<br><br>Issue related : https://github.com/PrestaShop/hummingbird/issues/616 |
| Add products to cart | Product successfully added to your shopping cart<br><br>Unit price is : €18.00<br>Total (tax incl.) : €54.00 |
| Proceed to checkout > Remove all products | There are no more items in your cart |
| Go back to product edition page > Click on "Add a specific price" > Enable "Apply a discount to the initial price" > Set to 15% > Click on Save and publish > Close modal | Successful update alert is displayed<br><br>The newly created specific price is displayed |
| Preview the product | The product page is displayed :<br><br>The price is €17.00 -€20.00- (Save 15%)<br><br>The Volume discount with "Quantity" "3", "Unit discount" "€2.00" and "You Save" "€6.00" |
| Add products to cart | Product successfully added to your shopping cart<br><br>Unit price is : €17.00<br>Total (tax incl.) : €17.00 |
| Proceed to checkout > Remove all products | There are no more items in your cart |
