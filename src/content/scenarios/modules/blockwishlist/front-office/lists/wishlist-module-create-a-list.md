---
title: "Wishlist module - Create a list"
weight: 1
---

# Wishlist module - Create a list
## Details
* **Component** : blockwishlist
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-3857

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Choose a product > Click on the heart next to the image to add the product to a list | A "Sign in" modal is opened with:<br> * Title: "Sign in"<br> * Description: "You need to be logged in to save products in your wishlist."<br> * 2 buttons: "Cancel" & "Sign in" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * Homepage is displayed |
| Click on the heart again next to the image to add the product to a list | The modal is open again with the same informations (Title / Description / 2 buttons) |
| Click on "Sign in" button > Fill the form > Click on "Sign in" button | * "Log in to your account" page is displayed<br> * You are logged in<br> * Homepage is displayed |
| Click on the heart again next to the image to add the product to a list | The "Add to wishlist" modal is displayed correctly with:<br> * Title: "Add to wishlist"<br> * Cross on top right to cancel<br> * A default wishlist: "My wishlist"<br> * Link: "Create new list" |
| Click on the cross on top right | * The modal is removed<br> * Homepage is displayed |
| Click on the heart again next to the image to add the product to a list > Click on the "Create a new list" link | The "Create wishlist" modal is displayed correctly with:<br> * Title: "Create wishlist"<br> * Cross on top right to cancel<br> * A "Wishlist name" label and empty field<br> * 2 buttons: "Cancel" & "Create wishlist" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * Homepage is displayed |
| Click on the heart again next to the image to add the product to a list > Click on the "Create a new list" link | The modal is open again with the same informations (Title / Cross / label and field / 2 buttons) |
| Set a new name > Click on "Create wishlist" button | * A successful message "The list has been properly created" is displayed<br> * The "Add to wishlist" modal is displayed correctly with the new wishlist added to the list |
| Click on the cross on top right > Click on your username in header of the shop > Click on "My wishlists" tab on your account | "My wishlists" page is displayed with:<br> * "Create a new list" link on the right<br> * The list of all your wishlits<br> * A share icon for the default list<br> * 2 icons by wishlists: <br> ** 3 dots with "Rename" and "Share" options<br> ** "Trash" icon to delete the wishlist |
| Click on the "Create a new list" link | The "Create wishlist" modal is displayed correctly with:<br> * Title: "Create wishlist"<br> * Cross on top right to cancel<br> * A "Wishlist name" label and empty field<br> * 2 buttons: "Cancel" & "Create wishlist" |
| Click on "Cancel" button or the cross on top right | * The modal is removed<br> * "My wishlists" page is displayed |
| Click on the "Create a new list" link | The modal is open again with the same informations (Title / Cross / label and field / 2 buttons) |
| Set a new name > Click on "Create wishlist" button | * A successful message "The list has been properly created" is displayed<br> * "My wishlists" page is displayed correctly with the new wishlist added to the list |
