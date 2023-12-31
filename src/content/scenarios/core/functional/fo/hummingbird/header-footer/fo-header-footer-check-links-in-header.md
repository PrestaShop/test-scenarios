---
title: "FO - Header & Footer - Check links in header"
weight: 1
---

# FO - Header & Footer - Check links in header
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4970
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/02_headerAndFooter/01_checkLinksInHeader.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on top left link "Contact us" | Contact us form page is well displayed |
| Click on "Sign in" link on top right > Enter your Email + Password with the customer account created from the pre-condition step > Click on "Sign in" button | * You are now logged in<br> * A new drop-down list is displayed, instead of "Sign in" the link displays "your name" |
| Click on "your name" | A drop-down list opens showing six links:<br> * Your account<br> * Information<br> * Addresses<br> * Orders<br> * Credit slips<br> * Sign out |
| Click on "your account" link in the select | Your account page is displayed, the browser header takes "My account" as a value. |
| Click on "your name" > Click on "Information" | "Your personal information" page is displayed, the browser header takes as a value "Identity" |
| Click on "your name" > Click on "Addresses" | Your addresses page is displayed, the browser header takes as a value : "Addresses" |
| Click on "your name" > Click on Orders | The "Order history" page is displayed, the browser header takes as a value: "Order history" |
| Click on "your name" > Click on "Credit slips" | The "Credit slips" page is displayed, the browser header takes as a value: "Credit slip" |
| Go to home page > click on a product | Product page is well displayed |
| Click on "Add to cart" button | Add to cart modal is displayed |
| Click on "Continue shopping" button on modal > Click on top right Cart button | Shopping cart is now displayed |
| Click on "your name" > Click on Sign out | * You are now logged out<br> * The cart is now empty<br> * The "Sign in" link is displayed instead of the drop-down list |
