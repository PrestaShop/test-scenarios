---
title: "BO - Shop Parameters - General - Disable / Enable Front office security"
weight: 2
---

# BO - Shop Parameters - General - Disable / Enable Front office security
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1044

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > General | Preferences page is displayed<br><br>General tab is selected by default |
| Switch *Increase front office security* toggle to *Yes* > Click *Save* button | Message displayed "Successful update" |
| Click on View my store > Add items to Cart > Click Proceed to checkout | Shopping cart is displayed |
| Inspect the page > Search for "token" in html (Elements tab) | See 4 occurrences of token |
| Go back to BO > Advanced parameters > Switch *Increase front office security* toggle to *No* > Click Save button | Message displayed "Successful update" |
| Refresh your cart page > Inspect the page > Search for "token" in html (Elements tab) | See 3 occurrences of token |
