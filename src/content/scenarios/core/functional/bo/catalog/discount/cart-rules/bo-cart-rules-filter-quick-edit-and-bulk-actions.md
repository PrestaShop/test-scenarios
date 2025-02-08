---
title: "BO - Cart Rules - Filter, Quick Edit and bulk actions"
weight: 3
---

# BO - Cart Rules - Filter, Quick Edit and bulk actions
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-832

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page | The cart rules page is well displayed |
| Filter By ID | Number of cart rules < Total cart rules and the list contains the searched ID |
| Reset Filter | Number cart rules = Total of cart rules |
| Filter by Name | Number of cart rules < Total cart rules and the list contains the searched Name |
| Reset Filter | Number cart rules = Total of cart rules |
| Filter by Priority | Number of cart rules < Total cart rules and the list contains the searched priority |
| Reset Filter | Number cart rules = Total of cart rules |
| Filter by Code | Number of cart rules < Total cart rules and the list contains the searched Code |
| Reset Filter | Number cart rules = Total of cart rules |
| Filter by Quantity | Number of cart rules < Total cart rules and the list contains the searched Quantity |
| Reset Filter | Number cart rules = Total of cart rules |
| Filter by Expiration date | Number of cart rules < Total cart rules and the list contains the searched Date |
| Reset Filter | Number cart rules = Total of cart rules |
| Filter by status | Number of cart rules < Total cart rules and the list contains the searched Status |
| Reset Filter | Number cart rules = Total of cart rules |
| Click on the icon status to disable the cart rule | A green alert "The status has been successfully updated." is displayed<br><br>The cart rule is well disabled |
| Click on the icon status again to enable the cart rule | A green alert "The status has been successfully updated." is displayed<br><br>The cart rule is well enabled |
| Bulk actions -> Select all | The status has been successfully updated.<br> <br>All Cart Rules are selected |
| Bulk actions -> Disable selection | The status has been successfully updated.<br> <br>All Cart Rules are disabled |
| Bulk actions -> Select all | The status has been successfully updated.<br> <br>All Cart Rules are selected |
| Bulk actions -> Enable selection | The status has been successfully updated.<br> <br>All Cart Rules are enabled |
| Bulk actions -> Select all | The status has been successfully updated.<br> <br>All Cart Rules are selected |
| Bulk actions -> Unselect all | The status has been successfully updated.<br> <br>All Cart Rules are unselected |
| Bulk actions -> Delete selected | You must select at least one item to perform a bulk action. |
| Bulk actions -> Select all | The status has been successfully updated.<br> <br>All Cart Rules are selected |
| Bulk actions -> Delete selected | The cart rule is well deleted |
