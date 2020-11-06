---
title: Edit and delete products in a list
weight: 2
---

# Edit and delete products in a list

## Preconditions

Having passed [C1658]<br />
Being logged in with the customer account specified
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the customer wishlist page | Wishlists are displayed<br /><br>The number associated (in brackets) represents the number of unique items in a list |
| Select the custom wishlist | You get all the products added in the [C1658] test |
| Click on the garbage can for the single product with stock | A modal appears asking you to confirm the deletion |
| Confirm the deletion | The product is removed from the list |
| Click on the picture of the single product without stock | You are redirected to the product page<br /><br>The heart is filled |
| Click on the heart | The heart is empty |
| Go back to the wishlist | The product is removed from the list |
| Click on the pencil icon on a combination product | You are redirected to the product page<br /><br>You are on the correct combination<br /><br>The heart is filled |
| Select another combination<br /><br>Click on the heart<br /><br>Select the custom wishlist | The heart fills for this combination |
| Switch to the old combination | The heart is empty |
| Go to the wishlist page | There is only the last combination selected for the product (switching combination replaced the selected combination for this product) |
| Browse through the catalog<br /><br>Open a single simple product page<br /><br>Add the product to the custom wishlist with a quantity of 5<br /><br>Go to the custom wishlist in your customer page | The product is in the custom wishlist |
| Click on the pencil<br /><br>Change the quantity to 3 | The heart empties |
| Click on the heart<br /><br>Select the custom wishlist | The heart fills |
| Go to the custom wishlist in your customer page | The product is now saved with a quantity of 3 only |
