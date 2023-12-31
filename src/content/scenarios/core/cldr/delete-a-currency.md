---
title: "Delete a currency"
weight: 3
---

# Delete a currency
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1363
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/cldr/03_deleteCurrency.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization > Currencies > Add 3 currencies : GBP, JPY and USD | 3 new currencies are created<br><br>Message "Successful creation" appears |
| Go to Localization Tab > Change default currency to USD > Save | Popup appears to confirm<br><br>Message "Update successful" appears |
| Click on the 3-dot button for USD > Delete | Message "You cannot delete the default currency" appears |
| Go to Localization Tab > Change default currency back to EUR > Save | Popup appears to confirm<br><br>Message "Update successful" appears |
| Go to Currencies Tab > Click on the 3-dot button for USD > Delete | A popup titled "Delete selection" appears |
| Click Delete to confirm the deletion | Message "Successful deletion." appears<br><br>USD is no longer in the list of currencies<br><br>Currency number is updated |
| Check GBP and JPY > Click on button Bulk Action > Click on Delete Selected > Deleted | A popup appears to confirm the deletion<br><br>Message "The selection has been successfully deleted." appears<br><br>GBP and JPY are no longer in the currency list<br><br>Number of currencies is updated |