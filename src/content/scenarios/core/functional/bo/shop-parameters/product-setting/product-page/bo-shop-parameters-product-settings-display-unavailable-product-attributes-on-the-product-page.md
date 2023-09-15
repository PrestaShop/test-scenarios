---
title: "BO - Shop Parameters - Product Settings - Display unavailable product attributes on the product page"
weight: 3
---

# BO - Shop Parameters - Product Settings - Display unavailable product attributes on the product page
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1070

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Product Settings > Scroll down to Products stock | "Display unavailable attributes on the product page" option is set to YES |
| Go to BO > Catalog > Products > Edit "Brown bear notebook" > Combinations > Edit quantity to 0 for "Paper Type - Ruled" > Save and publish | Message Successful update is displayed |
| Preview the product | See in product page "Product available with different options" |
| Change combination to "Plain" | See label "In stock" displayed |
| Go back to BO > Shop Parameters > Product Settings > Scroll down to Products stock > Disable Display unavailable attributes on the product page > Save | Message Successful update is displayed |
| Preview the "Brown bear notebook" product | See that the option "Ruled" is not displayed in the dropdown.<br>Only Plain, Squared, Dotted are displayed |
