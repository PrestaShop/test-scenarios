---
title: "BO - Shop Parameters - Search - Indexing - Set a cron job"
weight: 4
---

# BO - Shop Parameters - Search - Indexing - Set a cron job
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8737
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/07_search/01_search/04_indexingSetCronJob.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Search > Scroll to block Indexing | See Indexed products 19 / 19. |
| Go to Catalog > Products > Add a product > Save | Successful creation |
| Go to Shop Parameters > Search > Scroll to block Indexing | See Indexed products 20 / 20. |
| Disable Indexing > Save | The settings have been successfully updated. message is displayed |
| Go to Catalog > Products > Add a product > Save | Successful creation |
| Go back to Shop Parameters > Search > Scroll to block Indexing > Click on the URL | Blank page is displayed |
| Click Previous > Refresh the page | The settings have been successfully updated.<br><br>See Indexed products 21 / 21. |
