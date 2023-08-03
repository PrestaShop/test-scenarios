---
title: "BO - Shipping - Carriers - Bulk actions"
weight: 3
---

# BO - Shipping - Carriers - Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-971

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO>Shipping > Carriers | the Carriers  page is displayed |
| Select All carriers  and Click Bulck action > disable selection all them | The status has been successfully updated.<br><br>All filters are reset. All carriers are displayed |
| Select All carriers and Click Bulck action > enable selection all them | An alert "The status has been successfully updated." is displayed and all carriers are enabled in the grid |
| Select a carrier > Click on Bulk action > Delete selected | An alert "The selection has been successfully deleted." |
