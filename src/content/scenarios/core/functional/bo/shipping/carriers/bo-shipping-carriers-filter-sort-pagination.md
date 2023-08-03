---
title: "BO - Shipping - Carriers - Filter, sort, pagination"
weight: 2
---

# BO - Shipping - Carriers - Filter, sort, pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-969

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO>Shipping > Carriers | the Carriers  page is displayed |
| Reset all filters | All filters are reset. All carriers are displayed |
| Sort carrier by ID desc | carriers are sorted by ID (4 -> 3 -> ...) |
| Sort carrier by ID asc | carriers are sorted by ID (1 -> 2 -> ...) |
| Filter by ID of carrier created | carriers list is filtered by ID<br><br>the ID of the carrier is well displayed on the top |
| Reset all filters | All filters are reset. All carriers are displayed |
| Sort carrier by name desc | carriers are sorted by name  ( z-> y -> ...) |
| Sort carrier by name asc | carriers are sorted by name  ( a-> b -> ...) |
| Filter by name of carrier | carrier  list is filtered<br>carrier listed have "My cheap carrier" in their carrier name |
| Reset all filters | All filters are reset. All carriers are displayed |
| Filter by delay of carrier | carrier  list is filtered<br>carrier listed have "Pick up in-store" in their carrier  delay |
| Reset all filters | All filters are reset. All carriers are displayed |
| Filter by status of carriers | carrier  list is filtered<br>carrier listed have "enabled status  " in their carrier  status |
| Reset all filters | All filters are reset. All carriers are displayed |
| Filter by Free Shipping of carriers | carrier  list is filtered<br>carrier listed have "enabled" in their carrier  Free Shipping |
| Reset all filters | All filters are reset. All carriers are displayed |
| Sort carriers by position desc | carriers are sorted by postion (4->3 -> ...) |
| Sort carriers by position asc | carriers are sorted by position (1->2 -> ...) |
| Filter by Position of carriers | carrier  list is filtered<br>carrier listed have "1" in  carrier position |
| Reset all filters | All filters are reset. All carriers are displayed |
