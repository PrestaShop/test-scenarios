---
title: "BO - Shipping - Carriers - Change position"
weight: 5
---

# BO - Shipping - Carriers - Change position
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-973
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/09_shipping/01_carriers/05_changePosition.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/shipping/carrier

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Add any product to your cart > Proceed to checkout > Proceed to checkout | Shopping cart page is displayed |
| Fill in Step 1 and Step 2 > Click on Continue | See Step 3 - Shipping method is displayed<br># Click and Collect<br># My carrier |
| Go to BO > Shipping > Preferences | Preferences page is displayed |
| Scroll down to Carrier options > Sort by : Position > Save | Update successful message is displayed |
| Go to BO > Shipping > Carriers | Carriers page is displayed |
| On position column, click on the position of the first carrier and drop it to the second line. | Successful update toast is displayed.<br><br>Carrier position is saved. |
| Go back to FO > Refresh the page | See Step 3 - Shipping method is displayed<br><br> # My carrier<br> # Click and Collect |
