---
title: "Mail alerts module - Merchant notifications - Enable/Disable out of stock"
weight: 7
---

# Mail alerts module - Merchant notifications - Enable/Disable out of stock
## Details
* **Component** : ps_emailalerts
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-4122

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Merchant notifications": "Out of stock" is set to "Yes" |
| Go to Catalog > Products > Click on the product created to go to its product details page (pre-condition) > On "Basic settings" tab, set 2 in "Quantity field > Click on "Save" button and click on "Preview" button | * A successful message "Settings updated." is displayed<br> * A new tab of this product page on FO is opened |
| Go to this tab on FO of the product | A "Last items in stock" text is displayed below the quantity and "Add to cart" button |
| Go to your email (pre-condition) > Check email received | The "Product out of stock" email is sent |
| Go back to BO, on "Configure" page of the module > Set to "No" the "Out of stock" switch button > Click on "Save" button | * A successful message "Settings updated successfully" is displayed<br> * Switch button is set to "No" and grey |
| Go to your email (pre-condition) > Check email received | * No email received<br> * The "Product out of stock" email must not be sent |
