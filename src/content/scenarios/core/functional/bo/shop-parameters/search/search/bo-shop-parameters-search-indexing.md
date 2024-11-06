---
title: "BO - Shop Parameters - Search - Indexing"
weight: 3
---

# BO - Shop Parameters - Search - Indexing
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1127

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Search > Scroll to block Indexing | See Indexed products 19 / 19. |
| Go to Catalog > Products > Add a product > Save | Successful creation |
| Go to Shop Parameters > Search > Scroll to block Indexing | See Indexed products 20 / 20. |
| Disable Indexing > Save | The settings have been successfully updated. message is displayed |
| Go to Catalog > Products > Add a product > Save | Successful creation |
| Go back to Shop Parameters > Search > Scroll to block Indexing | See Indexed products 20 / 21. |
| Click Add missing products to the index | Successful update message is displayed<br><br>See Indexed products 21 / 21. |
| Go to Catalog > Products > Add a product > Save | Successful creation |
| Go back to Shop Parameters > Search > Scroll to block Indexing | See Indexed products 21 / 22. |
| Click on Re-build the entire index | Successful update message is displayed<br><br>See Indexed products 22 / 22. |
