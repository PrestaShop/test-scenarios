---
title: "BO - Catalog - Attributes - Values - Delete by Bulk actions"
weight: 6
---

# BO - Catalog - Attributes - Values - Delete by Bulk actions
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-808

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Attributes page | The Attributes page is well displayed |
| Filter by attribute name | Number attributes < Total attributes and the list contains the searched name |
| Click on Bulk actions button | A drop down is displayed |
| Click on "Select All" | All attributes are selected |
| Click on Bulk actions button | A drop down is displayed |
| Click on "Delete Selected" and confirm the deletion | An alert "The selection has been successfully deleted." is displayed and the list is empty |
| Reset filter | Number attributes = Total Attributes |
