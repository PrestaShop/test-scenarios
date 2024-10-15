---
title: "Upgrade Shop with major release"
weight: 3
---

# Upgrade Shop with major release
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-9182

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to [https://github.com/PrestaShop/PrestaShop/releases] > Search for 1.7.8.11 zip > Install PS 1.7.8.11 | Your installation is finished! |
| Go to BO > Delete install folder > Log into your employee account | BO Dashboard is displayed |
| Go to Modules > Marketplace > Search for module 1-click upgrade > Click Install > Click Configure | Configuration page of the module 1-Click Upgrade is displayed |
| Go to the Shop Parameters > General > Maintenance tab > Disable your shop > Save | Successful update message is displayed.<br>Maintenance mode is activated. |
| Go to Modules > Modules Manager > Click on Configure for 1-Click Upgrade module | Configuration page of the module 1-Click Upgrade is displayed |
| In Expert mode block > Select "Major release" | In Start Your Upgrade block, you will see :<br><br>Your current PrestaShop version: *1.7.8.11*<br>Your current PHP version: *7.4.33*<br>Latest official version for minor channel.: *1.7.8 stable - (1.7.8.11)* |
| Click on Save | You will have a blue notification with message "_Configuration successfully updated. This page will now be reloaded and the module will check if a new version is available._" |
| Launch upgrade by clicking on Update PrestaShop Now button | Upgrade is launched. Activity log is displayed.Upgrade is launched |
| Upgrade is successful | Message "Your store is up to date" is displayed |
| Refresh the page > Log into your employee account > Check PrestaShop version | PrestaShop version is 8.2.0 |
| Go to the BO login page. Log in with admin user. Check shop version | Admin user is connected. Version is upgraded |
| Go to the Shop Parameters > General > Maintenance tab > Enable store : YES > Save | Successful update message is displayed |
| Click on View my store | FO is displayed correctly |
