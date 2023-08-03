---
title: "BO - Cart Rules - Bulk actions"
weight: 4
---

# BO - Cart Rules - Bulk actions
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-833

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Cart rules page | The cart rule page is well displayed |
| Filter by Name "Todelete" | The list contains the searched Name |
| Reset filter | All cart rules are displayed |
| Click Bulk Action > Select All > Bulk Action > Disable selection | Check that cart rules are disabled<br><br>Alert "The status has been successfully updated." is displayed |
| Click Bulk Action > Select All > Bulk Action > Enable selection | Check that cart rules are enabled<br><br>Alert "The status has been successfully updated." is displayed |
| Click Bulk Action > Select All > Bulk Action > Delete Selected > OK | A green alert "The selection has been successfully deleted." is displayed<br><br>Total cat rules = 0<br><br>No records found |
