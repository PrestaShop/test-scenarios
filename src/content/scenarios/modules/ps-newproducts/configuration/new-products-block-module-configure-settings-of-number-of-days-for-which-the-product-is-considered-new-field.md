---
title: "New products block module - Configure settings of \"Number of days for which the product is considered \'new\'\" field"
weight: 3
---

# New products block module - Configure settings of \"Number of days for which the product is considered \'new\'\" field
## Details
* **Component** : ps_newproducts
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4135

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_newproducts | The module page list should be displayed and *New products block* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * "Products to display" field is set to 8 by default<br> * "Number of days for which the product is considered 'new'" field is set to 20 by default |
| Change the value to this field by any number > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Scroll down in the homepage and search the "NEW PRODUCTS" block | The "NEW PRODUCTS" block is always displayed (for 3 consecutive days) |
| Go back to BO, on "Configure" page of the module > Change the value by a negative number > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go back to FO > Reload the page | The "NEW PRODUCTS" block should not be displayed |
| Go back to BO, on "Configure" page of the module > Change the value by a big number > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go back to FO > Reload the page | The "NEW PRODUCTS" block should not be displayed |
| Go back to BO, on "Configure" page of the module > Change the value by number with space > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go back to FO > Reload the page | The "NEW PRODUCTS" block should not be displayed |
| Go back to BO, on "Configure" page of the module > Change the value by 0 > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go back to FO > Reload the page | The "NEW PRODUCTS" block should be not displayed |
| Go back to BO, on "Configure" page of the module > Change the value by any other character (text or specific characters) than numbers > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go back to FO > Reload the page | The "NEW PRODUCTS" block should be not displayed |
