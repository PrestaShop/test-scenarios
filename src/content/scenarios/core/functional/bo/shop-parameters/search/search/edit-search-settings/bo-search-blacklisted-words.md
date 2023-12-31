---
title: "BO - Search - Blacklisted words"
weight: 6
---

# BO - Search - Blacklisted words
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-3615

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Search > Scroll down to clock Search - option Blacklisted words | See a list of blacklisted words |
| Go to Catalog > Products > Create a standard product > Save | Message Successful update is displayed |
| View my shop > Search in searchbar "does" | Search result : No matches were found for your search |
| Go to BO > Shop parameters > Search > Scroll down to clock Search - option Blacklisted words > Delete the word "does" > Save | The settings have been successfully updated. |
| View my shop > Search in searchbar "does" | "test does" product is displayed |
