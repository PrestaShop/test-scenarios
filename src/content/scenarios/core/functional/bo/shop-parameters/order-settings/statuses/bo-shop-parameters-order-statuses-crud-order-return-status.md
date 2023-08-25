---
title: "BO - Shop Parameters - Order Statuses - CRUD order return status"
weight: 3
---

# BO - Shop Parameters - Order Statuses - CRUD order return status
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1060

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Shop Parameters> Order Settings> Statuses | Statuses page is well displayed |
| Click on the _Add new order return status_ button | Add new page is displayed |
| Fill the order return status form,<br><br>save | Statuses page is displayed.<br><br>Successful update message is displayed.<br><br>New order return status is added and total return statuses +1 |
| Click on the Edit button of new order return status added | Edit new order return status page is displayed. |
| Edit the order return status,<br><br>save. | Statuses page is displayed.<br><br>Successful update message is displayed.<br><br>The order return status is well updated. |
| Click on dropdown button of new order return stauts added,<br><br>Delete | a popup is displayed :<br><br> <br>{code:java}<br>Delete selected item?<br>Name: new roder return_edited<br>YES - NO{code} |
| Click on YES button | Successful deletion message is displayed.<br>The order return is deleted. |
