---
title: "Wishlist module - Add a product to a list"
weight: 1
---

# Wishlist module - Add a product to a list
## Details
* **Component** : blockwishlist
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3950
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/blockwishlist/03_frontOffice/02_products/01_addProductToList.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Choose a product > Go to the product page details of the chosen product | "Heart" icon next to the "Add to cart" button is empty |
| Click "heart" icon | A "Sign in" modal is opened with:<br> * Title: "Sign in"<br> * Description: "You need to be logged in to save products in your wishlist."<br> * 2 buttons: "Cancel" & "Sign in" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * Homepage or product page is displayed |
| Click "heart" icon | A "Sign in" modal is opened with:<br> * Title: "Sign in"<br> * Description: "You need to be logged in to save products in your wishlist."<br> * 2 buttons: "Cancel" & "Sign in" |
| Click on "Sign in" button > Fill the form > Click on "Sign in" button | * "Log in to your account" page is displayed<br> * You are logged in<br> * Homepage is displayed |
| Go to your customer account > Click on the "My wishlists" tab | * Default wishlist is displayed.<br> * There is a (0) next to the title |
| Click on the default wishlist | The wishlist opens and it's empty |
| Browse through the catalog > Choose a product and go on its product page | "Heart" icon next to the "Add to cart" button is empty |
| Change the quantity to 5 > Click on "heart" icon | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist"<br> * Link: "Create new list" |
| Click on the cross on top right | * The modal is removed<br> * Product page is displayed |
| Click on the heart again | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist"<br> * Link: "Create new list" |
| Select the default wishlist | * A successful message "Product added" is displayed<br> * The modal is removed and the heart is now filled |
| Click on your username in the header of the shop > Go to "My wishlists tab in your customer account section > Click and open the default wishlist with 1 product on it | The item is saved with its quantity as 5 |
| Browse through the catalog > Open a product page of out of stock product created (pre-condtion) > Click on "heart" icon | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist"<br> * Link: "Create new list" |
| Select the default wishlist | * A successful message "Product added" is displayed<br> * The modal is removed and the heart is now filled |
| Click on your username in the header of the shop > Go to "My wishlists tab in your customer account section > Click and open the default wishlist with 2 products on it | The item is saved with:<br> * Its quantity as 1<br> * "Out of stock" label displayed<br> * "Add to cart" button disabled |
| Go to BO > Catalog > Products > Choose an already created product ([Mug The best is yet to come|http://ps80x:8888/admin-dev/index.php/sell/catalog/products/6?_token=dYcHTGNLAhFLPNZRd8EJuCJv6jeC-l2g0O79PMyBLwU#tab-step1]) > Click on "pencil" icon to edit it > Reduce the quantity from "300" to "2" | A successful message "Settings updated" is displayed |
| Click on "Preview" button > Go to the new FO tab of the updated product > Click on "heart" icon | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist"<br> * Link: "Create new list" |
| Select the default wishlist | * A successful message "Product added" is displayed<br> * The modal is removed and the heart is now filled |
| Click on your username in the header of the shop > Go to "My wishlists tab in your customer account section > Click and open the default wishlist with 3 products on it | The item is saved with:<br> * Its quantity as 1<br> * "Last items in stock" label displayed |
| Browse through the catalog > Open a product page with combinations product (HUMMINGBIRD PRINTED T-SHIRT) > Select a specific combination (NOT the default one) > Click on "heart" icon | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist"<br> * Link: "Create new list" |
| Select the default wishlist | * A successful message "Product added" is displayed<br> * The modal is removed and the heart is now filled |
| Change the combination | "Heart" icon is empty |
| Get back to the saved combination | The heart is refilled automatically |
| Click on your username in the header of the shop > Go to "My wishlists tab in your customer account section > Click and open the default wishlist with 4 products on it | The item is saved with:<br> * Its quantity as 1<br> * Your combinations chosen |
