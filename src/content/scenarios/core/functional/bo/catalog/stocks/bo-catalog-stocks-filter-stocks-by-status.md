---
title: "BO - Catalog - Stocks - Filter Stocks by Status"
weight: 5
---

# BO - Catalog - Stocks - Filter Stocks by Status
## Details
* **Component** : Core
* **Status** : Sandbox
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-842

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to products page | page title contains 'Products' |
| Reset filters | total of products > 0 |
| Create disabled product | Product created |
| Go to stocks page | Page title contains 'Stocks' |
| Filter by status = disabled | New product created is displayed in list |
| Go back to products page and delete product | Product successfully deleted |
