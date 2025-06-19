---
title: "BO - Shipping - Carriers - Quick Edit status and free shipping"
weight: 4
---

# BO - Shipping - Carriers - Quick Edit status and free shipping
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-972
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/09_shipping/01_carriers/04_quickEditStatusAndFreeShipping.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/shipping/carrier

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shipping > Carriers | Carriers page is well displayed |
| Disable the status of carrier ID = 1 on column Status | The status has been successfully updated. message is displayed<br>The status is disabled |
| Add any product to cart > Proceed to checkout > Fill in Step 1 and 2 > Click Continue | See Step 3 - Shipping method : only one carrier is displayed : My carrier |
| Enable the status of carrier ID = 3 on column Status | The status has been successfully updated. message is displayed<br>The status is enabled |
| Go back to FO > Refresh | See Step 3 - Shipping method : My carrier and My cheap carrier are displayed |
| Go to Free Shipping column and enable it for carrier ID = 2 | The status has been successfully updated. message is displayed<br>The Free Shipping is enabled |
| Go back to FO > Refresh | See Step 3 - Shipping method : My carrier and My cheap carrier are displayed<br>My carrier has free shipping |
| Go to Free Shipping column and enable it for carrier ID = 4 | The status has been successfully updated. message is displayed<br>The Free Shipping is enabled |
