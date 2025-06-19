---
title: "Category products module - Disable/Enable module"
weight: 1
---

# Category products module - Disable/Enable module
## Details
* **Component** : ps_categoryproducts
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4006
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/ps_categoryproducts/01_installation/01_disableEnableModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_categoryproducts | The module page list should be displayed and *Products in the same category* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Disable" option | A modal is open with:<br> * *Title*: "Disable module?"<br> * *Description*: "You are about to disable Products in the same category module.<br>Your current settings will be saved, but the module will no longer be active."<br> * *2 buttons*: "Cancel" & "Yes, disable it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Disable" option | The modal is open again with the same informations (Title / Description / 2 buttons) |
| The modal is open again with the same informations (Title / Description / 2 buttons) | * After loading, a green message "Disable action on module ps_categoryproducts succeeded." is displayed<br> * The module is disabled, the button at the right of the module is displaying "Enable" |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Click on a product | The product page should be displayed and if you scroll down, the "Other products in the same category :" block is not displayed |
| Go back to BO > Module list page with ps_categoryproducts module displayed > Click on "Enable" button at the right of the module | * After loading, a green message "Enable action on module ps_categoryproducts succeeded." is displayed<br> * The module is enabled, the button at the right of the module is displaying "Configure" |
| Go back to FO > Reload the page of the product | The "Other products in the same category :" block should be displayed |
