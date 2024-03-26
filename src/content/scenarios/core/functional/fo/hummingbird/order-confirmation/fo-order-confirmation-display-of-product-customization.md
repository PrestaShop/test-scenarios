---
title: "FO - Order confirmation - Display of product customization"
weight: 2
---

# FO - Order confirmation - Display of product customization
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-7008

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on "Search our catalog" > Write "custo" > Click on the product Customizable mug | You should see four different product ( the first one is Customizable Mug ) |
| Add a customization in the block "Your message here" > Click on "Save Customization" | * You should have no text on the text area <br>* You should have the text "Your curstomization: HELLO WORLD"<br>* "Add to cart" button is enabled |
| Click on "Add to cart" > Click on Proceed to checkout > Proceed to checkout | * You should have a  modal "Product successfully added to your shopping cart"<br> * You should have your cart with your customizable mug |
| Click on Sign in > Continue | You are logged in and you are redirected to the Addresses tab |
| Click on Continue to Shipping > Click on Continue to Payment > Check Pay by bank wire > Agree to terms and services > | Your order is confirmed |
| Scroll down to block Order details > Click on the button "Customized" | See the modal with : <br><br>Title : Product customization <br>Type your text here : HELLO WORLD |
| Close the modal | Order confirmation page is displayed |
