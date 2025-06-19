---
title: "FO - Order confirmation - Contact us"
weight: 5
---

# FO - Order confirmation - Contact us
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1686
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/12_orderConfirmation/05_contactUs.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the shop FO | The FO homepage shop is displayed |
| Login to a existing customer account | Logged in as customer |
| Add a product to cart | The confirmation modal is displayed |
| In the "add to cart" confirmation modal click on the "order" button | Redirected to the cart page |
| In the cart page click on the order button | the checkout process is started and the "address selection" step is displayed |
| Click on the "next" button | The delivery mode selection is displayed |
| Click on "next" button | The payment method is now displayed |
| Select a paiement method, check the "generals conditions" checkbox and click on the "order" button | The order is now completed and the "order confirmation" page is displayed |
| In the "order confirmation" page click on the "client support" link | Redirection to the "contact us" page |
| In the "contact us" page, check if the email is correctly pre-filled | The email field is filled with the logged in customer email address |
| Select a order reference | The order reference is selected |
| Add a message in the textarea field | The textarea field is filled with the message |
| Add a attachment file | The attachment file is correctly added |
| click on the "send message" button | A success message is displayed |
| Go to the BO | The BO login page is displayed |
| Login to the BO | Redirected to the BO dashboard page as logged in user |
| Go to the customer service page | The customer service page is displayed |
| in the customer service page check in the customer service table if the previously send message is correctly displayed | The previously send message is displayed and all the informations are correct |
