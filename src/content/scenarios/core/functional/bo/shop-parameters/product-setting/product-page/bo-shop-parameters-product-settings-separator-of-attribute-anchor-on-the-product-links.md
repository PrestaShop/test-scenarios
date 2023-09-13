---
title: "BO - Shop Parameters - Product Settings - Separator of attribute anchor on the product links"
weight: 4
---

# BO - Shop Parameters - Product Settings - Separator of attribute anchor on the product links
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1071

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Open the product HUMMINGBIRD PRINTED T-SHIRT | Check the URL > See that it is like the following : my_shop.com/en/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white |
| Go to BO > Shop Parameters > Product Settings > Change Separator of attribute anchor on the product links to "," > Save | Message Update successful is displayed |
| Go back to FO > Refresh the page of product HUMMINGBIRD PRINTED T-SHIRT | Check the URL > See that it is like the following : my_shop.com/en/men/1-1-hummingbird-printed-t-shirt.html#/1,size,s/8,color,white |
