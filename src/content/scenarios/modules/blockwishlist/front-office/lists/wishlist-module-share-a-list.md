---
title: "Wishlist module - Share a list"
weight: 6
---

# Wishlist module - Share a list
## Details
* **Component** : blockwishlist
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-3948

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on "Sign in" button > Fill the form > Click on "Sign in" button | * "Log in to your account" page is displayed<br> * You are logged in<br> * Homepage is displayed |
| Click on your username in header of the shop > Click on "My wishlists" tab on your account | "My wishlists" page is displayed with:<br> * "Create a new list" link on the right<br> * The list of all your wishlits<br> * A share icon for the default list |
| Click on the "share" icon for the default list" | The "Share wishlist" modal is displayed correctly with:<br> * Title: "Share wishlist"<br> * Cross on top right to cancel<br> * A "Share link" label and the link of sharing wishlist on the field<br> * 2 buttons: "Cancel" & "Copy text" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * "My wishlists" page is displayed |
| Click on the "share" icon for the default list" | The "Share wishlist" modal is displayed correctly with:<br> * Title: "Share wishlist"<br> * Cross on top right to cancel<br> * A "Share link" label and the link of sharing wishlist on the field<br> * 2 buttons: "Cancel" & "Copy text" |
| Click on the "Copy text" button. | * A successful message "Share link copied!" is displayed<br> * The list of all your wishlits is displayed |
| Click on the "Create a new list" link | The "Create wishlist" modal is displayed correctly with:<br> * Title: "Create wishlist"<br> * Cross on top right to cancel<br> * A "Wishlist name" label and empty field<br> * 2 buttons: "Cancel" & "Create wishlist" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * "My wishlists" page is displayed |
| Click on the "Create a new list" link | The "Create wishlist" modal is displayed correctly with:<br> * Title: "Create wishlist"<br> * Cross on top right to cancel<br> * A "Wishlist name" label and empty field<br> * 2 buttons: "Cancel" & "Create wishlist" |
| Set a new name > Click on "Create wishlist" button | * A successful message "The list has been properly created" is displayed<br> * "My wishlists" page is displayed correctly with the new wishlist added to the list and new buttons:<br> ** 3 dots<br> ** "Trash" icon |
| Click on the 3 dots of the custom list | * A small popin appears.<br> * You can select either "Rename" or "Share" |
| Click on the "Share" option | The "Share wishlist" modal is displayed correctly with:<br> * Title: "Share wishlist"<br> * Cross on top right to cancel<br> * A "Share link" label and the link of sharing wishlist on the field<br> * 2 buttons: "Cancel" & "Copy text" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * "My wishlists" page is displayed |
| Click on the 3 dots of the custom list | * A small popin appears.<br> * You can select either "Rename" or "Share" |
| Click on the "Share" option | The "Share wishlist" modal is displayed correctly with:<br> * Title: "Share wishlist"<br> * Cross on top right to cancel<br> * A "Share link" label and the link of sharing wishlist on the field<br> * 2 buttons: "Cancel" & "Copy text" |
| Click on the "Copy text" button. | * A successful message "Share link copied!" is displayed<br> * The list of all your wishlits is displayed |
| Go to the share URL you previously saved | * You are redirected to the content of the wishlist.<br> * If not a "No products found" message is displayed<br> * If you have products on it, all products are present.<br> * You can:<br> ** edit them<br> ** delete them<br> ** add them to cart<br> ** go to their product page details |
| Log out of your customer account > Go to the share URL you previously saved | * You are redirected to the content of the wishlist.<br> * If not a "No products found" message is displayed<br> * If you have products on it, all products are present.<br> * You can't:<br> ** edit them<br> ** delete theme<br> * You can:<br> ** add them to cart<br> ** go to their product page details |