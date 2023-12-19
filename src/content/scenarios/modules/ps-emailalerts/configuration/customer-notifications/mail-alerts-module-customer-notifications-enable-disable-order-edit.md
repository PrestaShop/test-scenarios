---
title: "Mail alerts module - Customer notifications - Enable/Disable order edit"
weight: 5
---

# Mail alerts module - Customer notifications - Enable/Disable order edit
## Details
* **Component** : ps_emailalerts
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4146
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_emailalerts/02_configuration/01_customerNotifications/02_enableDisableOrderEdit.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Customer notifications": "Order edit" is set to "Yes" |
| Go to Orders > Orders > Click on "View" icon of an order with a "Awaiting payment" status | The "Order details" page is displayed |
| Go to "Products" section > Click on "pen" icon of a product to update price or quantity > Click on "Save" button | A browser popup is opened with:<br> * text: "Are you sure?"<br> * 2 buttons: "Cancel" and "Ok" |
| Click on "Cancel" button | The browser popup is removed |
| Click on "Save" button again on the updated product | The browser popup is opened again |
| Click on "Ok" button | The "Products" section is updated with the new price or quantity chosen |
| Go to your email (pre-condition) > Check email received | The "Your order has been changed" email is sent |
| Click on "trash" icon of a product | A browser popup is opened with:<br> * text: "Are you sure?"<br> * 2 buttons: "Cancel" and "Ok" |
| Click on "Ok" button | The "Products" section is updated with the deletion of the product chosen |
| Go to your email (pre-condition) > Check email received | The "Your order has been changed" email is sent |
| Click on "Add a product" button of a product > Search a product > Click on "Add" button | * When product is found, prices of this one are automatically added<br> * The "Products" section is updated with the new product |
| Go to your email (pre-condition) > Check email received | The "Your order has been changed" email is sent |
| Go back to Modules > Module Manager > Search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Go back to Modules > Module Manager > Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Customer notifications": "Order edit" is set to "Yes" |
| Set to "No" the "Order edit" switch button > Click on "Save" button | * A successful message "Settings updated successfully" is displayed<br> * The "Order edit" switch button is set to "No" and is gray |
| Go to back to Orders > Orders > Click on "View" icon of an order with a "Awaiting payment" status | The "Order details" page is displayed |
| Update some elements of the order (steps 4 to 13) > Click on "Save" or "Add" button in terms of the case | The "Products" section is updated with those changes |
| Go to your email (pre-condition) > Check email received | No email must not be sent with all those changes |
