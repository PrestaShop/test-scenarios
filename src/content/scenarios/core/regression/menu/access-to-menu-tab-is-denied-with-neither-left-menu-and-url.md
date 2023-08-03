---
title: "Access to Menu tab is denied with neither left menu and Url"
weight: 1
---

# Access to Menu tab is denied with neither left menu and Url
## Details
* **Status** : Automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-2141
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/regression/menu/deniedAccessToMenuTab.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Open advanced parameter menu on BO | Item 'Menu' is not visible |
| Go to "Url_Bo/index.php?controller=AdminTabs"<br><br>Click on Invalid token continue button | Access denied is displayed on page. |
