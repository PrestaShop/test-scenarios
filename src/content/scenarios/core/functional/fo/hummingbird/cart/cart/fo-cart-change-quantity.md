---
title: "FO - Cart - Change quantity"
weight: 1
---

# FO - Cart - Change quantity
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-6993

## Steps
| Step Description | Expected result |
| ----- | ----- |
| * Go to FO <br> * Clic "Hummingbird Printed T-shirt"<br> * Clic on "Add to cart"<br> * Clic on Proceed to checkout | * You should see you shop<br> * You'll see the page of your product<br> * You'll have a modal named "Product successfully added to your shopping cart"<br> * Your cart is displayed |
| Clic on the up arrow next to the product's number | You should have one more product on your card |
| Clic on the down arrow next to the product's number | You should have one less product on your card |
| * Clic on the product's number <br> * Writte 3 and press enter | * You can now writte on it <br> * You should have 3 products |
| * Clic on the product's number <br> * Writte -6 and press enter | * You can now writte on it <br> * You should have 3 products |
| * Clic on the product's number <br> * Writte +6 and press enter | * You can now writte on it <br> * You should have 6 products |
| * Clic on the product's number <br> * Writte 64 and press enter | * You can now writte on it<br> * You should have 64 products |
| * Clic on the product's number <br> * Writte "azerty" and press enter | * You can now writte on it <br> * You should have 64 products |
| * Clic on the product's number <br> * Writte 2400 and press enter | * You can now writte on it <br> * You should have 2400 products but the button "proceed checkout" should be greyed and you have a red message "The product is no longer available in this quantity." |
| * Clic on the product's number <br> * Writte 3 and press enter | * You can now writte on it <br> * You should have 3 products |
| * Clic on the product's number <br> * Scroll up until the product's number is less than 300<br> * Clic outside of the number of product | * You can now writte on it<br> * You should have more product on your card <br> * The number should be incremented |
| * Clic on the product's number <br> * Scroll up until the product's number is more than 300<br> * Clic outside of the number of product | * You can now writte on it<br> * You should have more product on your card <br> * The number should be incremented  but the button "proceed checkout" should be greyed and you have a red message "The product is no longer available in this quantity." |
| * Clic on the product's number <br> * Scroll down until the product's number is more than 1<br> * Clic outside of the number of product | * You can now writte on it<br> * You should have less product on your card<br> * The number should be incremented |
| * Clic on the product's number<br> * Scroll down until the product's number is less than 1<br> * Clic outside of the number of product | * You can now writte on it<br> * You should have less product on your card<br> * The number should be the same that previously |
| * Clic on the product's number <br> * Writte 0 and press enter | * You can now writte on it <br> * You should have no product and you should have the message " There are no more items in your cart" in your shopping cart |