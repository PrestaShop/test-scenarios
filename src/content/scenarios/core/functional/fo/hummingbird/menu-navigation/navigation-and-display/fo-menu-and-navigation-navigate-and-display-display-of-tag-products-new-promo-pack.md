---
title: "FO - Menu and Navigation - Navigate and display - Display of tag products (New, Promo, Pack...)"
weight: 1
---

# FO - Menu and Navigation - Navigate and display - Display of tag products (New, Promo, Pack...)
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-6956

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on product "THE BEST IS YET TO COME' FRAMED POSTER" | Product "THE BEST IS YET TO COME' FRAMED POSTER" is well displayed<br><br>See the blue tag "NEW" displayed |
| Go to BO > Shop Parameters > Product Settings > Edit "Number of days for which the product is considered 'new'" = 0 > Save | Message Update successful is displayed |
| Go to FO > Product THE BEST IS YET TO COME' FRAMED POSTER > Refresh | See the Tag "NEW" is not displayed anymore |
| Go to BO > Edit product THE BEST IS YET TO COME' FRAMED POSTER > Go to Tab Pricing | Pricing Tab is displayed |
| Go to Specific Prices > Click Add a specific price > Set data with following info > Apply > Save | Message Settings updated is displayed |
| Click Preview on product | Product page in FO is displayed<br><br>See a new orange tag appear : -€10.00 |
| Go to BO > Create a new product > Add title > Choose Pack of products > Add products to your pack > Add quantity 100 > Switch to Online > Save > Click Preview | Product page in FO is well displayed<br><br>See the blue Tag "PACK" displayed |
| In BO > Product page > Edit quantity to 0 > Save | See the blue Tag "OUT-OF-STOCK" displayed |