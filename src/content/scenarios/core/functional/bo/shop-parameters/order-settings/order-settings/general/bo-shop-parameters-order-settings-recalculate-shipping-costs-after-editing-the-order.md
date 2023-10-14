---
title: "BO - Shop Parameters - Order Settings - Recalculate shipping costs after editing the order"
weight: 5
---

# BO - Shop Parameters - Order Settings - Recalculate shipping costs after editing the order
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1053
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/02_orderSettings/01_orderSettings/general/05_recalculateShippingCosts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Order Settings > General block | Recalculate shipping costs after editing the order is set to YES |
| Go to BO -> Orders page and click on Add new Order | The Create order page is displayed |
| Search customer 'John DOE' and choose it | The customer-checkout-history block, the cart block and the address block are displayed |
| choose product with quantity = 4 and add it to cart | The product table is displayed, the Shipping block is displayed and the summary block is displayed |
| Choose delivery method (free) | Delivery method is selected |
| Choose Payment method | Payment method is selected |
| Choose order status | Order status is selected |
| Click on "Create the order" | The order details page is displayed with exact data:<br><br># Order status<br># Order Price<br># Shipping Address<br># Invoice Address<br># Product name |
| Go to Orders > Orders > Edit the latest order > Go to tab Carriers(1) > Edit > Choose another carrier > Update | Message Successful update is displayed<br><br>In tab Carriers(1), see that the Shipping cost has been updated. |
| Go back to BO > Shop Parameters > Order Settings > General block > Set Recalculate shipping costs after editing the order to NO > Save | Message Successful update is displayed |
| Go back to your latest order > Go to tab Carriers(1) > Edit > Choose another carrier > Update | Message Successful update is displayed<br><br>In tab Carriers(1), see that the Shipping cost is the same as before. |
