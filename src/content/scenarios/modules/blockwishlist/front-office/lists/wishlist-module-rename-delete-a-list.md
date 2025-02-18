---
title: "Wishlist module - Rename & delete a list"
weight: 2
---

# Wishlist module - Rename & delete a list
## Details
* **Component** : blockwishlist
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-3947

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on "Sign in" button > Fill the form > Click on "Sign in" button | * "Log in to your account" page is displayed<br> * You are logged in<br> * Homepage is displayed |
| Click on your username in header of the shop > Click on "My wishlists" tab on your account | "My wishlists" page is displayed with:<br> * "Create a new list" link on the right<br> * The list of all your wishlits<br> * A share icon for the default list |
| Click on the "Create a new list" link | The "Create wishlist" modal is displayed correctly with:<br> * Title: "Create wishlist"<br> * Cross on top right to cancel<br> * A "Wishlist name" label and empty field<br> * 2 buttons: "Cancel" & "Create wishlist" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * "My wishlists" page is displayed |
| Click on the "Create a new list" link | The "Create wishlist" modal is displayed correctly with:<br> * Title: "Create wishlist"<br> * Cross on top right to cancel<br> * A "Wishlist name" label and empty field<br> * 2 buttons: "Cancel" & "Create wishlist" |
| Set a new name > Click on "Create wishlist" button | * A successful message "The list has been properly created" is displayed<br> * "My wishlists" page is displayed correctly with the new wishlist added to the list and new buttons:<br> ** 3 dots<br> ** "Trash" icon |
| Click on the 3 dots of the custom list | * A small popin appears.<br> * You can select either "Rename" or "Share" |
| Click on the "Rename" option | The "Rename wishlist" modal is displayed correctly with:<br> * Title: "Rename wishlist"<br> * Cross on top right to cancel<br> * A "Wishlist name" label and the field with the current name<br> * 2 buttons: "Cancel" & "Rename wishlist" |
| Change the name > Click on "Cancel" button or the cross on top right | * The modal is removed<br> * "My wishlists" page is displayed<br> * The wishlist's name is still the same |
| Click on the 3 dots in front of a custom list > Click on the "Rename" option >Change the name > Click on "Rename wishlist" | * A successful message "List has been renamed" is displayed<br> * The modal is removed<br> * "My wishlists" page is displayed<br> * The name is well updated |
| Click on the "Trash" icon of the custom list | The "Delete wishlist" modal is displayed correctly with:<br> * Title: "Delete wishlist"<br> * Cross on top right to cancel<br> * 2 buttons: "Cancel" & "Delete" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * "My wishlists" page is displayed<br> * The wishlist is still here |
| Click on the "Trash" icon of the custom list | The "Delete wishlist" modal is displayed correctly with:<br> * Title: "Delete wishlist"<br> * Cross on top right to cancel<br> * 2 buttons: "Cancel" & "Delete" |
| Click on "Delete" button | * A successful message "List has been removed" is displayed<br> * The modal is removed<br> * "My wishlists" page is displayed<br> * The wishlist is well deleted |
