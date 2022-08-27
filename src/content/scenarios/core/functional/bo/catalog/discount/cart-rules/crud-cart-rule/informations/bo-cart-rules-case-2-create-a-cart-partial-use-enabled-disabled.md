---
title: "BO - Cart rules - Case 2 - Create a cart partial use enabled / Disabled"
weight: 2
---

# BO - Cart rules - Case 2 - Create a cart partial use enabled / Disabled
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go back to BO > Catalog > Discounts > Cart rules page and Add new Cart rule | The Add New cart rule page is displayed |
| *Case1: Partial Use Enabled*<br><br>Set these fields and click on Save | An alert "Successful creation." is displayed |
| Go to FO, add a product to the cart and Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is well applied<br><br>Total is ok = *0* |
| Click on "Proceed to checkout" and Click on "Sign in" > Set Email & Password of "John DOE" and Click on Continue | The Addresses step is displayed |
| Choose an address > Click on "Continue" button | Shipping method step is displayed |
| Choose a shipping method > Click on "Continue" button | Payment step is displayed |
| Check the "Terms of service" checkbox > Click on "Place order" button | The Order confirmation page is displayed |
| Click on Your account link and Click on "Vouchers" | "Your vouchers" page is displayed and check that:<br><br>The second Cart rule is created with Value = 100 (old discount amount) - Total of last order |
| Go back to the BO > Cart rules page | The cart rules page is well displayed and the number of cart rules = Total cart rules + 1 |
| Filter by Code | Number of cart rules < Total Cart rules and the list contains the searched Voucher |
| Click on "Edit" and Click on Conditions Tab | Check that *Limit to a single customer = John DOE (pub@prestashop.com)* |
| Click on Actions | Check that *Amount discount = 100 - Total of the last Order* |
| Reset Filter and Filter by Name | The list contains the searched vouchers |
| Select all discounts, delete with bulk action and confirm the deletion | A green alert "The selection has been successfully deleted." is displayed |
| Go back to Cart rules page (list) > Reset Filter | The filter is well reset |
| Click on "Add new cart rule" page <br><br>*Case2: Partial use disabled*<br><br>Set these fields and click on Save | An alert "Successful creation." is displayed |
| Go to FO, Add product to cart and Click on "Proceed to checkout" | The Shopping cart is well displayed and the discount is well applied<br><br>Total is ok = *0* |
| Click on "Proceed to checkout" and place order | The Order confirmation page is displayed |
| Click on Your account link and Click on "Vouchers" | "Your vouchers" page is displayed and check that there is no second cart rule created |
| Go back to the BO > Cart rules page | The cart rules page is well displayed and the number of cart rules = Total cart rules |
| Delete the cart rule and confirm the deletion | A green alert "Successful deletion." is displayed |
