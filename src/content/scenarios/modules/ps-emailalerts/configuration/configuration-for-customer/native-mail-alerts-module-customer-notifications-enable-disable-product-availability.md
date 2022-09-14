---
title: "[Native] - Mail alerts module - Customer notifications - Enable/Disable product availability"
weight: 4
---

# [Native] - Mail alerts module - Customer notifications - Enable/Disable product availability
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Customer notifications": "Product availability" is set to "Yes" |
| Go to Catalog > Products > Click on the product created to go to its product details page (pre-condition) > On "Basic settings" tab, set 0 in "Quantity field > Click on "Save" button and click on "Preview" button | * A successful message "Settings updated." is displayed<br> * A new tab of this product page on FO is opened |
| *Case 1: You are not logged to your account*<br>Go to this tab on FO of the product | * A "Out-of-Stock" text is displayed below the quantity and "Add to cart" button<br> * A new block is displayed below the "Share" buttons with:<br> ** an empty email field<br> ** a "Notify me when available" button |
| Fill the "Email" field with a valid email > Click on "Notify me when available" button | * The block is updated and displayed only a successful message "Request notification registered" is displayed<br> * Empty email field and "Notify me when available" button are removed |
| Reload the page > Fill the "Email" field with an unvalid email > Click on "Notify me when available" button | * The block is updated<br> * An error message "Your e-mail address is invalid" is displayed below the "Notify me when available" button |
| Reload the page > Fill the "Email" field with numbers > Click on "Notify me when available" button | * The block is updated<br> * An error message "Your e-mail address is invalid" is displayed below the "Notify me when available" button |
| Reload the page > Fill the "Email" field with specific characters > Click on "Notify me when available" button | * The block is updated<br> * An error message "Your e-mail address is invalid" is displayed below the "Notify me when available" button |
| *Case 1: You are logged to your account*<br>Go to this tab on FO of the product > Click on "Sign in" link in the header > Fill the form with your logins > Click on "Sign in" button | * You are logged in<br> * The product page is displayed<br> * A "Out-of-Stock" text is displayed below the quantity and "Add to cart" button<br> * A new block is displayed below the "Share" buttons with a "Notify me when available" button |
| Click on "Notify me when available" button | * The block is updated and displayed only a successful message "Request notification registered" is displayed<br> * "Notify me when available" button are removed |
| Reload the page | The block is removed from the product page |
