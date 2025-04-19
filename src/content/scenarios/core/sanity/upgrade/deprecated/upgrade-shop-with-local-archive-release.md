---
title: "Upgrade Shop with local archive release"
weight: 4
---

# Upgrade Shop with local archive release
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-9494

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to [https://github.com/PrestaShop/PrestaShop/releases] > Search for 8.1.5 zip > Install PS 8.1.5 | Your installation is finished! |
| Go to BO > Delete install folder > Log into your employee account | BO Dashboard is displayed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Go to Modules > Modules manager > Install 1-click upgrade | Install action on module autoupgrade succeeded. |
| Go to the Shop Parameters > General > Maintenance tab > Disable your shop > Save | Successful update message is displayed.<br>Maintenance mode is activated. |
| Go to Modules > Modules Manager > Click on Configure for 1-Click Upgrade module | Configuration page of the module 1-Click Upgrade is displayed |
| In Expert mode block > Select "Local Archive" > Click Save | Notification "No archive and no XML file have been selected." is displayed |
| * Go to https://nightly.prestashop-project.org/?version=8.1.x > Download the latest zip for 8.1.7<br>* Go to https://nightly.prestashop-project.org/?version=8.0.x > Download the latest xml for 8.0.5 | Zip for 8.1.7 and xml for 8.0.5 are well downloaded |
| Put the zip for 8.1.7 and xml for 8.0.5 in the folder your_shop/adminXXX/autoupgrade/download | Zip 8.1.7 and xml 8.0.5 are in the folder autoupgrade/download of your shop |
| Go back to BO > In configuration of module 1-click upgrade > Refresh the page > Choose Local archive | 2 new fields are displayed : <br>- Archive to use<br>- XML file to use |
| Select the zip in Archive to use > Select the xml in XML file to use > Click Save | A blue notification is displayed "Prestashop version detected in the xml (8.0.5) does not match the zip version (8.1.7)." |
| Go to [https://nightly.prestashop-project.org/?version=develop] > Download the latest zip and xml for develop version | Zip and xml for develop/9.0.0 are well downloaded |
| Put the zip and xml for develop/9.0.0 in the folder your_shop/adminXXX/autoupgrade/download > Click Save | Zip and xml for develop/9.0.0 are in the folder autoupgrade/download of your shop |
| Go back to BO > In configuration of module 1-click upgrade > Refresh the page > Choose Local archive > Select the zip develop/9.0.0 in Archive to use > Select the xml develop/9.0.0 in XML file to use > Click Save | In Start your upgrade block, you will see :<br><br>Your current PrestaShop version: *8.1.5*<br>Your current PHP version: *8.1.13*<br>Latest official version for archive channel.: *N/A* |
| Launch upgrade by clicking on Update PrestaShop Now button | Upgrade is launched. Activity log is displayed. |
| Upgrade is successful | Message "Your store is up to date" is displayed |
| Refresh the page > Log into your employee account > Check PrestaShop version | PrestaShop version is 9.0.0 |
| Click on View my store | FO is displayed correctly |
