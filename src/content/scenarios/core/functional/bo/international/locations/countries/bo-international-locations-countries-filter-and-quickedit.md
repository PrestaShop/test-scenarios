---
title: "BO - International - Locations - Countries - Filter and QuickEdit"
weight: 1
---

# BO - International - Locations - Countries - Filter and QuickEdit
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1013

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Locations > Tab Countries | The Countries page is displayed correctly |
| filter by ID. | Countries list is filtered. Pages listed have "2" in their ID |
| Reset all filters of countries table | All filters are reset.<br><br>All countries are displayed |
| filter by name. | Pages list is filtered. Pages listed have the name "France"  in their name |
| Reset all filters of countries table | All filters are reset.<br><br>All countries are displayed |
| Filter by ISO code. | Countries list is filtered. Pages listed have "FR" in their ISO code |
| Reset all filters of countries table | All filters are reset.<br><br>All countries are displayed |
| Filter by Call prefix | Countries list is filtered. Pages listed have "33" in their  call prefix |
| Reset all filters of countries table | All filters are reset.<br><br>All countries are displayed |
| Filtre by zone | Countries list is filtered. Pages listed have "Europe" in their zone |
| Change Enabled to YES" for the first  country | Icon changed to enabled<br><br>Success message is displayed contains : <br>_The status has been successfully updated._ |
| Change Enabled to "NO" for first  country | Icon changed to disabled<br>Success message is displayed contains : <br>_The status has been successfully updated._ |
| Reset all filters of countries table | All filters are reset.<br><br>All countries are displayed |
