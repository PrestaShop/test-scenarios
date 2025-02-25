---
title: "BO - Cart rules - Actions - Free shipping"
weight: 2
---

# BO - Cart rules - Actions - Free shipping
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-10318

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Enter data for Information > Click on Save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Actions" > Enable Free shipping > Save | Success Message is displayed: "Successful creation" |
| Click on View my store > Add a product to the cart | Shipping should be free. See in cart :<br>|Subtotal|€34.80|<br>|Shipping|Free|<br>|Total (tax incl.)|€34.80| |
| Click on Proceed to checkout > Continue the checkout process until Step 3 - Shipping method | See all Shipping method choices are free:<br><br>Click and collect - Pick up in-store - Free<br>My carrier - Delivery next day! - Free |
| Choose "My carrier" | |Subtotal|€22.94|<br>| Discount(s)| -€8.40|<br>| Shipping|Free|<br>| Total (tax incl.)|€22.94|<br>| Test| Free shipping| |
| Click on Tab "Actions" > Disable Free shipping option > Save | Error Message: An action is required for this cart rule. |
| Go to Cart rules page > Delete Cart rule | Success message:"Successful deletion" |
