---
title: "BO - Discount - Create a discount that applies automatically or via promo code "
weight: 10
---

# BO - Discount - Create a discount that applies automatically or via promo code 
## Details
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-11288

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Discounts | Discounts page should be displayed<br><br>empty discount list |
| Click to Create discount<br>Choose "On cart amount" | Create cart discount displayed |
| Fill form and save | Discount page displayed<br><br>Error Message: The field names is required at least in your default language. |
| Fill form > Set amount discount 0 > Save | Discount page displayed<br><br>Error Message: Reduction value "0" is invalid. It must be greater than 0. |
| Fill form > Enter a negative discount amount > Save | Discount page displayed: <br><br>Reduction value "-20" is invalid. It must be greater than 0. |
| Fill form > Save | Discount page displayed<br><br>Successful Message: Successful update<br>Discount list = 1 |
| Go to FO > Add a product > Checkout | 1 item€34.80<br>Discount(s)-€10.00<br>ShippingFree<br>Total (tax incl.)€24.80<br> * test<br>-€10.00<br> <br><br>Discount applied automatically |
| BO > edit the discount | Successful update |
| Go to FO > Add a product > Checkout | 1 item€34.80<br>ShippingFree<br>Total (tax incl.)€34.80<br><br> <br><br>Discount doesn't applied automatically |
| Fill promo code field | 1 item€34.80<br>Discount(s)-€10.00<br>ShippingFree<br>Total (tax incl.)€24.80<br> * __test<br>-€10.00 |
| BO > edit the discount > click to Generate button | New random promo code displayed |
| click to Generate button | Another new random promo code displayed |
| Click to save | Successful update |
| Go to FO > Add a product > Checkout | 1 item€34.80<br>ShippingFree<br>Total (tax incl.)€34.80<br><br> <br><br>Discount doesn't applied automatically |
| Fill promo code field | 1 item€34.80<br>Discount(s)-€10.00<br>ShippingFree<br>Total (tax incl.)€24.80<br> * __test<br>-€10.00 |
| Proceed to checkout > fill form and Place Order | Your order is confirmed<br><br>Subtotal<br>€34.80<br>Discount<br>- €10.00<br>Shipping and handling<br>Free<br>Total (tax incl.)<br>€24.8 |
| BO > Discount > Delete the discount | Discount deleted |
