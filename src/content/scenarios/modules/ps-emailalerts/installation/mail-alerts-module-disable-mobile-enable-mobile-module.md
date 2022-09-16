---
title: "Mail alerts module - Disable Mobile/Enable Mobile module"
weight: 9
---

# Mail alerts module - Disable Mobile/Enable Mobile module
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_emailalerts | The module page list should be displayed and *Mail alerts* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable Mobile" option | * After loading, a green message "Disable mobile action on module ps_emailalerts succeeded." is displayed<br> * The module is disabled ONLY on mobile screens, the button at the right of the module is displaying "Configure" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Open the debugger in your browser and click on "Screens" icon > Choose into "Dimensions" Iphone 12 Pro for example | The screen of your shop is on mobile screen |
| Scroll down in the homepage and search the "POPULAR PRODUCTS" block > Click on "All products" link | The "Home" category page is displayed |
| Scroll down on this page > Click on the second page of the list > Find your product created (pre-condition) with 0 on quantity > Click on it | * The product page details is displayed<br> * Mail alerts block on the page should be not displayed |
| Go back to BO > Module list page with ps_newproducts module displayed > Click on button at the right of the module and choose the "Enable Mobile" options into the list of options | * After loading, a green message "Enable mobile action on module ps_emailalerts succeeded." is displayed<br> * The module is enabled on Mobile again, the button at the right of the module is displaying "Configure" |
| Go back to FO > Reload the page | The Mail alerts block should be displayed below the share buttons with:<br> * an empty email field<br> * a "Notify me when available" button |
