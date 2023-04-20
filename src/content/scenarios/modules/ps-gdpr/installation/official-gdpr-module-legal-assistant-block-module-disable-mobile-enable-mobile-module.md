---
title: "Official GDPR module - Legal Assistant block module - Disable Mobile/Enable Mobile module"
weight: 6
---

# Official GDPR module - Legal Assistant block module - Disable Mobile/Enable Mobile module
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search Legal Assistant | The module page list should be displayed and *Legal Assistant block* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable Mobile" option | * After loading, a green message "Disable mobile action on module Legal Assistant succeeded." is displayed<br> * The module is disabled ONLY on mobile screens, the button at the right of the module is displaying "Configure" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Open the debugger in your browser and click on "Screens" icon > Choose into "Dimensions" Iphone 12 Pro for example | The screen of your shop is on mobile screen |
| Reload the page > Scroll down in the homepage and search the "Legal Assistant" block | The "Legal Assistant" block should not be displayed |
| Go back to BO > Module list page with Legal Assistant module displayed > Click on button at the right of the module and choose the "Enable Mobile" options into the list of options | * After loading, a green message "Enable mobile action on module Legal Assistant succeeded." is displayed<br> * The module is enabled on Mobile again, the button at the right of the module is displaying "Configure" |
| Go back to FO > Reload the page > Scroll down in the homepage and search the "Legal Assistant" block | The "Legal Assistant" block should be displayed |
