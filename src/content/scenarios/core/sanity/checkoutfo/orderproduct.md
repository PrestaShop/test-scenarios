---
title: "OrderProduct"
weight: 1
---

# OrderProduct
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1345
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/06_checkoutFO/01_orderProduct.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the FO homepage | Home page is displayed correctly |
| Connect with the user account | User is correctly connected |
| Go to the FO homepage | Home page is displayed correctly |
| Add first product to the cart. Click on Proceed to Checkout" | Product is added to the cart. Checkout page is displayed correctly |
| Check cart details are correct | Details about the product are correct: - name - price - quantity - total amount |
| Continue checkout process to addresses page | Addresses page is displayed correctly |
| Select first address. Click on Continue" | Address is selected. Payment page is displayed correctly |
| Select Wire payment. Confirm payment | Wire is selected. Payment is confirmed |
