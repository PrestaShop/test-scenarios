---
title: "BO - Shop Parameters - Customer Settings - Titles - Bulk actions"
weight: 3
---

# BO - Shop Parameters - Customer Settings - Titles - Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1094
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/04_customerSettings/03_titles/03_bulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Customer Settings > Titles Tab | Title page is displayed |
| Click on *Bulk actions* button | A drop down menu displays three options :<br> * Select all<br> * Unselect all<br> * Delete selected |
| *Case 1 : Select all option*<br><br>Click on Select all | All checkboxes displayed in Titles page are well checked ! |
| *Case 2 : Unselect all option*<br><br>Click on Unselect all | The selected checkboxes became unselected |
| _*case 3 : Delete selected option with no selected items*_<br><br>Click on *Bulk actions* button > Click on *Delete* selected option > Click *OK* on the modal | Error message is displayed : You must select at least one element to delete. |
| *case 3 : Delete selected option with no selected items*<br><br>Click on *Bulk actions* button > Click on *Delete* selected option > Click *Annuler (Cancel)* on the modal | The modal disappears.<br><br>Title page is well displayed |
| *case 4 : Delete selected option with selected items*<br><br>Click on *Bulk actions* button > Click on *Select all* option > Click on *Delete* *selected* option > Click *OK* on the modal | This message is displayed : The selection has been successfully deleted.<br><br>The Titles table is empty<br><br>The Bulk actions button disappears |
| *case 4 : Delete selected option with selected items*<br><br>Click on *Bulk actions* button > Click on *Select all* option > Click on *Delete* *selected* option > Click *Annuler (cancel)* on the modal | The modal disappears<br><br>The Titles table is displayed with the checked Titles |
