---
title: "BO - Search - Search within word"
weight: 1
---

# BO - Search - Search within word
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-3609

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Search within word | Option Search within word is disabled |
| Click on View my shop > Search in searchbar : "book" | SEARCH RESULTS<br>There are 3 products.<br><br>No product with title "bird" |
| Go to BO > Shop Parameters > Search > Scroll down to block Search > Enable option Search within word > Save | The settings have been successfully updated. |
| Click on View my shop > Search in searchbar : "book" | SEARCH RESULTS<br>There are 3 products.<br><br>3 products with title "bird" |
