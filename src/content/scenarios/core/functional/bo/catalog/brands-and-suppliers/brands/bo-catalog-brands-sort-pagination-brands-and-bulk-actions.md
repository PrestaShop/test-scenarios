---
title: "BO - Catalog - Brands - Sort & Pagination Brands and Bulk Actions"
weight: 3
---

# BO - Catalog - Brands - Sort & Pagination Brands and Bulk Actions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Brands page | Page title contains 'Brands' |
| Sort brands by ID desc | Brands are sorted by ID (3 -> 2 -> 1) |
| Sort brands by Name asc | Brands are sorted by Name (a -> b -> c) |
| Sort brands by Name desc | Brands are sorted by name (c -> b -> a) |
| Sort brands by Status asc | Brands are sorted by Status asc (enabled -> disabled) |
| Sort by brands by Status desc | Brands are sorted by Status desc (disabled -> enabled) |
| Sort brands by ID asc | Brands are sorted by ID (1 -> 2 -> 3) |
| Change Display items to 10 | There are 2 pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The First page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Select created brands > Bulk action > Disable selected | The successful message "The status has been successfully updated." is displayed |
| Select created brands > Bulk action > Enable selected | The successful message "The status has been successfully updated." is displayed |
| Select created brands > Bulk action > Deleted selected > Confirm the deletion | The successful message "Successful deletion." is displayed |
