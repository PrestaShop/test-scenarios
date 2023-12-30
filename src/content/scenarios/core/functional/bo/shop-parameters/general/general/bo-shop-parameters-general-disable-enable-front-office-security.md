---
title: "BO - Shop Parameters - General - Disable / enable Front office security"
weight: 2
---

# BO - Shop Parameters - General - Disable / enable Front office security
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-1044

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > General | Preferences page is displayed<br><br>General tab is selected by default |
| Switch  *Increase front office security* toggle switch button to *Yes* > Click *Save* button | Message displayed "Successful update" |
| Click on View my store link | New tab in browser is opened<br><br>FO is well displayed |
| Add items to Cart | Modal is displayed with message "Product successfully added to your shopping cart" |
| Click PROCEED TO CHECKOUT  button | Shopping cart is displayed |
| Inspect the page > search for "token" in html (Elements tab) | token is available in html |