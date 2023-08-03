---
title: "dashtrends - Disable, Enable, Reset, uninstall, upload and upgrade module"
weight: 2
---

# dashtrends - Disable, Enable, Reset, uninstall, upload and upgrade module
## Details
* **Component** : dashtrends
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-580

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module Manager disable the dashtrends module. Go to Dashboard page | The module is no longer displayed |
| Go to BO > Modules > Module Manager enable the dashtrends module. Go to Dashboard page | The module is displayed with data and graphs. |
| Go to BO > Modules > Module Manager reset the dashtrends module. Go to Dashboard page | The module is displayed with data and graphs. |
| Go to BO > Modules > Module Manager uninstall the dashtrends module. Check the list of installed modules then Go to Dashboard page | The module is not in the installed modules and on Dashboard the module is no longer displayed |
| Go to BO > Modules > Module Manager upload the dashtrends module. Check the list of installed modules then Go to Dashboard page | The module is in the installed modules and on Dashboard the module is displayed. |
| Go to BO > Modules > Module Manager uninstall the dashtrends module. Install the previous version of the module from Module Catalog | The module is in the installed modules and on Dashboard the module is displayed (without the updated parts in the module) |
| Go to BO > Modules > Module Manager upload the new version dashtrends module. Go to Dashboard page | On Dashboard the module is displayed with the updated parts in the module. |
