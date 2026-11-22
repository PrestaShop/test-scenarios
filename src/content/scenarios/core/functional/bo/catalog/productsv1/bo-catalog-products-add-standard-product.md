---
title: "BO - Catalog - Products - Add Standard Product"
weight: 2
---

# BO - Catalog - Products - Add Standard Product
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7554
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products > Click "New product" | Page New product will open |
| Fill the following fields > Enable product > Click Save | Message Settings updated. appears |
| Click "Preview" | New page will open with newly created product |
| Disable product by unchecking Offline option > Save > Click Preview | Message Settings updated. appears<br><br>FO page opens with message in header This product is not visible to your customers. |
| Go back to BO > Catalog > Products > Click 3 dots > Click Delete > Click Delete Now | Message Product successfully deleted. appears<br><br>Product is deleted |
