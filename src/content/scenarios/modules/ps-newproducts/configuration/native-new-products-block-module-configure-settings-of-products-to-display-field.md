---
title: "[Native] - New products block module - Configure settings of \"Products to display\" field"
weight: 1
---

# [Native] - New products block module - Configure settings of \"Products to display\" field
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_newproducts | The module page list should be displayed and *New products block* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * "Products to display" field is set to 8 by default<br> * "Number of days for which the product is considered 'new'" field is set to 20 by default |
| Change the value to this field by any number > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Scroll down in the homepage and search the "NEW PRODUCTS" block | The "NEW PRODUCTS" block should have 5 products displayed |
| Go back to BO, on "Configure" page of the module > Change the value by a negative number > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go back to FO > Reload the page | The "NEW PRODUCTS" block should have 10 products displayed |
| Go back to BO, on "Configure" page of the module > Change the value by a big number > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go back to FO > Reload the page | The "NEW PRODUCTS" block should have all current products displayed (19) |
| Go back to BO, on "Configure" page of the module > Change the value by number with space > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go back to FO > Reload the page | The "NEW PRODUCTS" block should have 1 product displayed |
| Go back to BO, on "Configure" page of the module > Change the value by nothing (empty field) or 0 > Click on "Save" button | An error message "Please complete the "products to display" field." is displayed |
| Go back to FO > Reload the page | The "NEW PRODUCTS" block should have always 1 product displayed |
| Go back to BO, on "Configure" page of the module > Change the value by any other character (text or specific characters) than numbers > Click on "Save" button | An error message "Invalid number." is displayed |
| Go back to FO > Reload the page | The "NEW PRODUCTS" block should always have 1 product displayed |
