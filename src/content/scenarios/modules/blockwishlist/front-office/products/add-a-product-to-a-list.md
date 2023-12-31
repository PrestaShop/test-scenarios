---
title: "Add a product to a list"
weight: 1
---

# Add a product to a list
## Details
* **Component** : blockwishlist
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-559

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Browse through the catalog and open a product page | The heart next to the picture is empty |
| Click on the heart | A modal appears, telling you to log in before you can add products to your wishlists. There is a Sign In" button" |
| Click on the Sign In" button. Log in as a customer" | You are logged in |
| Go to the customer account. Click on the Wishlist" block" | Default wishlist is displayed. There is a (0) next to the title |
| Click on the default wishlist | The wishlist opens. It's empty |
| Browse through the catalog and open a product page. The product must be a single product with a lot of stock | The heart next to the picture is empty |
| Change the quantity to 5. Click on the heart | A modal appears, asking you to select a wishlist to add the product to |
| Select the default wishlist | The modal closes and the heart is now filled (even after a refresh of the page) |
| Go to the Wishlist in your customer account section. Open the default wishlist | The item is saved, with its quantity as 5 |
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
