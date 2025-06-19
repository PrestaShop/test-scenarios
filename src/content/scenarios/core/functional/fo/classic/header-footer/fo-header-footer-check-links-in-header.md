---
title: "FO - Header & Footer - Check links in header"
weight: 1
---

# FO - Header & Footer - Check links in header
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1195
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/02_headerAndFooter/01_checkLinksInHeader.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on top left link "Contact us" | Contact form page is well displayed |
| Click on "Sign In" link on top right > Enter your email + password with the customer account created from the pre-condition step > Click on "Sign In" button | * You are now logged in<br> * 2 new links are displayed instead of "Sign in" link : "Sign Out" + "your name" |
| Click on "your name" account button in header | Your account page is displayed |
| Go to home page > click on a product | Product page is well displayed |
| Click on "Add to cart" button | Add to cart modal is displayed |
| Click on "Continue shopping" button on modal > Click on top right Cart button | Shopping cart is now displayed |
| Click on Sign out | * You are now logged out<br> * The cart is now empty<br> * The "Sign in" link is displayed instead of "Sign Out" + "your name" links |
