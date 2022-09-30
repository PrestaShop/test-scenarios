---
title: "Mail alerts module - Merchant notifications - Configure email addresses"
weight: 10
---

# Mail alerts module - Merchant notifications - Configure email addresses
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * There are 2 sections: "Customer notifications" and "Merchant notifications"<br> * On "Merchant notifications": "Email addresses" is set with your email by default (xx@xx.com) |
| Go to Catalog > Products (open it in a new tab) > Click on the product created to go to its product details page (pre-condition) > On "Basic settings" tab, set 2 in "Quantity field > Click on "Save" button | A successful message "Settings updated." is displayed |
| Go to your email (pre-condition) > Check email received | The "Product out of stock" email is sent at your email saved: xx@xx.com |
| Go back to BO, on "Configure" page of the module > Add a new address below the first one > Click on "Save" button | * A successful message "Settings updated successfully" is displayed<br> * Both emails are saved in "Email addresses" field |
| Go to back to your product details page tab > Click on "Save" button without change nothing | A successful message "Settings updated." is displayed |
| Go to your email (pre-condition) > Check email received | The "Product out of stock" email is sent at your email saved: <br> * [xx@xx.com|mailto:xx@xx.com]<br> * tt@tt.com |
| Go back to BO, on "Configure" page of the module > Add a new address beside the first one > Click on "Save" button | An error message "Invalid email: xx@xx.com tt@tt.com" is displayed |
| Add a new address beside the first one with a "," between those addresses > Click on "Save" button | A successful message "Settings updated." is displayed |
| Go to  back to your product details page tab > Click on "Save" button without change nothing | A successful message "Settings updated." is displayed |
| Go to your email (pre-condition) > Check email received | The "Product out of stock" email is sent at your email saved: <br> * [xx@xx.com|mailto:xx@xx.com]<br> * tt@tt.com |
| Go back to BO, on "Configure" page of the module > Replace the first email by another incorrect one > Click on "Save" button | An error message "Invalid email: ee@ff." is displayed |
| Replace the incorrect one by some numbers or text without"@" > Click on "Save" button | An error message "Invalid email: 12345" or "Invalid email: test" is displayed |
| Replace the incorrect one by any specific characters > Click on "Save" button | An error message "Invalid email: **¨¨^^@" is displayed |
