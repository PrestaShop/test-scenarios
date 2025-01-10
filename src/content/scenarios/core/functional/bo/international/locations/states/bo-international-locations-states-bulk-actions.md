---
title: "BO - International - Locations - States - Bulk actions"
weight: 3
---

# BO - International - Locations - States - Bulk actions
## Details
* **Component** : Core
* **Status** : Blocked
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1020

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International ->locations> States | the States  page is displayed |
| Reset all filters | All filters are reset. All states are displayed |
| Select All states and Disable selection all them | An alert "The status has been successfully updated." is displayed and all states are disabled in the grid |
| Select All states and Enable selection all them | An alert "The status has been successfully updated." is displayed and all states are enabled in the grid |
| select the state created >click on deleted selection> click ok | An alert "The selection has been successfully deleted." the state created is well deleted |
| Reset all filters | All filters are reset. All states are displayed |
