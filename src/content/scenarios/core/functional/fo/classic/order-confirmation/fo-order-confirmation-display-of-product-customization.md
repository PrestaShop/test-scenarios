---
title: "FO - Order confirmation - Display of product customization"
weight: 2
---

# FO - Order confirmation - Display of product customization
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1315

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Clic on "Search our catalog" > Write "custo" | You should see four different product ( the first one is Customizable Mug ) |
| Clic on Customizable Mug | * The Customizable mug product page should be displayed<br> * "Add to cart" should be disabled |
| Write your texte on "Your message here" and clic on "Save Customization" | * You should have no text on the text area <br> * You should have the text "Your curstomization: test"<br> * "Add to cart" should be enabled |
| * Clic on "Add to cart"<br> * Clic on "Proceed to checkout" | * You should have a  modal "Product successfully added to your shopping cart"<br> * You should have your cart with your customizable mug |
| * Clic on "Proceed to checkout"<br> * Clic on "Sign in" <br> * Set your account <br> * Clic on continue | * You should see the "Order as guest" page <br> * You should see the "Sign in" page<br> * You should see "Adresses" tab |
| Clic on "Continue" | You should see the "Shipping method" tab with Click and collect selected |
| * Clic on "Continue"<br> * Select the "Pay by check" option <br> * Clic on "I agree [...] unconditionally" <br> * Clic on "Place Order" button | * You should see the "Payment" tab with "Place Order" button disabled <br> * The Play by check option should be selected ans you will have the info to where you can send your check<br> * "Place Order" button should be enabled<br> * You should see you Order Confirmation |
| Clic on "Product customization" | You should have a modal with : <br><br>Title : Product customization <br>Type your text here : test |