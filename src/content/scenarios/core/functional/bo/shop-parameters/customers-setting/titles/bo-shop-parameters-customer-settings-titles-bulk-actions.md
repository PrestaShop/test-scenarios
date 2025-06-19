---
title: "BO - Shop Parameters - Customer Settings - Titles - Bulk actions"
weight: 3
---

# BO - Shop Parameters - Customer Settings - Titles - Bulk actions
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1094

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Customer Settings > Titles Tab | Titles page is displayed |
| Click on *Bulk actions* button | A dropdown menu displays 1 option :<br> * Delete selected |
| _*case 1 : Select all and unselect titles*_<br><br>Click to select all checkboxes and unselect manually all checkboxes | Bulk action button is not available |
| *case 2 : Delete selected option with selected items*<br><br>*Select* 1 element > Click on *Bulk actions* button > Click on *Delete* *selected* option > Click *Delete* on the modal | This message is displayed : Successful deletion |
| *case 3 : Delete all selected option with selected items*<br><br>*Select all* the option with the main checkbox > Click on *Bulk actions* button > Click on *Delete selected* option > Click *Delete* on the modal | This message is displayed : Successful deletion |
