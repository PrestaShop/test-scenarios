---
title: "BO - Catalog - Stocks - Update Quantity by setting input"
weight: 3
---

# BO - Catalog - Stocks - Update Quantity by setting input
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-840
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/08_stocks/03_updateQuantity.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/stocks/stock-management

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Stock | Page title contains 'Stock' is displayed |
| For the product Customizable Mug - ID 19 > Click on the arrow *up* until you reach 5 > Click on the check mark | Stock successfully updated message is displayed<br>Stocks *Physical* and *Available* go from 300 to 305 |
| For the product Customizable Mug - ID 19 > Edit the quantity with keyboard : "-310" > Click on the check mark | Stock successfully updated message is displayed<br>Stock *Physical* and *Available* goes from 305 to -5 and the whole line is red |
| For the product Hummingbird notebook - ID 18 - Paper Type - Ruled > Click on the arrow *down* until you reach -5 > Click on the check mark | Stock successfully updated message is displayed<br>Stocks *Physical* and *Available* go from 300 to 295 |
| Edit the quantity for 2 products :<br>- For the product *Hummingbird notebook - ID 18 - Paper Type - Plain* > Click on the arrow *up* 10 times<br>- For the *Hummingbird notebook - ID 18 - Paper Type - Squared* > Edit quantity with keyboard : 20<br><br>> Click on apply new quantity | Stock successfully updated message is displayed<br><br>For the product *Hummingbird notebook - ID 18 - Paper Type - Plain*<br>Stocks Physical and Available go from 300 to 310<br><br>For the product *Hummingbird notebook - ID 18 - Paper Type - Squared*<br>Stocks Physical and Available go from 300 to 320 |
