---
title: "BO - Payments - Preferences - Edit Carrier restrictions"
weight: 4
---

# BO - Payments - Preferences - Edit Carrier restrictions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-984
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/10_payment/02_preferences/04_carrierRestrictions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Payment> Preferences | Preferences page is well displayed |
| Go to Carrier restrictions | All carrier restrictions are checked on : <br> * Bank transfer<br> * Cash on delivery (COD)<br> * Payments by check |
| Go to My carrier (Delivery next day!) line and uncheck *Bank transfer* and *Cash on delivery (COD) >* click on save button | Successful update message is displayed.<br><br>Only *Payments by check* is checked. |
| Go to Shipping Method and choose a method,<br><br>continue | Payment method  is now displayed ( only [Payments by check|http://0.0.0.0:8082/811/prestashop/admin-dev/index.php/improve/payment/preferences?_token=A6pVBlV1Lw3COc5xoLhUlFTyNUk0IM0rjp2A9EBAOhk#] is displayed) |
| Go to Payment | Only *_Pay by Check_* method is available |
| Go back Go to BO> Payment> Preferences | Preferences page is well displayed |
| Go to Carrier restrictions> My carrier (Delivery next day!) line and check *Bank transfer* and *Cash on delivery (COD)*,<br><br>> save | All carrier restrictions are checked on : <br> * Bank transfer<br> * Cash on delivery (COD)<br> * Payments by check |
| Go to Shipping Method and choose a method,<br><br>continue | Payment method is now displayed |
| Go to Payment | All methods are available : <br> * Bank transfer<br> * Cash on delivery (COD)<br> * Payments by check |
| Go back Go to BO> Payment> Preferences> Carrier restrictions<br><br>Click and collect (Pick up in-store) line and uncheck *Bank transfer* and *Cash on delivery (COD)*,<br><br>save | Successful update message is displayed.<br><br>Only *Payments by check* is checked. |
| Go to Shipping Method and choose a method,<br><br>continue | Payment method is now displayed |
| Go to Payment | All Payments by check method is available |
