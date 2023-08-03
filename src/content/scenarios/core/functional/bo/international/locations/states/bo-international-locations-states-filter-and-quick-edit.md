---
title: "BO - International - Locations - States - Filter and Quick edit"
weight: 1
---

# BO - International - Locations - States - Filter and Quick edit
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1018

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International ->locations> States | the States  page is displayed |
| Reset all filters | All filters are reset. All states are displayed |
| Filter by ID of state  created | states list is filtered. states listed have the searched ID<br><br>the ID of the state is well displayed on the top |
| Reset all filters | All filters are reset. All states are displayed |
| Filter by name of state  created | state  list is filtered<br>state listed have "test" in their state  name |
| Reset all filters | All filters are reset. All states are displayed |
| Filter by ISO code of state created | state  list is filtered<br>state listed have "ttt" in their state  ISO code |
| Reset all filters | All filters are reset. All states are displayed |
| Filter by zone name of the state created | state  list is filtered<br>state listed have "Africa " in their state  zone |
| Reset all filters | All filters are reset. All states are displayed |
| Filter by Country of state created | state  list is filtered<br>state listed have "Mexico " in their state  Country |
| Reset all filters | All filters are reset. All states are displayed |
| Filter by Enabled status of state created | state  list is filtered<br>state listed have "enabled status  " in their state  status |
| Reset all filters | All filters are reset. All states are displayed |
| choose a state and click on check icon in the Enabled section | Enabled state changes to : X<br><br>This message is displayed "The status has been successfully updated." |
| Filter by Disaabled status of state you've just changed its status | state  list is filtered<br>state listed have "disabled status  " in the state  status |
