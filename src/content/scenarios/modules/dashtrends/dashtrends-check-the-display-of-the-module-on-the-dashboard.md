---
title: "dashtrends - Check the display of the module on the dashboard"
weight: 1
---

# dashtrends - Check the display of the module on the dashboard
## Details
* **Component** : dashtrends
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-579

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Activate Demo Mode and browse each tab of the dashboard (Sales Orders Cart Value Visits Conversion Rate Net Profit) | The graphs are displayed for each tab, with different numbers in each tab. |
| Refresh dashboard (new demo values are generated) | The numbers and graphs are different |
| In FO make some visits and orders with several browser set some of these orders to Paid" in BO. Inactivate Demo Mode" | Real data are now displayed and the graphs correspond to the data. |
