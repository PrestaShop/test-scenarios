---
title: "BO - Catalog - Brands - Bulk Actions"
weight: 5
---

# BO - Catalog - Brands - Bulk Actions
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-819

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Attributes > Brands | The Brands page is well displayed |
| Create a Brand (pre-condition) | Message Successful creation is displayed<br>List of brands is updated |
| Select all brands and disable them | A successful alert "The status has been successfully updated." is displayed<br><br>All brands are disabled |
| Select all brands and enable them | A successful alert "The status has been successfully updated." is displayed<br><br>All brands are disabled |
| Reset filter | All brands are displayed |
| Filter brands by Name | Filter is successful<br><br>Filtered result displayed the correct brand |
| Select All brands > Bulk Actions > Delete selected > Confirm the deletion | Successful message "Successful deletion." is displayed |
| Reset filter | Filter is successful<br><br>All Brands are displayed |