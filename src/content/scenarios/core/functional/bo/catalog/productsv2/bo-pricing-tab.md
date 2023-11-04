---
title: "BO - Pricing Tab"
weight: 20
---

# BO - Pricing Tab
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5216
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/17_pricingTab.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > New product > Standard product > Add new product > Add a title to your product > Switch to Online > Add a quantity > Click Save | Successful update message is displayed |
| Go to Pricing Tab > In Retail price block > Edit Retail price (tax excl.) = 100€ > Save and publish | Retail price (tax incl.) = 100€<br><br>{{Summary :}}<br>{{€100.00 tax excl.}}<br>{{€100.00 tax incl.}}<br>{{€100.00 margin}}<br>{{100.00% margin rate}}<br>{{€0.00 cost price}} |
| Click on Preview | FO product page is displayed on a new tab<br><br>Price is 100€ |
| Go back to BO > Edit Tax rule = FR Taux standard (20%) > Save and publish | Retail price (tax incl.) is updated = 120€<br><br>Summary :<br>{{€100.00 tax excl.}}<br>{{€120.00 tax incl.}}<br>{{€100.00 margin}}<br>{{100.00% margin rate}}<br>{{€0.00 cost price}} |
| Click on Preview | FO product page is displayed on a new tab<br><br>Price is updated = 120€ |
| Go back to BO > In Cost Price block > Add a Cost price (tax excl.) = 35€ > Save and publish | Successful update message is displayed<br><br>Summary:<br>{{€100.00 tax excl.}}<br>{{€120.00 tax incl.}}<br>{{€65.00 margin}}<br>{{65.00% margin rate}}<br>{{€35.00 cost price}} |
| Enable Display retail price per unit > Edit Retail price per unit (tax excl.) = 10€ > Edit Unit = "per unit" > Save and publish | Retail price per unit (tax incl.) is updated = 12€<br><br>Successful update message is displayed<br><br>Summary<br>{{€100.00 tax excl.}}<br>{{€120.00 tax incl.}}<br>{{€10.00 per unit}}<br>{{€65.00 margin}}<br>{{65.00% margin rate}}<br>{{€35.00 cost price}} |
| Click on Preview | FO product page is displayed on a new tab<br><br>Price per unit is updated : "€12.00 per unit" |
| Check On sale flag > Save and publish > Save and publish | FO product page is displayed on a new tab<br><br>ON SALE! flag is displayed on product image |
| Click Add a specific price button > Edit Impact on price 20€ > Save and publish | Successful creation message is displayed<br><br>Specific price is displayed |
| Click on preview product | FO is displayed<br>See the product price is now 80€<br>There's an orange tag SAVE 20€ |
| Click on Edit the Specific price > Change impact on Price : € > % > Save and publish | Update successful |
| Click on preview product | FO is displayed<br>See the product price is 80€<br>There's an orange tag SAVE 20% |
| Check the Specific price table | Combination : --<br>Currency : All currencies<br>Country : All countries<br>Group : All groups<br>Store : name of your shop<br>Customer : All customers<br>Specific price : --<br>Discount (tax incl.) : -20%<br>Discount (tax incl.) : Unlimited<br>Units : 1 |
| Delete the Specific price > Delete | Successful deletion message is displayed |
| Click on "Show catalog price rules" | The button turns into "Hide catalog price rules"<br><br>The block "Catalog price rules" is displayed |
| Click on the link "Manage catalog price rules" | Another tab Catalog Price Rules is opened |
| Create a catalog price rule > Add a Name and a Reduction > Save | Successful creation message is displayed |
| Go back to your product page > Refresh > Click on "Show catalog price rules" | See a new catalog price rule displayed |
| Click on Preview product | The FO is displayed<br>See the orange flag SAVE €6.00<br>The price is now 94€ |
