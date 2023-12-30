---
title: "BO - Advanced parameters - Team - Roles - pagination and Bulk Actions"
weight: 3
---

# BO - Advanced parameters - Team - Roles - pagination and Bulk Actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1158
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/06_team/roles/05_paginationAndBulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced parameters > Team > Profiles | Profile page is displayed |
| Create 10 roles | Successful creation alert is displayed<br>Number of profiles = Total of profiles + 10 |
| Change the items number to 10 per page | The number of pages should be displayed <br><br>(page 1 / 2) |
| Click on next | The page number should be displayed <br><br>(page 2 / 2) |
| Click on previous | Page number should be displayed<br><br>(page 1 / 2) |
| Change the items number to 50 per page | Page number should be displayed <br><br>(page 1 / 1) |
| Select the new profile created > Click Bulk actions > Delete selected > Delete | Successful deletion alert is displayed<br><br>Total of profiles after reset = Total of profiles |
| Select all Profiles > Bulk Action > Delete selected > Delete | "You cannot delete your own profile" alert is displayed |