---
title: "BO - Advanced Parameters - Webservice - Bulk actions"
weight: 5
---

# BO - Advanced Parameters - Webservice - Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1178
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/09_webservice/05_bulkActions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/webservice

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Advanced Parameters >Webservice | Webservice  page is well displayed<br><br>the Webservice  table is empty  = 0 |
| Go to Advanced Parameters >Webservice | Webservice  page is well displayed<br><br>the Webservice  table is empty  = 0 |
| Click on "Add new webservice key " | new page "webservice Accounts will display |
| fill the blanks with the data > click on save | Webservice  page is well displayed<br><br>Successful message is displayed .<br><br>the Webservice  table  +1 |
| click on the pencil icon > Edit> change some data >Save | succesful message is displayed "Successful update"<br><br>the informations of the webservice created  are updated |
| Click on the dropdown -toggle > Delete | Modale confirmation displayed :<br><br> <br>h4. Delete selection<br>Are you sure you want to delete the selected item(s)?<br><br>Two buttons : "Cancel" and "Delete" |
| Click on Delete | successful message is displayed "Successful deletion"<br><br>the Webservice  table =0 |
| Select the Webservice created > Click on Bulk actions > Disable selected | An alert "The status has been successfully updated."<br><br>the status of the webservice is Disabled |
| Select the Webservice created > Click on Bulk actions > Enable selected | An alert "The status has been successfully updated."<br><br>the status of the webservice is enabled |
| Select the Webservice created > Click on Bulk actions > Delete selected | An alert "The selection has been successfully deleted." |
