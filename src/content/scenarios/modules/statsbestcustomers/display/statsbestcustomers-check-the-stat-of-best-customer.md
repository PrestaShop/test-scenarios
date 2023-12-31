---
title: "statsbestcustomers - Check the stat of best customer"
weight: 1
---

# statsbestcustomers - Check the stat of best customer
## Details
* **Component** : statsbestcustomers
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-695

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> statistic -> best customers tab | Best customers tab should be display |
| Compare the data in this page with the Customer page | Should be correct |
| Delete the ps_connection table in database | Information is still in tab best customer |
