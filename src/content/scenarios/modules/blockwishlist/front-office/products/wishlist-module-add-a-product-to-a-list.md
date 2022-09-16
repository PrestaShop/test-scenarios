---
title: "Wishlist module - Add a product to a list"
weight: 3
---

# Wishlist module - Add a product to a list
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Choose a product > Click on the heart next to the image to add the product to a list or go to the product page details of the chosen product | * The heart next to the picture is empty for the product card<br> * The heart next to the "Add to cart" button is empty for product details page |
| Click on the heart | A "Sign in" modal is opened with:<br> * Title: "Sign in"<br> * Description: "You need to be logged in to save products in your wishlist."<br> * 2 buttons: "Cancel" & "Sign in" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * Homepage or product page is displayed |
| Click on the heart | A "Sign in" modal is opened with:<br> * Title: "Sign in"<br> * Description: "You need to be logged in to save products in your wishlist."<br> * 2 buttons: "Cancel" & "Sign in" |
| Click on "Sign in" button > Fill the form > Click on "Sign in" button | * "Log in to your account" page is displayed<br> * You are logged in<br> * Homepage is displayed |
| Go to your customer account > Click on the "My wishlists" tab | * Default wishlist is displayed.<br> * There is a (0) next to the title |
| Click on the default wishlist | The wishlist opens and it's empty |
| Browse through the catalog > Choose a product and go on its product page | * The heart next to the picture is empty for the product card<br> * The heart next to the "Add to cart" button is empty for product details page |
| Change the quantity to 5 > Click on the heart | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist"<br> * Link: "Create new list" |
| Click on the cross on top right | * The modal is removed<br> * Product page is displayed |
| Click on the heart again | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist"<br> * Link: "Create new list" |
| Select the default wishlist | * A successful message "Product added" is displayed<br> * The modal is removed and the heart is now filled |
| Click on your username in the header of the shop > Go to "My wishlists tab in your customer account section > Click and open the default wishlist with 1 product on it | The item is saved with its quantity as 5 |
| Browse through the catalog and open a product page. The product must be a single product with ZERO stock. Click on the heart | A modal appears, asking you to select a wishlist to add the product to |
| Select the CUSTOM wishlist | The modal closes and the heart is now filled (even after a refresh of the page) |
| Go to the Wishlist in your customer account section. Open the custom wishlist | The item is saved, with its quantity as 0 |
| Browse through the catalog and open a product page. The product must be a single product with a minimal quantity. Change the quantity to a number below the minimal quantity. Click on the heart | A modal appears, asking you to select a wishlist to add the product to |
| Select the CUSTOM wishlist | The modal closes and the heart is now filled (even after a refresh of the page) |
| Go to the Wishlist in your customer account section. Open the custom wishlist | The item is saved, with its quantity as the minimal quantity set in the product setting |
| Browse through the catalog and open a product page. The product must be a product with combinations. Select a specific combination (NOT the default one). Click on the heart | A modal appears, asking you to select a wishlist to add the product to |
| Select the custom wishlist | The modal closes and the heart is now filled |
| Change the combination | The heart empties |
| Get back to the saved combination | The heart refills automatically |
| Go to the Wishlist in your customer account section. Open the custom wishlist | The item is saved, for the specific combination |
