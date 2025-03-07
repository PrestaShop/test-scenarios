---
title: "Theme Customization module - Upgrade module"
weight: 1
---

# Theme Customization module - Upgrade module
## Details
* **Component** : ps_themecusto
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4156

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_themecusto | The module page list should be displayed and *Theme Customization* module should be displayed on the list |
| Click on "Upgrade" button at the right of the module | A modal is open with:<br> * *Title*: "Are you sure you want to upgrade this module?"<br> * *Description*: "We strongly advise you to upgrade the modules on maintenance mode to avoid any cache issues."<br> * *3 buttons*: "Cancel" / "Go to maintenance page" / "Upgrade anyway" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on "Upgrade" button at the right of the module | The modal is open again with the same informations (Title / Description / 3 buttons) |
| *Case 1: Upgrade with shop on maintenance*<br>Click on "Go to maintenance page" button | The "Maintenance" page is displayed |
| Set to "No" the "Enable store" switch button > Click on "Save" button | * A "Successful update" message is displayed<br> * "Enable store" is set to "No" and grey<br> * A "Maintenance mode" link is displayed on the header of the store |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the maintenance page |
| Go to BO > Modules > Module manager and search ps_themecusto | The module page list should be displayed and *Theme Customization* module should be displayed on the list |
| Click on "Upgrade" button at the right of the module | A modal is open with:<br> * *Title*: "Are you sure you want to upgrade this module?"<br> * *2 buttons*: "Cancel" / "Upgrade" |
| Click on "Cancel" button  or the cross on top right | * The modal is removed<br> * The module list page is displayed |
| Click on "Upgrade" button at the right of the module | The modal is open again with the same informations (Title / 2 buttons) |
| Click on "Upgrade" button in the modal | * After loading, a green message "Upgrade action on module ps_themecusto succeeded." is displayed<br> * The module is upgraded, the button at the right of the module is displaying "Disable Mobile" |
| Reload the page | The module should be:<br> * Upgraded and displayed "Disable Mobile" in the right button<br> * Displayed the latest version instead of the current to the new version<br> * Removed the green tag "Upgrade available" |
| Click on "Maintenance mode" link on the header | The "Maintenance" page is displayed |
| Set to "Yes" the "Enable store" switch button > Click on "Save" button | * A "Successful update" message is displayed<br> * "Enable store" is set to "Yes" and green<br> * The "Maintenance mode" link is removed from the header of the store |
| Go back to the FO > Reload the page | Homepage is well displayed |
| Go to BO > Design > Theme & Logo | * The "Theme & Logo" page is well displayed<br> * The "Pages Configuration" & "Advanced Customization" tabs are availabled |
| *Case 2: Upgrade without shop on maintenance*<br>Click on "Upgrade anyway" button | * After loading, a green message "Upgrade action on module ps_themecusto succeeded." is displayed<br> * The module is upgraded, the button at the right of the module is displaying "Disable Mobile" |
| Reload the page | The module should be:<br> * Upgraded and displayed "Disable Mobile" in the right button<br> * Displayed the latest version instead of the current to the new version<br> * Removed the green tag "Upgrade available" |
| Go to Design > Theme & Logo | * The "Theme & Logo" page is well displayed<br> * The "Pages Configuration" & "Advanced Customization" tabs are availabled |
