---
title: "Category products module- Number of product to display"
weight: 2
---

# Category products module- Number of product to display
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_categoryproducts | The module page list should be displayed and *Products in the same category* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * "Display products' prices" is enabled by default<br> * "Number of product to display" field is set to 16 by default |
| Change the value to this field by any number > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go to FO > Click on a product | * The product page should be displayed.<br> * If you scroll down, you see "other products in the same category" block with only 3 products displayed |
| Go back to BO, on "Configure" page of the module > Change the value by a negative number > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go to FO > Reload the page of the product | The "other products in the same category" block is not displayed |
| Go back to BO, on "Configure" page of the module > Change the value by a big number > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go to FO > Reload the page of the product | The "other products in the same category" block with only 6 products displayed (the number of available products) |
| Go back to BO, on "Configure" page of the module > Change the value by number with space > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go to FO > Reload the page of the product | The "other products in the same category" block with only 1 product displayed |
| Go back to BO, on "Configure" page of the module > Change the value by 0 > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go to FO > Reload the page of the product | The "other products in the same category" block is not displayed |
| Go back to BO, on "Configure" page of the module > Change the value by any other character (text or specific characters) than numbers > Click on "Save" button | A successful message "The settings have been updated." is displayed |
| Go to FO > Reload the page of the product | The "other products in the same category" block is not displayed |
