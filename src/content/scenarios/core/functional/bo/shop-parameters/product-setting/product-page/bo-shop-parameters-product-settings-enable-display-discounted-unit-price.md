---
title: "BO - Shop Parameters - Product Settings - Enable display discounted unit price"
weight: 6
---

# BO - Shop Parameters - Product Settings - Enable display discounted unit price
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1073

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Product Settings > Scroll down to Product page block | See that the option "Display the discounted unit price" is disabled |
| Create a standard product > Use following data > Put in online > Save | Message Successful update is displayed |
| Preview the product | FO is displayed with your Test product page. <br><br>The following table is displayed:<br><br>Volume discount<br>||Quantity||Unit discount||You Save||<br>|3|€2.00|€6.00| |
| Go to BO > Shop parameters > Product Settings > Scroll down to Product page block > Enable "Display the discounted unit price" option > Save | Message Successful update is displayed |
| Go to FO > Refresh the product page | FO is displayed with your Test product page. <br><br>The following table is displayed:<br><br>Volume discount<br>||Quantity||Unit price||You Save||<br>|3|€8.00|€6.00| |
