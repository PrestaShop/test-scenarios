---
title: "BO - Search - Search exact end match"
weight: 2
---

# BO - Search - Search exact end match
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-3610

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Search > Scroll down to block Search - option Search exact end match | The option is disabled |
| Go to FO > Search in searchbar "note" | SEARCH RESULTS<br>There are 3 products. |
| Go to BO > Shop parameters > Search > Scroll down to block Search - option Search exact end match > Enable option Search exact end match > Save | The settings have been successfully updated. |
| Go to Catalog > Products > Create a standard product > Save | Message Successful update is displayed |
| Go to FO > Search in searchbar "note" | Only the product note is displayed<br>SEARCH RESULTS<br>There are 1 product. |
