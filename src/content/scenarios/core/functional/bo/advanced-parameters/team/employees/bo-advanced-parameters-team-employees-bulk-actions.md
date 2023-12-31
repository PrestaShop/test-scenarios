---
title: "BO - Advanced parameters - Team - Employees - Bulk Actions"
weight: 3
---

# BO - Advanced parameters - Team - Employees - Bulk Actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1152
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/06_team/employees/03_employeesBulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters >Team | * The Employees page is well displayed<br> * The *Bulk actions* button is disabled |
| *Case 1 : Bulk actions on default SuperAdmin (The user used for shop installation)*<br><br>Go to *Employees* section > Select the checkbox next to *ID* | The *Bulk actions* button is enabled |
| Click on Bulk actions buttons >  Click on the dropdown menu options<br> * Enable selection<br> * Disable selection<br> * Delete selected | An error message is displayed : You cannot disable or delete your own account. |
| *Case 2 : Bulk actions on new added Employee : SuperAdmin | Logistician | Translator | Salesman*<br><br>Go to *Employees* section > Select the checkbox next to *ID* | Employees of checked boxes are well selected<br><br>The Bulk actions button is enabled |
| Click on *Bulk actions* button > click on *Enable selection* option | This message is displayed : The status has been successfully updated.<br><br>Check the status of the selected employees in Active tab it should be ON<br><br>The Bulk actions button is disabled<br><br>All checked fields are unchecked |
| Click on *Bulk actions* button > click on *Disable selection* option | This message is displayed : The status has been successfully updated.<br><br>Check the status of the selected employees in Active tab it should be OFF<br><br>The Bulk actions button is disabled<br><br>All checked fields are unchecked |
| Click on *Bulk actions* button > Click on *Delete selected* option | A modal is displayed with message<br><br>!https://forge.prestashop.com/plugins/servlet/raven/attachment/1389/Employees-%E2%80%A2-Presta81x.png|width=458,height=140! |
| Click on *Bulk actions* button > Click on *Delete selected* option > Click on *Delete* button | This message is displayed : The selection has been successfully deleted.<br><br>The Bulk actions button is disabled<br><br>The  Employees list is refreshed and the deleted employee doesn't appear in the list |
| Click on *Cancel* button from the modal | Employees page is displayed<br><br>The checked employee still selected<br><br>The Bulk actions button still enabled |