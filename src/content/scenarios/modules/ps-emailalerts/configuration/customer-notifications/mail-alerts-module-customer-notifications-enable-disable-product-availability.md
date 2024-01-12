---
title: "Mail alerts module - Customer notifications - Enable/Disable product availability"
weight: 4
---

# Mail alerts module - Customer notifications - Enable/Disable product availability
## Details
* **Component** : ps_emailalerts
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4145
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_emailalerts/02_configuration/01_customerNotifications/01_enableDisableProductAvailability.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Catalog > Products > Click on the product created to go to its product details page (pre-condition) > On "Basic settings" tab, set 0 in "Quantity field > Click on "Save" button and click on "Preview" button | * A successful message "Settings updated." is displayed<br> * A new tab of this product page on FO is opened |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Customer notifications": "Product availability" is set to "Yes" |
| *Case 1: You are not logged to your account on FO*<br>* Set to "No" the "Product availability" switch button > Click on "Save" button | * A successful message "Settings updated successfully" is displayed<br> * The "Product availability" switch button is set to "No" and is gray |
| Go to FO tab of your product opened earlier > Reload the page | * A "Out-of-Stock" text is displayed below the quantity and "Add to cart" button<br> * There is no block added to be notified when it's available again |
| Go back to BO on "Configure" page of the module > Set to "Yes" the "Product availability" switch button > Click on "Save" button | * A successful message "Settings updated successfully" is displayed<br> * The "Product availability" switch button is set to "Yes" and is green |
| Go back to FO on your product > Reload the page | * A "Out-of-Stock" text is displayed below the quantity and "Add to cart" button<br> * A new block is displayed below the "Share" buttons with:<br> ** an empty email field<br> ** a "Notify me when available" button |
| Fill the "Email" field with a valid email > Click on "Notify me when available" button | * The block is updated and displayed only a successful message "Request notification registered" is displayed<br> * Empty email field and "Notify me when available" button are removed |
| Reload the page > Fill the "Email" field with an unvalid email > Click on "Notify me when available" button | * The block is updated<br> * An error message "Your e-mail address is invalid" is displayed below the "Notify me when available" button |
| Reload the page > Fill the "Email" field with numbers > Click on "Notify me when available" button | * The block is updated<br> * An error message "Your e-mail address is invalid" is displayed below the "Notify me when available" button |
| Reload the page > Fill the "Email" field with specific characters > Click on "Notify me when available" button | * The block is updated<br> * An error message "Your e-mail address is invalid" is displayed below the "Notify me when available" button |
| *Case 2: You are logged in to your account on FO*<br> Go back to BO on "Configure" page of the module > Set to "No" the "Product availability" switch button > Click on "Save" button | * A successful message "Settings updated successfully" is displayed<br> * The "Product availability" switch button is set to "No" and is gray |
| Go to this tab on FO of the product > Click on "Sign in" link in the header > Fill the form with your logins > Click on "Sign in" button | * You are logged in<br> * The product page is displayed<br> * A "Out-of-Stock" text is displayed below the quantity and "Add to cart" button<br> * There is no block added to be notified when it's available again |
| Go back to BO on "Configure" page of the module > Set to "Yes" the "Product availability" switch button > Click on "Save" button | * A successful message "Settings updated successfully" is displayed<br> * The "Product availability" switch button is set to "Yes" and is green |
| Go back to FO on your product > Reload the page | * A "Out-of-Stock" text is displayed below the quantity and "Add to cart" button<br> * A new block is displayed below the "Share" buttons with a "Notify me when available" button |
| Click on "Notify me when available" button | * The block is updated and displayed only a successful message "Request notification registered" is displayed<br> * "Notify me when available" button are removed |
| Reload the page | new info alert is displayed "You will be notified when available" |
| Go to BO > Products > Edit the product > Add a quantity of 1 > Save | Successful update message is displayed<br><br>Email Product available is sent to customer |
| Open the created product in FO > Add to cart >  Process to checkout | YOUR ORDER IS CONFIRMED |
| Go to BO > Orders > Change status of latest order to Delivered | Successful update alert is displayed |
| Go to BO > Orders > Change status of latest order to Delivered | Successful update alert is displayed |
| Go to FO > Product page > Click on Notify me when available | Request notification registered message is displayed |
| Go to BO > View Order > Click on Return products > Check Quantity : 1 > Return products | The product was successfully returned. message is displayed |
| Check your emails | Email titled Product available is sent to customer |
| Go to BO > Edit product > Quantity change to 0 > Save | Successful update message is displayed |
| Go to FO > Product page > Click on Notify me when available | Request notification registered message is displayed |
| Go to BO > Catalog > Stock > Check Display products below low stock level first > Add quantity of 1 to your product with no stock > Click Apply new quantity | Stock successfully updated message is displayed<br><br>Check the email : Email titled Product available is sent to registered user |
