---
title: "Official GDPR module - New products block module - Uninstall and delete module"
weight: 4
---

# Official GDPR module - New products block module - Uninstall and delete module
## Details
* **Component** : psgdpr
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-4531

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search Legal Assistant | The module page list should be displayed and *Legal Assistant block* module should be displayed on the list |
| Click on the button at the right of the module > Choose on the list "Uninstall" option | A modal is open with:<br> * *Title*: "Uninstall module?"<br> * *Description*: "You are about to uninstall New products block module. This will definitely disable the module and delete all its files"<br> * *Optional* *checkbox*: "Optional: delete module folder after uninstall."<br> * *Text*: "This action cannot be undone."<br> * *2 buttons*: "Cancel" & "Yes, uninstall it" |
| Click on "Cancel" button or the cross on top right or outside | * The modal is removed<br> * The module list page is displayed |
| Click on the button at the right of the module > Choose on the list "Uninstall" | The modal is open again with the same informations (Title / Description / Optional checkbox / Text / 2 buttons) |
| Check the optional checkbox "Optional: delete module folder after uninstall." > Click on "Yes, uninstall it" button to confirm the uninstallation of the module | * After loading, a green message "Uninstall action on module Legal Assistant succeeded." is displayed<br> * The module is uninstalled, the button at the right of the module is displaying "Install"<br> * In folders of you shop: yourshop/modules/, the "Legal Assistant" folder should be removed |
| Click on "View my shop" link in the header > Click on the new tab | The new tab is displayed the FO of the shop with the homepage |
| Scroll down in the homepage and search the "Legal Assistant" block | The "Legal Assistant" block should be not displayed |
