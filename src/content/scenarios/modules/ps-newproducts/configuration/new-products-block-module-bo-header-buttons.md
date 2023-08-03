---
title: "New products block module - BO header buttons"
weight: 2
---

# New products block module - BO header buttons
## Details
* **Component** : ps_newproducts
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4055

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search ps_newproducts | The module page list should be displayed and *New products block* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * 3 buttons on the header are displayed (Back / Translate / Manage hooks) |
| Click on "Back" button | The module page list is displayed |
| Search ps_newproducts | *New products block* module is displayed on the list |
| Click on "Configure" button at the right of the module | * The "Configure" page is displayed<br> * 3 buttons on the header are displayed (Back / Translate / Manage hooks) |
| Click on "Translate" button | "Translate this module" modal is opened to choose a translation |
| Click anywhere on the window or on the cross of the modal on top right corner | * The modal is removed<br> * The "Configure" page of the module is displayed |
| Click on "Manage hooks" button | "Positions" page is displayed with this product on its hook |
