---
title: "ps_googleanalytics - Uninstall/Install"
weight: 2
---

# ps_googleanalytics - Uninstall/Install
## Details
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-2413

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module Manager | The Module Manager is well displayed |
| Click on Upload a module and drop the zip | The alert "Module installed!" is well displayed and the "Configure" button is well displayed |
| Refresh the page and search the exact module ps_googleanalytics | The module is well displayed |
| Click on uninstall and confirm the uninstall action *without* selecting this {color:#172b4d}Option: delete module folder after uninstall.{color} | The alert "Uninstall action on module ps_googleanalytics succeeded." is displayed |
| Go to BO > Modules > Module Manager page and search the module ps_googleanalytic | # If PS_version = 1.7.8 or previous => the module is not displayed<br> # If the PS_version = 8.x.x => the module is displayed with *Install* button |
| If PS_version = 1.7.8 or previous => the module is not displayed, Go to BO > Modules > Module Catalog page and search the ps_googlaanalytic module | The module is well displayed |
