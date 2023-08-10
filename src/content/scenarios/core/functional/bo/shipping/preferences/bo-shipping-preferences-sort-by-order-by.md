---
title: "BO - Shipping - Preferences - Sort by Order By"
weight: 2
---

# BO - Shipping - Preferences - Sort by Order By
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-977
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/09_shipping/02_preferences/02_carrierOptions/02_updateCarriersSortOptiontests/UI/campaigns/functional/BO/09_shipping/02_preferences/02_carrierOptions/02_updateCarriersSortOption.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO>Shipping > Preferences | the Preferences  page is displayed |
| Go to  Carrier options> change the sort by and order by<br><br>> click save | An alert "Update successful." is displayed. |
| Go to FO>Cart>shipping method | The order of shipping method is :<br> * Click and collect<br> * My carrier<br> * My cheap carrier<br> * My light carrier |
| Go to  Carrier options> change the sort by and order by<br><br>> click save | An alert "Update successful." is displayed. |
| Go to FO>Cart>shipping method | The order of shipping method is :<br> * My light carrier<br> * My cheap carrier<br> * My carrier<br> * Click and collect |
| Go to  Carrier options> change the sort by and order by<br><br>> click save | An alert "Update successful." is displayed. |
| Go to FO>Cart>shipping method | The order of shipping method is :<br> * My carrier<br> * My cheap carrier<br> * My light carrier<br> * Click and collect |
| Go to  Carrier options> change the sort by and order by<br><br>> click save | An alert "Update successful." is displayed. |
| Go to FO>Cart>shipping method | The order of shipping method is :<br> * Click and collect<br> * My light carrier<br> * My cheap carrier<br> * My carrier |
