---
title: "BO - Order creation - Proceed to checkout in the front office"
weight: 11
---

# BO - Order creation - Proceed to checkout in the front office
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-10009

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Orders page and click on Add new Order | The Create order page is displayed |
| Search customer 'John DOE' and choose it | The customer-checkout-history block, the cart block and the address block are displayed |
| choose product with quantity = 4 and add it to cart | The product table is displayed, the Shipping block is displayed and the summary block is displayed |
| Clic to "More option > Proceed to checkout in the front office" | Checkout page in front office diplayed.<br><br>You're signed as John DOE and you've got 4 item in your cart |
| Choose adress, shipping method and payment and Clic to Place Order | h3. YOUR ORDER IS CONFIRMED |
