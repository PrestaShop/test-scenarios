---
title: "Mail alerts module - Merchant notifications - Enable/Disable out of stock"
weight: 7
---

# Mail alerts module - Merchant notifications - Enable/Disable out of stock
## Details
* **Component** : ps_emailalerts
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4122
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_emailalerts/02_configuration/02_merchantNotifications/02_enableDisableOutOfStock.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Merchant notifications": "Out of stock" is set to "Yes" |
| Go to stock management page, update the quantity of the created product un pre-condition to -3 | * A successful message "Settings updated." is displayed |
| Go to your email (pre-condition) > Check email received | The "Product out of stock" email is sent |
| Go back to BO, on "Configure" page of the module > Set to "No" the "Out of stock" switch button > Click on "Save" button | * A successful message "Settings updated successfully" is displayed<br> * Switch button is set to "No" and grey |
| Go to stock management page, update the quantity of the second created product un pre-condition to -3 | * A successful message "Settings updated." is displayed |
| Go to your email (pre-condition) > Check email received | * No email received<br> * The "Product out of stock" email must not be sent |