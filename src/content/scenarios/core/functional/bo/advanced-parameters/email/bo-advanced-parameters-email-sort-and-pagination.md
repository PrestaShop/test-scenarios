---
title: "BO - Advanced parameters - Email - Sort and pagination"
weight: 1
---

# BO - Advanced parameters - Email - Sort and pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1144

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Advanced Parameters > E-mail | E-mail page is well displayed |
| Click on ID tab > the arrow direction will become : {color:#00875a}*^*{color} | The data in the table will have an ascending sort by ID<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1365/ascending.png! |
| Click on ID tab > the arrow direction will become : {color:#00875a}*v*{color} | The data in the table will have an descending sort by ID<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1366/descending.png! |
| Click on Recipient tab > the arrow direction will become : {color:#00875a}*^*{color} | The data in the table is sorted by an alphabetic order from A to Z |
| Click on Recipient tab > the arrow direction will become : {color:#00875a}*v*{color} | The data in the table is sorted by an alphabetic order from Z to A |
| Click on Template tab > the arrow direction will become : {color:#00875a}*^*{color} | The data in the table is sorted by an alphabetic order from A to Z |
| Click on Template tab > the arrow direction will become : {color:#00875a}*v*{color} | The data in the table is sorted by an alphabetic order from Z to A |
| Click on Language tab > the arrow direction will become : {color:#00875a}*^*{color} | The data in the table is sorted by an alphabetic order from A to Z |
| Click on Language tab > the arrow direction will become : {color:#00875a}*v*{color} | The data in the table is sorted by an alphabetic order from Z to A |
| Click on Subject tab > the arrow direction will become : {color:#00875a}*^*{color} | The data in the table is sorted by an alphabetic order from A to Z |
| Click on Subject tab > the arrow direction will become : {color:#00875a}*v*{color} | The data in the table is sorted by an alphabetic order from Z to A |
| Click on Sent tab > the arrow direction will become : {color:#00875a}*^*{color} | The data in the table is sorted from oldest to newest based on date of mail sent |
| Click on Sent tab > the arrow direction will become : {color:#00875a}*v*{color} | The data in the table is sorted from newest to oldest based on date of mail sent |
| Click on {color:#00875a}*>*{color} in bottom of E-mail page<br><br>!https://forge.prestashop.com/plugins/servlet/raven/tempattachment/8688780044051970632/pagination1.png! | The second page of mail is well displayed |
| Click on : {color:#00875a}*<*{color} in bottom of E-mail page | The first page of mail is well displayed<br><br> <br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1370/pagination%202.png! |
