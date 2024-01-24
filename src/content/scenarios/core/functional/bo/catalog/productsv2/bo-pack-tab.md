---
title: "BO - Pack Tab"
weight: 15
---

# BO - Pack Tab
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-5211
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/12_packTab.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > New product > Choose Pack of products > Add new product > Add title : My pack > Save | Successful update message is displayed |
| Go to Pack Tab > Search by product name : "shirt" > Choose "Hummingbird printed t-shirt: Size - S, Color - White" > Save and publish | 1 product is available in the Pack product<br><br>Successful update message is displayed |
| Search by reference "demo_14" > Choose Customizable mug > Save and publish | 2 products are available in the Pack product<br><br>Successful update message is displayed |
| Edit quantity of Hummingbird printed t-shirt = 4 > Save and publish | Successful update message is displayed |
| Delete Customizable mug > Delete > Save and publish | 1 product is available in the Pack product<br><br>Successful update message is displayed |
| Search by reference "demo_9" > Choose "Brown bear notebook: Paper Type - Ruled" > Save an publish | Successful update message is displayed |
| Add Stock = 100 > Go to Pricing > Edit Retail price (tax incl.) = 25€ > Save and publish | Successful update message is displayed |
| Click Preview | Product page is displayed:<br>Price is 25€ Instead of €107.26<br><br>This pack contains<br> - Hummingbird printed t-shirt: Size - S, Color - White x4<br> - Brown bear notebook: Paper Type - Ruled x1 |
| Add to cart > Proceed to checkout | YOUR ORDER IS CONFIRMED |
| Go back to BO > Edit "My pack" > Pack tab | See that Stock = 99 |
| Go to BO > Orders > Change order status to : Delivered | Successful update message is displayed |
| Go back to BO > Edit "My pack" > Pack tab > Stocks | See in Recent stock movements :<br><br>Date & Time : Shipped products<br><br>Quantity : -1 |
| Go back to BO > Edit "My pack" > Pack tab > Pack quantities > Check "Decrement products in pack only." > Save | Successful update Message is displayed |
| Click Preview > In FO > Add product to cart > Proceed to order | YOUR ORDER IS CONFIRMED |
| Go to BO > Products listing | See that both products have decreased their quantity.<br><br>Hummingbird printed t-shirt = 2396<br>Brown bear notebook = 1199 |
