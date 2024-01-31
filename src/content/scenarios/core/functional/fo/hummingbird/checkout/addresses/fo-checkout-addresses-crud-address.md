---
title: "FO - Checkout - Addresses - CRUD address"
weight: 4
---

# FO - Checkout - Addresses - CRUD address
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7022

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In FO > Add a product to the cart > Proceed to checkout > Proceed to checkout > Sign In with your customer > Continue | You are signed in<br><br>Step 2 Addresses is displayed |
| Add new address > Continue | Step 3 Shipping method is displayed |
| Click Edit on Step 2 Addresses > Click on edit your latest Address (with alias Office) > Fill all fields (optional + non-optional) > Continue | Step 3 Shipping method is displayed |
| Click Back to Addresses > Click on Billing address differs from shipping address | A new block appears : Your Invoice Address |
| Click on Add a new address in Your Invoice Address Block | A form is displayed in Your Invoice Address |
| Add an Alias to this address > Fill all fields > Continue | Step 3 Shipping method is displayed |
| Click Back to addresses > Delete your address named Invoice address | Message Address successfully deleted. is displayed |
| Click Back to addresses > Choose the same address for Shipping Address & Your Invoice Address > Click Continue to shipping | Step 3 Shipping method is displayed |
| Click Edit Step Addresses > Delete all addresses created addresses | Message Address successfully deleted. is displayed<br><br>Address creation form is displayed |
