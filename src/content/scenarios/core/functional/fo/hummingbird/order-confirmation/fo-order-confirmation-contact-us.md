---
title: "FO - Order confirmation - Contact us"
weight: 5
---

# FO - Order confirmation - Contact us
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7012
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/12_orderConfirmation/05_contactUs.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the shop in FO > Log into an existing customer account | You are logged in as customer |
| Add any product to cart > Proceed to checkout > Proceed to checkout > Continue to Shipping > Continue to Payment > Choose Pay by bank wire > Check the terms and conditions > Place Order | Your order is confirmed |
| In the "Order confirmation" page > Click on the "expert customer support team" link | Redirection to the "contact us" page |
| In the "Contact us" page > check if the email is correctly pre-filled | The email field is filled with the logged in customer email address |
| Select an order reference | The order reference is selected |
| Add a message in the textarea field > Add an attachment file > Click Send | Your message has been successfully sent to our team. |
| Go to the BO > Customer Service > Customer Service | See that the latest message is from John Doe<br>See that there's an attachment<br>See that the order is well referenced in the Orders and messages timeline |
