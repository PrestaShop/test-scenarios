---
title: "FO - Cart - Add a promo code"
weight: 3
---

# FO - Cart - Add a promo code
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1281

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Go to BO <br> * Go to Catalog > Discounts<br> * Click on Add new cart rule | * You should see the dashoboard of your shop <br> * You should see all the cart rules created if there is some one <br> * You should be on the modal to create a cart rules |
| * Set up your cart rules <br> * Clic on save | * Every specified field should be set <br> * You should see your new cart rules added on the list of cart rules |
| * Go to FO <br> * Clic "Hummingbird Printed T-shirt"<br> * Clic on "Add to cart"<br> * Clic on Proceed to checkout | * You should see you shop<br> * You'll see the page of your product<br> * You'll have a modal named "Product successfully added to your shopping cart"<br> * Your cart is displayed |
| * Clic on "Have a promo code ? "<br> * Write "reduc" on the new field <br> * Clic on "Add" button | * A new field should be displayed<br> * the field should have what you writted<br> * The name of your cart rules  should be add after the total and there is a new line named "Discount(s)" |
| * Clic on "Have a promo code ? "<br> * Write "reduc" on the new field <br> * Clic on "Add" button | * A new field should be displayed<br> * the field should have what you writted<br> * You should have a red message with "This voucher is already in your cart" |
| * Write "reduction" on the field for promo code <br> * Clic on "Add" button | * the field should have what you writted<br> * You should have a red message with "This voucher does not exist." |
| * Erase all what you writted in the field for promo code <br> * Clic on "Add" button | * the field should have what you writted<br> * You should have a red message with "You must enter a voucher code." |
| Delete promo code in BO |  |
