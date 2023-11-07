---
title: "BO - International - Locations - Zones - Bulk actions"
weight: 3
---

# BO - International - Locations - Zones - Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1011
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/01_zones/03_bulkActionsZones.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International ->locations> Zones | the zones page is displayed |
| Check the new zone added with ID "9" and ID "10" -> click on Disable selection | The status has been successfully updated.<br><br>the zone is well disabled |
| Check the new zone added with ID "9" and ID "10" -> click on Disable selection | The status has been successfully updated.<br><br>the zone is well enabled |
| Check the new zone added with ID "9" and ID "10" -> click on Disable selection | A modale should appear : <br>h4. Delete selection<br>Are you sure you want to delete the selected item(s)? |
| Click on Delete | The selection has been successfully deleted <br><br>The zone is well deleted |
