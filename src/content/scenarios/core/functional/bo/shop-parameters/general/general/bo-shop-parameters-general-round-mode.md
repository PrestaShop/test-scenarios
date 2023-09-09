---
title: "BO - Shop Parameters - General - Round mode"
weight: 6
---

# BO - Shop Parameters - General - Round mode
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1043

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Add Standard simple Product | Product added and displayed |
| Go to BO > International > Localization > Currencies tab | Currencies page is displayed |
| Filter by Currency > Click on *Search* button | Currency table contains "Euro" |
| Click on *Edit* icon button > Set Decimals field > Click *Save* button | Message "Successful update" is displayed |
| *CASE 1 : Round up away from zero,when it is half way there(recommended)* |  |
| GO to Shop Parameters > General > Select Round mode > Click *Save* button | Message "Successful update" is displayed |
| GO to BO > Catalog > Products > filter by Name > click *Search* button | Items price is updated : 42.56 [€|http://localhost:8081/prestashop_8.1.1/admin-dev/index.php/sell/catalog/products-v2/20/edit?_token=i6aupz8VwxQ5HeB_3FV4-8kiBsbMn9QLvOhK2OQ__PE#tab-product_pricing-tab] |
| *CASE 2 : Round down toward zero, when it is half way there* |  |
| GO to Shop Parameters > General > Select Round mode > Click *Save* button | Message "Successful update" is displayed |
| GO to BO > Catalog > Products > filter by Name > click *Search* button | Items price is updated : 42.56 [€|http://localhost:8081/prestashop_8.1.1/admin-dev/index.php/sell/catalog/products-v2/20/edit?_token=i6aupz8VwxQ5HeB_3FV4-8kiBsbMn9QLvOhK2OQ__PE#tab-product_pricing-tab] |
| *CASE 3 : Round towards the next even value* |  |
| GO to Shop Parameters > General > Select Round mode > Click *Save* button | Message "Successful update" is displayed |
| GO to BO > Catalog > Products > filter by Name > click *Search* button | Items price is updated : 42.56 [€|http://localhost:8081/prestashop_8.1.1/admin-dev/index.php/sell/catalog/products-v2/20/edit?_token=i6aupz8VwxQ5HeB_3FV4-8kiBsbMn9QLvOhK2OQ__PE#tab-product_pricing-tab] |
| *CASE 4 :* *Round towards the next odd value**.* |  |
| GO to Shop Parameters > General > Select Round mode > Click *Save* button | Message "Successful update" is displayed |
| GO to BO > Catalog > Products > filter by Name > click *Search* button | Items price is updated : 42.56 [€|http://localhost:8081/prestashop_8.1.1/admin-dev/index.php/sell/catalog/products-v2/20/edit?_token=i6aupz8VwxQ5HeB_3FV4-8kiBsbMn9QLvOhK2OQ__PE#tab-product_pricing-tab] |
| *CASE 5 :* *Round up to the nearest value* |  |
| GO to Shop Parameters > General > Select Round mode > Click *Save* button | Message "Successful update" is displayed |
| GO to BO > Catalog > Products > filter by Name > click *Search* button | Items price is updated : 42.56 [€|http://localhost:8081/prestashop_8.1.1/admin-dev/index.php/sell/catalog/products-v2/20/edit?_token=i6aupz8VwxQ5HeB_3FV4-8kiBsbMn9QLvOhK2OQ__PE#tab-product_pricing-tab] |
| *CASE 6 :* *Round down to the nearest value* |  |
| GO to Shop Parameters > General > Select Round mode > Click *Save* button | Message "Successful update" is displayed |
| GO to BO > Catalog > Products > filter by Name > click *Search* button | Items price is updated : 42.55 [€|http://localhost:8081/prestashop_8.1.1/admin-dev/index.php/sell/catalog/products-v2/20/edit?_token=i6aupz8VwxQ5HeB_3FV4-8kiBsbMn9QLvOhK2OQ__PE#tab-product_pricing-tab] |
| Go to Catalog > Products > Click on the *three dots* > Click *Delete* | A modal is displayed with two options : Cancel and Delete buttons<br>modal title : Delete selection |
| Click on *Delete* button | Message displayed : "Successful deletion" |
