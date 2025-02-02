---
title: "Search a currency by enable/disable"
weight: 5
---

# Search a currency by enable/disable
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1365

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization > Currencies > Add a new currency : USD > Save | USD currency is created<br><br>Message "Successful creation." |
| Disable currency USD by switching the toggle button | USD is disabled<br><br>Message "The status has been successfully updated." |
| Search by Enabled : YES > Click Search | Currency Euro should be the only currency available |
| Search by Enabled : NO > Click Search | Currency USD should be the only currency available |
| Enable currency USD by switching the toggle button | USD is enabled<br><br>In the filter section you should see : "No records found" |
| Add a new currency > Choose GBP > Save | Message "Successful creation."<br><br>GBP will not appear |
| Reset your search | All 3 currencies should be displayed |
| POST-Conditions<br><br>Delete 2 newly created currencies : Check US Dollar + British Pound > Bulk Action > Delete selected > Delete | US Dollar and British Pound are deleted.<br><br>Message "The selection has been successfully deleted" |
