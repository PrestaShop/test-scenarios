---
title: "BO - Advanced Parameters - Multistore - CRUD shops"
weight: 2
---

# BO - Advanced Parameters - Multistore - CRUD shops
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1183
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/10_multistore/03_CRUDShops.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/logs/advanced-parameters/multistore

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Advanced Parameters >Multistore | Multistore page opens with 3 blocks : <br> * Multistore tree <br> * Multistore list <br> * Multistore options |
| Click on " Add new store " | add new page is displayed |
| Fill the informations  of the new shop >save | * The content is added to shop list and to multistore tree<br> * A green alert "Successful creation" is displayed |
| click on edit > change the informations > save | * A green alert "Successful update" is displayed<br> * the content is updated . |
| Click on the dropdown menu >delete | an alert is displayed with : <br><br>Delete select items <br><br>Name : new_shop<br><br>2 buttons : Annuler  / ok |
| Click on OK | * A green alert "Successful deletion" is displayed<br> * the shop is well deleted from the multistore tree and from the list  . |
