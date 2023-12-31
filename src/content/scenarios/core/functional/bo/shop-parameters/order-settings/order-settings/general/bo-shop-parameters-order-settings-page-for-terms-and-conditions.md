---
title: "BO - Shop Parameters - Order Settings - Page for terms and conditions"
weight: 8
---

# BO - Shop Parameters - Order Settings - Page for terms and conditions
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1056

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Order Settings > in dropdown of Page for terms and conditions, choose page Secure Payment > Save | Message "Update successful" appears |
| Go to FO > Add a product to cart > Checkout until step 4 - Payment > Click link "Terms of service" | Popup opens with content of page "Secure Payment" |
| Go to BO > Design > Pages > Add a new page > Fill fields > Save | New page is created<br><br>Message "Successful creation." |
| Go to BO > Shop Parameters > Order Settings > in dropdown of Page for terms and conditions, choose newly created page > Save | Message "Update successful" appears |
| Go to FO > Add a product to cart > Checkout until step 4 - Payment > Click link "Terms of service" | Popup opens with content of page "terms" |