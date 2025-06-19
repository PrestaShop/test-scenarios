---
title: "BO - Catalog - Products - Enable & Disable"
weight: 6
---

# BO - Catalog - Products - Enable & Disable
## Details
* **Component** : Core
* **Status** : Approved
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-789

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | The Product list page is displayed |
| Filter by Product Name | Number of products < Total of products<br><br>All products contain the searched Name |
| Click on the switch toggle and click on Disable | An alert "Product successfully deactivated." is displayed and the product is disabled |
| Click on the switch toggle and click on Enable | An alert "Product successfully activated." is displayed and the product is enabled |
| Reset Filters | Number of products = Total of products |
| Delete created products | Products well created |
