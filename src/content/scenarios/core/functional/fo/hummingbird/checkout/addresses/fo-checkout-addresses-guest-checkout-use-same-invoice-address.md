---
title: "FO - Checkout - Addresses - Guest checkout : Use same invoice address"
weight: 1
---

# FO - Checkout - Addresses - Guest checkout : Use same invoice address
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-7019

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| Click on Add to cart | You should have a modal with "Product successfully added to your shopping cart" |
| Click on "Proceed to checkout" | You should have your shopping cart displayed with all your product on it |
| Clic on "Proceed to checkout" | You should be on "Personal information" Tab |
| * Set up different field on "Order as guest"<br> * Check the box about "the terms and conditions and privacy policy"<br> * Check the box about "Cutomer data privacy<br> * Clic on "Continue" | * You should be redirect to Adresses tab with different field to setup |
| * Set up your adress<br> * let the check box checked about "Use this address for invoice too" <br> * Clic on the button "Continue" | * You should be redirect to Shipping method |
