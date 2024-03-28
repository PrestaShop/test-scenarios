---
title: "FO - Menu and Navigation - Navigate and display - Display of tag products (New, Promo, Pack...)"
weight: 1
---

# FO - Menu and Navigation - Navigate and display - Display of tag products (New, Promo, Pack...)
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6956
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/08_menuAndNavigation/03_navigationAndDisplay/01_displayTags.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on product "THE BEST IS YET TO COME' FRAMED POSTER" | Product "THE BEST IS YET TO COME' FRAMED POSTER" is well displayed<br><br>See the blue tag "NEW" displayed |
| Go to BO > Shop Parameters > Product Settings > Edit "Number of days for which the product is considered 'new'" = 0 > Save | Message Update successful is displayed |
| Go to FO > Product THE BEST IS YET TO COME' FRAMED POSTER > Refresh | See the Tag "NEW" is not displayed anymore |
| Go to BO > Products > Edit product THE BEST IS YET TO COME' FRAMED POSTER > Go to Tab Pricing | Pricing Tab is displayed |
| Go to Specific Prices > Click Add a specific price > Set data with following info > Apply > Save and publish | Message Successful creation is displayed |
| Click Preview on product | Product page in FO is displayed<br><br>See a new orange tag appear : -€10.00 |
| Go to FO > Search "pack" in search bar > Open produck Pack Mug + Framed poster | Product page in FO is well displayed<br><br>See the blue Tag "PACK" displayed |
| In BO > Products > Edit product page Pack Mug + Framed poster > Edit quantity to 0 > Save | Message Successful creation is displayed |
| Preview product | FO is displayed > See the blue Tag "Out-of-stock" displayed |
