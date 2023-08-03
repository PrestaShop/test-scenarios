---
title: "BO - Payments - Preferences - Edit Group restrictions"
weight: 2
---

# BO - Payments - Preferences - Edit Group restrictions
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-982

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Customers > Customers > Add 2 new customer > 1 visitor & 1 guest > Save | Successful creation message is displayed |
| Go to BO > Payment > Preferences > Scroll to Group restrictions block | Currency restrictions block is displayed<br><br>All Payment methods are checked for all Groups |
| Click on Bank Transfer to uncheck the payment method for all groups > Save | Message Successful update is displayed |
| Go to FO > Add product to cart > Process to checkout until Step 4 (Payment) | See only 2 payments available : COD and Check |
| Go back to BO > Uncheck COD and Payment by check > Save | Message Successful update is displayed |
| Go to FO > Refresh the page | See only bank wire payment available |
| Go to BO > Payment > Preferences > Scroll to Group restrictions block :<br>- uncheck COD for Visitor<br>- uncheck Payment by check for Guest | Successful update message is displayed |
| Go to FO > Log into your visitor account > Add product to cart > Proceed to checkout until Step 4 | See only Pay by Check is available |
| Log out from your Visitor account | Your shopping cart is empty |
| Log into your guest account > Add product to cart > Proceed to checkout until Step 4 | See only Pay by Cash on Delivery is available |
| Log out from your Guest account | Your shopping cart is empty |
