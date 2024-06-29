---
title: "BO - Search - Maximum approximate words allowed by fuzzy search"
weight: 4
---

# BO - Search - Maximum approximate words allowed by fuzzy search
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3612

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Search > Scroll down to block Search - option Maximum approximate words allowed by fuzzy search | 4 is displayed |
| Edit Maximum approximate words allowed by fuzzy search : 3 > Save | The settings have been successfully updated. |
| Click on View my shop > Search in searchbar : "notenook" | SEARCH RESULTS<br>There are 3 products.<br><br>Mountain Fox Notebook<br>Brown Bear Notebook<br>Hummingbird Notebook |
| Click on View my shop > Search in searchbar : "briow beer" | SEARCH RESULTS<br>There are 3 products.<br><br>Brown Bear Cushion<br>Brown Bear - Vector Graphics<br>Brown Bear Notebook |
