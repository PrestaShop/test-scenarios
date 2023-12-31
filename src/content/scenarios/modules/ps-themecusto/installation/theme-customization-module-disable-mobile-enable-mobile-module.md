---
title: "Theme Customization module - Disable Mobile/Enable Mobile module"
weight: 6
---

# Theme Customization module - Disable Mobile/Enable Mobile module
## Details
* **Component** : ps_themecusto
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4161

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_themecusto | The module page list should be displayed and *Theme Customization* module should be displayed on the list |
| Click on "Disable Mobile" button at the right of the module | * After loading, a green message "Disable mobile action on module ps_themecusto succeeded." is displayed<br> * The module is disabled ONLY on mobile screens, the button at the right of the module is displaying "Enable Mobile" |
| Open the debugger in your browser and click on "Screens" icon > Choose into "Dimensions" Iphone 12 Pro for example | The screen of your shop is on mobile screen |
| Go to Design > Theme & Logo | * The "Theme & Logo" page is well displayed<br> * The "Pages Configuration" & "Advanced Customization" tabs are not available only on mobile screen |
| Go back to BO > Module list page with ps_themecusto module displayed > Click on button at the right of the module and choose the "Enable Mobile" options into the list of options | * After loading, a green message "Enable mobile action on module ps_themecusto succeeded." is displayed<br> * The module is enabled on Mobile again, the button at the right of the module is displaying "Disable Mobile" |
| Go to Design > Theme & Logo > Reload the page | * The "Theme & Logo" page is well displayed<br> * The "Pages Configuration" & "Advanced Customization" tabs are available |
