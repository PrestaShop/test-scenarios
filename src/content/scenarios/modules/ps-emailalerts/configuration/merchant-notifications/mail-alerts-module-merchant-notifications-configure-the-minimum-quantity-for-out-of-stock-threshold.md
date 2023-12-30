---
title: "Mail alerts module - Merchant notifications - Configure the minimum quantity for out of stock (Threshold)"
weight: 8
---

# Mail alerts module - Merchant notifications - Configure the minimum quantity for out of stock (Threshold)
## Details
* **Component** : ps_emailalerts
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4123

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Merchant notifications": "Threshold" is set to 3 by default |
| Go to Catalog > Products > Click on the product created to go to its product details page (pre-condition) > On "Basic settings" tab, set 2 in "Quantity field > Click on "Save" button and click on "Preview" button | * A successful message "Settings updated." is displayed<br> * A new tab of this product page on FO is opened |
| Go to this tab on FO of the product | A "Last items in stock" text is displayed below the quantity and "Add to cart" button |
| Go to your email (pre-condition) > Check email received | The "Product out of stock" email is sent |
| Go back to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Merchant notifications": "Threshold" is set to 3 by default |
| Change the value of "Threshold" field by a smaller number of the quantity of our product > Click on "Save" button | A successful message "Settings updated successfully." is displayed |
| Go to your email (pre-condition) > Check email received | * No email received<br> * The "Product out of stock" email must not be sent |
| Go back to BO, on "Configure" page of the module > Change the value of "Threshold" field by a negative number > Click on "Save" button | A successful message "Settings updated successfully." is displayed |
| Go to your email (pre-condition) > Check email received | * No email received<br> * The "Product out of stock" email must not be sent |
| Go back to BO, on "Configure" page of the module > Change the value of "Threshold" field by a big number > Click on "Save" button | A successful message "Settings updated successfully." is displayed |
| Go to your email (pre-condition) > Check email received | * No email received<br> * The "Product out of stock" email must not be sent |
| Go back to BO, on "Configure" page of the module > Change the value of "Threshold" field by number with space > Click on "Save" button | A successful message "Settings updated successfully." is displayed |
| Go to your email (pre-condition) > Check email received | * No email received<br> * The "Product out of stock" email must not be sent |
| Go back to BO, on "Configure" page of the module > Change the value of "Threshold" field by nothing (empty field) or 0 > Click on "Save" button | A successful message "Settings updated successfully." is displayed |
| Go to your email (pre-condition) > Check email received | * No email received<br> * The "Product out of stock" email must not be sent |
| Go back to BO, on "Configure" page of the module > Change the value of "Threshold" field by any other character (text or specific characters) than numbers > Click on "Save" button | A successful message "Settings updated successfully." is displayed |
| Go to your email (pre-condition) > Check email received | * No email received<br> * The "Product out of stock" email must not be sent |