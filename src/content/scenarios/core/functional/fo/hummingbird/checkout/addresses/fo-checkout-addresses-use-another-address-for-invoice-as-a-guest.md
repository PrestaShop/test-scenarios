---
title: "FO - Checkout - Addresses - Use another address for invoice as a guest"
weight: 2
---

# FO - Checkout - Addresses - Use another address for invoice as a guest
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7020
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/11_checkout/02_addresses/02_useDifferentInvoiceAddress.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| Click on Add to cart | You should have a modal with "Product successfully added to your shopping cart" |
| Click on "Proceed to checkout" | You should have your shopping cart displayed with all your product on it |
| Clic on "Proceed to checkout" | You should be on "Personal information" Tab |
| * Set up different field on "New customer"<br> * Check the box about "the terms and conditions and privacy policy"<br> * Check the box about "Cutomer data privacy<br> * Clic on "Continue" | * You should be redirect to Adresses tab with different field to setup |
| * Set up your adress<br> * Disable the check box about "Use this address for invoice too" <br> * Clic on the button "Continue" | * You should be redirect to the same address tab <br> * The address you set up is on the Shipping address part <br> * You have to set up the "Your invoice Address" |
| * Set up your invoice adress<br> * Clic on the button "Continue" | * You should be redirect to Shipping method |
