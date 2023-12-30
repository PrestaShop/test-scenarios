---
title: "BO - Shop Parameters - General - Round mode"
weight: 4
---

# BO - Shop Parameters - General - Round mode
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1043
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/01_general/general/05_roundMode.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *CASE 1 : Round up away from zero, when it is half way there (recommended)* |  |
| G to Shop Parameters > General > Select Round mode > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Add a new product > Standard product > Save | Message "Successful update" is displayed |
| Preview the product | See the price is *17.12 €* |
| *CASE 2 : Round down towards zero, when it is half way there* |  |
| Go to Shop Parameters > General > Select Round mode > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Preview *TEST* product | See the price is *17.11 €* |
| *CASE 3 : Round towards the next even value* |  |
| Go to Shop Parameters > General > Select Round mode > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Preview *TEST* product | See the price is *17.12 €* |
| *CASE 4 :* *Round towards the next odd value**.* |  |
| Go to Shop Parameters > General > Select Round mode > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Preview *TEST* product | See the price is *17.11 €* |
| *CASE 5 :* *Round up to the nearest value* |  |
| Go to Shop Parameters > General > Select Round mode > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Preview *TEST* product | See the price is *17.12 €* |
| *CASE 6 :* *Round down to the nearest value* |  |
| Go to Shop Parameters > General > Select Round mode > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Preview *TEST* product | See the price is *17.11 €* |
| *Case when the last digit of price is < 5* |  |
| Go to BO > Catalog > Products > Edit *TEST* product > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Edit *TEST* product > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Preview *TEST* product | See the price is *17.11 €* |
| Go to Shop Parameters > General > Select Round mode > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Preview *TEST* product | See the price is *17.12 €* |
| *Case when the last digit of price is > 5* |  |
| Go to BO > Catalog > Products > Edit *TEST* product > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Edit *TEST* product > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Preview *TEST* product | See the price is *17.12 €* |
| Go to Shop Parameters > General > Select Round mode > Save | Message "Successful update" is displayed |
| Go to BO > Catalog > Products > Preview *TEST* product | See the price is *17.11 €* |
| Go to Catalog > Products > Delete *TEST* product | Message displayed : "Successful deletion" |