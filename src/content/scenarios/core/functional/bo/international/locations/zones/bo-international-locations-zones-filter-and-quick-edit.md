---
title: "BO - International - Locations - Zones - Filter and Quick edit"
weight: 1
---

# BO - International - Locations - Zones - Filter and Quick edit
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1009
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/01_zones/01_filterAndQuickEditZones.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/locations/zones

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International ->locations> Zones | the zones page is displayed |
| Filter by ID<br>Criteria: 1" | Zone  list is filtered<br><br>Zone  lists have only "1" and nothing else in their ID |
| Reset all filters | All filters are reset<br>All Zones are displayed |
| Filter by zone <br><br>exemple : Africa | Zone list is filtered<br>zone listed have "Africa" in their zone name |
| Reset all filters | All filters are reset<br>All Zones are displayed |
| Filter by Enabled <br><br>set the filter :YES <br><br>click on search button | Zone list is filtered<br>the zones which have zones enabled are displayed. |
| Reset all filters | All filters are reset<br>All Zones are displayed |
| Filter by Enabled <br><br>set the filter :NO<br><br>click on search button | Zone list is filtered<br>zone listed have only zones disabled . |
| Reset all filters | All filters are reset<br>All Zones are displayed |
| Go to Enabled column> disabled the zone of ID = 1 | The status has been successfully updated. |
| Enabled the zone of ID = 1 | The status has been successfully updated. |
| Go to Enabled column> disabled the zone of ID = 2 | The status has been successfully updated. |
| Filter by Enabled <br><br>set the filter :NO <br><br>click on search button | Zone list is filtered<br>zone listed have only zones disabled . |
