---
title: "Upgrade Shop with minor release"
weight: 2
---

# Upgrade Shop with minor release
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-9176

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to https://github.com/PrestaShop/PrestaShop/releases > Search for 8.1.5 zip > Install PS 8.1.5 | Your installation is finished! |
| Go to BO > Delete install folder > Log into your employee account | BO Dashboard is displayed |
| Go to Modules > Modules manager > Install 1-click upgrade | Install action on module autoupgrade succeeded. |
| Go to the Shop Parameters > General > Maintenance tab > Disable your shop > Save | Successful update message is displayed.<br>Maintenance mode is activated. |
| Go to Modules > Modules Manager > Click on Configure for 1-Click Upgrade module | Configuration page of the module 1-Click Upgrade is displayed |
| In Expert mode block > Select "*Minor release (recommended)" | In Start Your Upgrade block, you will see :<br>Your current PrestaShop version: *8.1.5*<br>Your current PHP version: *8.1.13*<br>Latest official version for minor channel.: *8 stable - (8.2.0)* |
| Click on Save | You will have a blue notification with message "_Configuration successfully updated. This page will now be reloaded and the module will check if a new version is available._" |
| Launch upgrade by clicking on Update PrestaShop Now button | Upgrade is launched. Activity log is displayed. |
| Upgrade is successful | Message "Your store is up to date" is displayed |
| Refresh the page > Log into your employee account > Check PrestaShop version | PrestaShop version is 8.2.0 |
| Go to the Shop Parameters > General > Maintenance tab > Enable store : YES > Save | Successful update message is displayed |
| Click on View my store | FO is displayed correctly |
