---
title: "FO - Order confirmation - List of ordered products"
weight: 1
---

# FO - Order confirmation - List of ordered products
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-7007

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| Clic on the Upper arrow next to the number of quantity | The quantity number should be "2" |
| Click on Add to cart | You should have a modal with "Product successfully added to your shopping cart" |
| Clic outside the modal | The modal should be hidden |
| Put your mouse over the product "The Adventure Begins Framed" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| Click on Add to cart | You should have a modal with "Product successfully added to your shopping cart" |
| Click on "Proceed to checkout" | You should have your shopping cart displayed with all your product on it |
| Clic on "Proceed to checkout" | You should be on "Personal information" Tab |
| * Click on SIgn in <br> * Set up your Email and Password <br> * Click on "continue" | You should be redirect to Adresses tab |
| Clic on "Continue" | You should be redirect to "Shipping method" tab |
| Clic on "Continue" | You should be redirect to "Payment" tab |
| * Clic on "Pay by Check" <br> * Clic on the checkbox"I agree to the terms of service [...]" | * The detail about the adress and the payee should be displayed<br> * The box should be checked and the button "Place Order" should be enabled |
| Clic on "Place Order" | You should have a new page displayed named "Order confirmation" with : <br> * "Order Items" with the different product image under, their name and their Combination<br> * The "Unit Price" where is the price of the product, it should be "€34,80" <br> * The "Quantity" where is the number of product, for the first one, it should be "2" and the second, "1"<br> * The "Total Products" where is the multiplication of the Unit price and the quantity, it should be "€69,60" for the first one and "€34,80" for the second one |
