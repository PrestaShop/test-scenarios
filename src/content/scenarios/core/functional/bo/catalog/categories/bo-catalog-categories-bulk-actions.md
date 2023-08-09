---
title: "BO - Catalog - Categories - Bulk Actions"
weight: 5
---

# BO - Catalog - Categories - Bulk Actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-795

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Catalog>"Categories" page | The categories page is displayed correctly |
| Should reset filter | The filter is well reset |
| Action:In list, Filter By Name "Criteria : ToDelete | Filter is succeeded |
| Select All Categories and Disable them | An alert "The status has been successfully updated." is displayed and all Categories are disabled in the grid |
| Select All Categories and Enable them | An alert "The status has been successfully updated." is displayed and all Categories are enabled in the grid |
| Select All catgories and Delete with Bulk actions | Categories are successfully deleted<br>Message is displayed : "Successful deletion." |
| Should reset filter | The filter is well reset |
