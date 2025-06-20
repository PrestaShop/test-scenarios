---
title: "Cash on delivery (COD) module - Place an order with it"
weight: 1
---

# Cash on delivery (COD) module - Place an order with it
## Details
* **Component** : ps_cashondelivery
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4113
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/10_ps_cashondelivery/02_configuration/01_placeOrderWithIt.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The home page of the shop is well displayed |
| Scroll down on the page > Choose a product by clicking on "Quickview" > Click on "Add to cart" button on the product modal > Click on "Proceed to checkout" button on shopping cart modal | The Shopping cart page is well displayed with your product on it |
| Click on "Proceed to checkout" button on shopping cart page > Click on "Sign in" tab in "Personal information" step > Fill the form > Click on "Continue" button | * You are logged in<br> * The "Addresses" step is well displayed |
| Choose an address > Click on "Continue" button | The "Shipping method" step is well displayed |
| Choose a carrier > Click on "Continue" button | The "Payment" step is well displayed |
| Choose the "Pay by Cash on Delivery" payment > Check the "terms of service" checkbox > Click on "Place order" button | * A "You pay for the merchandise upon delivery" message is displayed when the "Pay by Cash on Delivery" payment is chosen<br> * The "Order confirmation" page is displayed with the payment method "Cash on delivery (COD)" displayed in "Order details" section |
| Go to BO > Orders > Orders | * Orders list page is displayed<br> * The first order of the list displayed the "Cash on delivery (COD)" payment and a "Awaiting Cash On Delivery validation" status |
