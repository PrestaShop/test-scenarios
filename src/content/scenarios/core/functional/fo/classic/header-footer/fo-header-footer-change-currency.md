---
title: "FO - Header & Footer - Change currency"
weight: 4
---

# FO - Header & Footer - Change currency
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1198
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/02_headerAndFooter/03_changeCurrency.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1: You have one currency only* | The link to change currency will not appear in header of FO |
| *Case 2: You have 2 or more currencies*<br><br>Go to FO > Click on your current currency > Switch to another currency | See that the price of your product is now in the new currency with the new exchange rate |
| Switch back to your original currency | The prices of products are now in the original currency with the original exchange rate |