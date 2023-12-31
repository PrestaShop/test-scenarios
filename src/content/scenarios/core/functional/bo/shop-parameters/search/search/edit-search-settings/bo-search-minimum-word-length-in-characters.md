---
title: "BO - Search - Minimum word length (in characters)"
weight: 5
---

# BO - Search - Minimum word length (in characters)
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-3614

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Minimum word length (in characters) | 3 is displayed |
| Click on View my shop > Search in searchbar "pack" | SEARCH RESULTS<br>There is 1 product.<br><br>Pack Mug + Framed Poster |
| Click on View my shop > Search in searchbar "pac" | SEARCH RESULTS<br>There is 1 product.<br><br>Pack Mug + Framed Poster |
| Click on View my shop > Search in searchbar "pa" | No matches were found for your search |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Minimum word length (in characters) : 5 > Save | The settings have been successfully updated. |
| Click on View my shop > Search in searchbar "noteb" | SEARCH RESULTS<br>There are 3 products.<br><br>Mountain Fox Notebook<br>Brown Bear Notebook<br>Hummingbird Notebook |
| Click on View my shop > Search in searchbar "note" | No matches were found for your search |