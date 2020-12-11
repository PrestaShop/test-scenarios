---
title: Bulk actions status (TODO)
weight: 10
---

## Preconditions

Having a shop installed locally
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Open the FO | The Home page FO is displayed successfully |
| G to login page and login with the default account <br>login: "pub@prestashio.com"<br>PWD: "123456789" | The customer is logged successfully |
| Add the first product to the cart | There is one product in the cart |
| Click on "Proceed to checkout" button | The purchase form is displayed correctly |
| Go to delivery step | The delivery step is displayed correctly |
| Go to the payment step | The payment step is displayed correctly |
| Choose the payment method and confirm the order | The confirmation page is displayed correctly |
| Go to Home page | The Home page FO is displayed successfully |
| Add the first product to the cart | There is one product in the cart |
| Click on "Proceed to checkout" button | The purchase form is displayed correctly |
| Go to delivery step | The delivery step is displayed correctly |
| Go to the payment step | The payment step is displayed correctly |
| Choose the payment method and confirm the order | The confirmation page is displayed correctly |
| Sign out from FO | The customer is disconnected successfully |
| Go to the BO and connect with an admin account | The admin is connected successfully |
| Go to the "Orders > Orders" page | Orders listing is displayed correctly |
| Select the first and second order from list and update statuses with bulk actions to payment accepted | The order status is changed successfully |
