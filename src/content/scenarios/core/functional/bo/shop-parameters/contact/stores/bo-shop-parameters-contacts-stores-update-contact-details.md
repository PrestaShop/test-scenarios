---
title: "BO - Shop Parameters - Contacts - Stores - Update contact details"
weight: 4
---

# BO - Shop Parameters - Contacts - Stores - Update contact details
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1103
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/05_contact/02_stores/04_contactDetails.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Contacts > Stores Tab | Stores page is well displayed |
| Click on the *_Edit_* button of the store in the table | the Edit page is displayed |
| Edit the store form and click on Save | the page is returned to store page and _Successful update_ message is displayed |
