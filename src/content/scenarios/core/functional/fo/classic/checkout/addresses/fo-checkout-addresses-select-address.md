---
title: "FO - Checkout - Addresses: Select address"
weight: 3
---

# FO - Checkout - Addresses: Select address
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1304
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/11_checkout/02_addresses/03_selectAddress.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| Click on Add to cart | You should have a modal with "Product successfully added to your shopping cart" |
| Click on "Proceed to checkout" | You should have your shopping cart displayed with all your product on it |
| Clic on "Proceed to checkout" | You should be on "Personal information" Tab |
| * Click on SIgn in <br> * Set up your Email and Password <br> * Click on "continue" | * You should be redirect to Adresses tab with two posibilities of Adresses.<br> * The address on the left should be enclose and its checkbox should be checked |
| Clic on the second adresse | * The address on the right should be enclose and its checkbox should be checked |
