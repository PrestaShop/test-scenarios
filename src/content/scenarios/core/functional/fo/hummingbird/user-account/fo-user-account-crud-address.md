---
title: "FO - User account - CRUD address"
weight: 2
---

# FO - User account - CRUD address
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4975

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Go to header and click on your username > Click on tab "Add first address" | "New address" form page is displayed |
| Fill the address form > Click on "Save" button | * Success message "Address successfully added!" is displayed<br> * Back to "Your addresses" page, the new address is displayed |
| Click on "Edit" link at the bottom of your address card > Modify your Alias, Address, add a Phone Number > Click on "Save" button | * Success message "Address successfully updated." is displayed<br> * Back to "Your addresses" page, the updated address is displayed |
| Click on "Your account" on breadcrumb in "Your addresses" page | * Back to "Your account page"<br> * The "Add first address" tab  is now called "Addresses" |
| Click on "Addresses" tab > Click on "Add new address + " link just next to your displayed address. | "New address" form page is displayed |
| Fill the address form > Click on "Save" button | * Success message "Address successfully added." is displayed<br> * Back to "Your addresses" page, the new address is added to your account<br> * You have now 2 addresses displayed |
| Go to home page > Click on any product  > Click on "Add to cart" > Click on "Proceed to checkout" button in the modal > Click on "Proceed to checkout" button in the "Shopping Cart" page. | * Step 2 with your Addresses is displayed<br> * The first address added to your account is checked |
| Click on the shop logo  in top left> Click on your username link in the header > Click on "Addresses" tab > Click on "Delete" link at the bottom of your first address card | Error message "Could not delete the address since it is used in the shopping cart." is displayed |
| Click on  "Cart" button on the header > Click on "Proceed to checkout" button > Select the other address > Click on "Continue" button | * The second address added is well checked<br> * Step 3 with your "Shipping method" is selected |
| Click on the shop logo > Click on your username link in the header > Click on "Addresses" tab > Click on "Delete" link at the bottom of your first address card | * Success message "Address successfully deleted." is displayed<br> * Only one address is displayed in the Addresses list |
| Go to BO > Customers list page & delete the customer created | The alert "Successful deletion." is well displayed |
