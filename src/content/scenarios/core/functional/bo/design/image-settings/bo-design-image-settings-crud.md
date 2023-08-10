---
title: "BO - Design - Image Settings - CRUD"
weight: 2
---

# BO - Design - Image Settings - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-960
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/06_imageSettings/02_CRUDImageType.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design > Image Settings | the image settings page is well displayed |
| Click on "Add new image type " | a new page is displayed with title " Add new" |
| fill the blanks with the informations >Save | a green alert display "Successful creation"<br><br>the image settings list +1 |
| Click on button "edit " | the image settings page of the latest image type created is well displayed with title "Edit: test_type" |
| change the informations of image setting created | succesful message is displayed "Successful update"<br><br> the informations of the  image setting  are updated |
| Click on the dropdown -toggle > Delete | Modale displayed with 2 buttons: yes and no<br><br> <br><br>Message : <br>h4. Delete selection<br><br>Name: new_type<br><br>yes / no |
| Click on Delete | succesful message is displayed "Successful deletion" |
