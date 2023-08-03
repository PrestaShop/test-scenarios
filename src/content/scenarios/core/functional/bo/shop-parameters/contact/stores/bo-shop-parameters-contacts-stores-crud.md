---
title: "BO - Shop Parameters - Contacts - Stores - CRUD"
weight: 2
---

# BO - Shop Parameters - Contacts - Stores - CRUD
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1100

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop Parameters ->Contact ->Stores | The stores page is displayed |
| Click on add new store | Add new store is displayed correctly |
| Fill all information -> click on save | New store is saved correctly.<br><br>Message is displayed "Successful creation"<br><br>Redirection to store page<br><br>Number of stores after creation = total of stores + 1 |
| Click on *_Edit_* button of the last created Store | The page Edit is displayed |
| Edit name, Adress and City and click on save | The page Store is displayed with  _*Successful update*_ message |
| Filter list by name with latest name of created store | the store  is displayed in list |
| click on the drop down button >Delete >click on the popup message 'yes' | Message Successful deletion is displayed |
