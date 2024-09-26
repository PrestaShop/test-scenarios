---
title: "BO - Search - Maximum word length (in characters)"
weight: 5
---

# BO - Search - Maximum word length (in characters)
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-9830

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Maximum word length (in characters) | 15 is displayed |
| Click on View my shop > Search in searchbar "hummingbird shirt" | SEARCH RESULTS<br>There is 1 product. |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Maximum word length (in characters) : 2 > Save | The settings have been successfully updated. |
| Refresh the FO | SEARCH RESULTS<br>There are 2 products. |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Maximum word length (in characters) : 1 > Save | The settings have been successfully updated. |
| Refresh the FO | SEARCH RESULTS<br>There are 13 products. |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Maximum word length (in characters) : 0 > Save | The settings have been successfully updated. |
| Refresh the FO | SEARCH RESULTS<br>There are 19 products. |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Maximum word length (in characters) : "" > Save | Tooltips : Veuillez renseigner ce champ. |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Maximum word length (in characters) : "vhgfud" > Save | The Maximum word length (in characters) field is invalid. |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Maximum word length (in characters) : 15 > Save | The settings have been successfully updated. |
