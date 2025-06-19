---
title: "BO - Shipping - Preferences - Default carrier"
weight: 3
---

# BO - Shipping - Preferences - Default carrier
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-978
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/09_shipping/02_preferences/02_carrierOptions/01_defaultCarrier.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/shipping/preference

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO>Shipping > Preferences | the Preferences  page is displayed |
| Go to  Carrier options> change the Default carrier> click save | An alert "Update successful." is displayed. |
| Go to FO>Cart>shipping method | The default shipping method is : My cheap carrier |
| Go to  Carrier options> change the Default carrier> click save | An alert "Update successful." is displayed. |
| Go to FO>Cart>shipping method | The default shipping method is : My carrier |
| Go to  Carrier options> change the Default carrier> click save | An alert "Update successful." is displayed. |
| Go to FO>Cart>shipping method | The default shipping method is : Click and collect |
