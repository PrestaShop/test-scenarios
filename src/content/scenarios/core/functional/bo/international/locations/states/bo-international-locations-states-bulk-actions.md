---
title: "BO - International - Locations - States - Bulk actions"
weight: 4
---

# BO - International - Locations - States - Bulk actions
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7726
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/03_states/03_bulkActionsStates.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/locations/states/add-or-edit-state

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Locations > States | The States page is displayed |
| Select all states and Disable selection on all of them | An alert "The status has been successfully updated." is displayed and all states are disabled in the grid |
| Select All states and Enable selection on all of them | An alert "The status has been successfully updated." is displayed and all states are enabled in the grid |
| Click on Add new state button > Save | Message Successful creation is displayed |
| Search by name : to delete > Select the state > Click on Bulk action > Click on Assign to a new zone | Modale ​Choose a zone displayed |
| Change Zone and click to Update zone | Successful update notification |
| Search by name : to delete > Select the state > Click on Bulk action > Click on Delete selected > Click Delete | An alert "Successful deletion" is displayed<br>The state created is well deleted |
| Reset all filters | All filters are reset. All states are displayed |
