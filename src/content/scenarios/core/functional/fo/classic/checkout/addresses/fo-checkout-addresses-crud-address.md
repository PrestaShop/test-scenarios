---
title: "FO - Checkout - Addresses - CRUD address"
weight: 4
---

# FO - Checkout - Addresses - CRUD address
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1305

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In FO > Add a product to the cart > Proceed to checkout > Sign In with your customer | You are signed in<br><br>Step 2 (Addresses) of checkout process is displayed |
| Create new address > Continue | Step 3 of checkout process is displayed |
| Click Edit on Step 2 (Address) > Click on edit Address > Fill all fields (optional + non-optional) > Continue | Step 3 of checkout process is displayed |
| Click Edit on Step 2 (Address) > Click Add new address > Fill all fields > Continue | Step 3 of checkout process is displayed |
| Click on Billing address differs from shipping address | A new block appears : Your Invoice Address |
| Click on Add a new address in Your Invoice Address Block | A form is displayed in Your Invoice Address |
| Add an Alias to this address > Fill all fields > Continue | Step 3 of checkout process is displayed |
| Click Edit Step 2 > Delete your third created address | Message Address successfully deleted. is displayed |
| Choose the same address for Shipping Address & Your Invoice Address > Click Continue | Step 3 of checkout process is displayed |
| Click Edit Step 2 > Check the second address > Continue | Only one address block is displayed<br><br>Step 3 of checkout process is displayed |
| Click Edit Step 2 > Delete all addresses | Message Address successfully deleted. is displayed<br><br>Address creation form is displayed |
