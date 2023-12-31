---
title: "ps_googleanalytics - Uninstall and delete"
weight: 3
---

# ps_googleanalytics - Uninstall and delete
## Details
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-2414

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module Manager | The Module Manager is well displayed |
| Search the exact module ps_googleanalytics | The module is well displayed |
| Click on uninstall and confirm the uninstall action *with* selecting this Option: delete module folder after uninstall. | An alert "Uninstall action on module ps_googleanalytics succeeded." is displayed |
| Refresh the page and search the exact module ps_googleanalytics | No result displayed |
| Check the path +{color:#172b4d}PrestaShop/modules/{color}+ | The folder ps_googleanalytic doesn't exist |