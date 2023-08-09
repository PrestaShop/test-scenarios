---
title: "BO - Shop Parameters - Product Settings - Enable, disable, force update friendly url"
weight: 4
---

# BO - Shop Parameters - Product Settings - Enable, disable, force update friendly url
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1066

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Shop parameters > Product Settings' page | page title contains 'Product Settings' |
| Enable force update friendly URL | Successful message is displayed |
| Go to product page and create a product | Setting updated message is displayed |
| Update name if the product | Frindly URL was updated too |
| delete product | Successful message is displayed |
| go to 'Shop parameters > Product Settings' page | page title contains 'Product Settings' |
| disable force update friendly URL | Successful message is displayed |
