---
title: "BO - Advanced parameters - Team - Roles - pagination and Bulk Actions"
weight: 3
---

# BO - Advanced parameters - Team - Roles - pagination and Bulk Actions
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1158

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced parameters > Team > Roles | Role page is displayed |
| Create 10 roles | Successful creation alert is displayed<br>Number of Roles = Total of Roles + 10 |
| Change the items number to 10 per page | The number of pages should be displayed <br><br>(page 1 / 2) |
| Click on next | The page number should be displayed <br><br>(page 2 / 2) |
| Click on previous | Page number should be displayed<br><br>(page 1 / 2) |
| Change the items number to 50 per page | Page number should be displayed <br><br>(page 1 / 1) |
| Select the new Role created > Click Bulk actions > Delete selected > Delete | Successful deletion alert is displayed<br><br>Total of Roles after reset = Total of Roles |
| Select all Roles > Bulk Action > Delete selected > Delete | "You cannot delete your own Role" alert is displayed |
