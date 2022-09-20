---
title: "BO - Catalog - Brands - Bulk Actions"
weight: 5
---

# BO - Catalog - Brands - Bulk Actions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Attributes > Brands page | The Barnds page is well displayed |
| filter brands by name <br>Criteria : BrandToDelete | in brands table all rows, column name contain 'BrandToDelete' |
| Select all brands and disable them | A successfule alert "The status has been successfully updated." is displayed, All brands are disabled <br>column active = clear |
| Select all brands and enable them | A successfule alert "The status has been successfully updated." is displayed, All brands are disabled <br>column active = check |
| reset Brands filter | number of brands after reset = Total of brands + 2 |
| filter brands by name <br>Criteria : BrandToDelete | in brands table all rows, column name contain 'BrandToDelete' |
| Select All brands and delete with Bulk Actions and confirm the deletion | Successful message "Successful deletion." is displayed |
| reset filter brands | number of brands after creation = Total of brands |
