---
title: "FO - Header & Footer - Check links in footer"
weight: 2
---

# FO - Header & Footer - Check links in footer
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4971
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/02_headerAndFooter/02_checkLinksInFooter.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Go to footer | * See 4 blocks :<br> ** Products<br> ** Our company<br> ** Your account<br> ** Store Information<br> * See also Copyright link at the bottom of the footer: "© XXXX - Ecommerce software by PrestaShop™ " link" |
| Go to footer >  Products block > click on all links | * "Prices drop" link redirects to "Prices drop" page<br> * "New products" link redirects to "New products" page<br> * "Best sellers" link redirects to "Best sellers"  page |
| Go to footer > "Our company" block > click on all links | * "Delivery" link redirects to "Delivery" page<br> * "Legal Notice" link redirects to "Legal Notice" page<br> * "Terms and conditions of use" link redirects to "Terms and conditions of use" page<br> * "About us" link redirects to "About us" page<br> * "Secure payment" link redirects to "Secure payment" page<br> * "Contact us" link redirects to "Contact us" page<br> * "Sitemap" link redirects to "Sitemap" page<br> * "Stores" link redirects to "Our stores" page |
| *Case 1: you are logged into your customer account created from the pre-condition step*<br><br>Go to footer > Our your account block > click on all links | * "Information" link redirects to "Your personal information" page<br> * "Addresses" link redirects to "Addresses" page<br> * "Orders" link redirects to "Order history" page<br> * "Credit slips" link redirects to "Credit slips" page<br> * "Wishlist" link redirects to "My wishlists" page<br> * "Sign out" link logged out of your customer account created from the pre-condition step & redirect to "Log in to your account" page |
| *Case 2: you are not logged in*<br><br>Go to footer > "Your account" block > click on all links | * "Order tracking" link redirects to "Guest Order Tracking" page<br> * "Sign in" link redirects to "Log in to your account" page<br> * "Create account" link redirects to "Create an account" page |
| Go to footer > Store information block > Click on the email address | You will be able to send a direct email |
| Click on the copyright "© XXXX - Ecommerce software by PrestaShop™ " link | A new tab is displayed with home page of prestashop-project website |
| Go to BO > Customers list page & delete the customer created in the pre-condition | The alert "Successful deletion." is well displayed |
