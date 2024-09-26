---
title: "BO - Advanced Parameters - Multistore - CRUD shop groups"
weight: 1
---

# BO - Advanced Parameters - Multistore - CRUD shop groups
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1182
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/10_multistore/01_CRUDShopGroups.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/logs/advanced-parameters/multistore

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to  Shop Parameters > Général > Enable Multistore > Save | * A green alert "Successful update" is displayed |
| Go to Advanced Parameters > Multistore | Multistore page opens with 3 blocks : <br> * Multistore tree <br> * Multistore list <br> * Multistore options |
| Click on "Add new group of stores" | Add new page is displayed |
| Fill the informations of the new store group > Save | * The content is added to store group and to multistore tree<br> * A green alert "Successful creation" is displayed |
| Click on Edit > Edit the informations > Save | * A green alert "Successful update" is displayed<br> * the content is updated |
| Click on the dropdown menu > Delete | An alert is displayed with : <br><br>Delete selected items<br>Name : new_group<br>2 buttons : Yes / No |
| Click on Yes | * A green alert "Successful deletion" is displayed<br> * the shop is well deleted from the multistore tree and from the list |
