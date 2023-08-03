---
title: "BO - Shipping - Preferences - Default carrier"
weight: 3
---

# BO - Shipping - Preferences - Default carrier
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-978

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
