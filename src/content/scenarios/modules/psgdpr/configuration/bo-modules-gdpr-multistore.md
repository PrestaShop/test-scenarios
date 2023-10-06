---
title: "BO - Modules - GDPR - Multistore"
weight: 7
---

# BO - Modules - GDPR - Multistore
## Details
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-7597

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Modules manager > Search psgdpr > Configure | psgdpr module configuration page is displayed |
| Go to Advanced Parameters >Multistore | Multistore page opens with 3 blocks : <br> * Multistore tree <br> * Multistore list <br> * Multistore options |
| Click on " Add new store " | add new  page is displayed |
| Fill the informations  of the new shop >save | * The content is added to shop list and to multistore tree<br> * A green alert "Successful creation" is displayed |
| click on edit > change the informations > save | * A green alert "Successful update" is displayed<br> * the content is updated . |
| Click on the dropdown menu >delete | an alert is displayed with : <br><br>Delete select items <br><br>Name : new_shop<br><br>2 buttons : Annuler  / ok |
| Click on OK | * A green alert "Successful deletion" is displayed<br> * the shop is well deleted from the multistore tree and from the list  . |
| Scroll down to block Configuration | See multistore option "Activate module for this shop context" |
| Disable the option | The settings have been successfully updated. |
