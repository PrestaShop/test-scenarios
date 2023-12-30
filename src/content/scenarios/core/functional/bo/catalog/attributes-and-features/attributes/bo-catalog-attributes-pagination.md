---
title: "BO - Catalog - Attributes - Pagination"
weight: 3
---

# BO - Catalog - Attributes - Pagination
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-805

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Attributes page | The Attributes page is well displayed |
| Change Display items to 20 | There are two pages |
| Click on Next | The Second page is displayed |
| Click on Previous | The first page is displayed |
| Change Display items to 50 | Pagination = 1 |
| Delete the Created attributes | Attributes are well deleted |