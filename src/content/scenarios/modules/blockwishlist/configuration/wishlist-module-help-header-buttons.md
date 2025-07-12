---
title: "Wishlist module - Help header buttons"
weight: 4
---

# Wishlist module - Help header buttons
## Details
* **Component** : blockwishlist
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4249
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/02_blockwishlist/02_configuration/04_helpHeaderButtons.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search blockwishlist | The module page list should be displayed and *Wishlist* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * A "Help" button is displayed |
| Click on "Help" button | * A sidebar with some documentation is displayed<br> * "Help" button is filled |
| Click on the cross on top left of the sidebar or "Help" button or anywhere on the screen | Documentation sidebar is removed |
