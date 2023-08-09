---
title: "BO - Advanced Parameters - Webservice - Quick edit enable/disable"
weight: 4
---

# BO - Advanced Parameters - Webservice - Quick edit enable/disable
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1179

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
| click on the toggle_status >disable it | _an alert  "_The status has been successfully updated."<br><br>the status of the webservice is disabled |
| click on the toggle_status >enable it | _an alert  "_The status has been successfully updated."<br><br>the status of the webservice is enabled |
