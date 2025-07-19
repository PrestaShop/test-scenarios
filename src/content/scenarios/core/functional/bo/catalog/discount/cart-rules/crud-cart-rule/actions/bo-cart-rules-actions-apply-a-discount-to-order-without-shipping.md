---
title: "BO - Cart rules - Actions - Apply a discount to Order (without shipping)"
weight: 6
---

# BO - Cart rules - Actions - Apply a discount to Order (without shipping)
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10322

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for in Information tab > Click on tab Actions | Tab Actions is displayed |
| Enter data for Tab "Actions" > Save | Success Message is displayed: "Successful creation" |
| Click on "View my store" > Add a product to the cart with the discount code | The discount is only applied to the product in the cart<br><br>|1 item|€34.80|<br>|Discount(s)|-€6.96|<br>|Shipping|Free|<br>|Total (tax incl.)|€27.84|<br>|Test|-€6.96| |
| Click on Proceed to checkout > Enter information for Step 1 (Personal Information) and Step 2 (Addresses) > In Step 3 (Shipping method) > Choose My carrier | See that the discount is applied only to the product, not on the whole cart (products + shipping).<br>|1 item|€34.80|<br>|Discount(s)|-€6.96|<br>|Shipping|€8.40|<br>|Total (tax incl.)|€36.24|<br>|Test|-€6.96| |
| Go back to cart rule page in BO > Delete the cart rule | Success Message: "Successful deletion" |
