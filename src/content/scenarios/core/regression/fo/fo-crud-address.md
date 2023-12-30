---
title: "[FO] - CRUD address"
weight: 1
---

# [FO] - CRUD address
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-3654

## Steps
| Step Description | Expected result |
| ----- | ----- |
| 1) Go to BO > International > Localization page & Import the italian pack | Italian pack imported |
| Go to BO > International > Locations > Countries tab & edit the Italian country > Enable "Do you need a tax identification number?" and save | Green notice with "Successful update. " is displayed.<br><br>FYI : DNI should be required in FO "add address" form for italian country |
| Go to BO > Customers > Addresses page > click on "Set required fields for this section" > Select dni as a required field | Green notice with "Successful update. " is displayed.<br><br>FYI : Tax identification number should be required in FO "add address" form |
| Go to FO > Go to header and click on your username > Click on tab "Add first address" | "New address" form page is displayed |
| Fill the address form > Click on "Save" button | * The identification number should be shown when you select "Italy" for the country<br> * Success message "Address successfully added!" is displayed<br> * Back to "Your addresses" page with the new address on your account |
| Click on "Update" link at the bottom of your address card > Modify your Zip/Postal Code > Click on "Save" button | * Error Message "Please fix the error below."<br>* Error Message "Invalid postcode - should look like "NNNNN"" |
| Modify your Alias, Address, Zip/Postal Code, add a Phone Number > Click on "Save" button | * Success message "Address successfully updated!" is displayed<br> * Back to "Your addresses" page with the updated address on your account |
| Click on "Your account" on breadcrumb in "Your addresses" page | * Back to "Your account page"<br> * The "Add first address" tab  is now called "Addresses" |
| Click on "Addresses" tab > Click on "+ Create new address" link at the bottom of the page | * "New address" form page is displayed<br> * The form updates itself and show the "State" field when you select "Canada" for the country |
| Fill the address form > Click on "Save" button | * Success message "Address successfully added!" is displayed<br> * Back to "Your addresses" page with the new address on your account<br> * You have now 2 addresses displayed |
| Click on "Update" link at the bottom of your last address card > Modify your Zip/Postal Code > Click on "Save" button | * Error Message "Please fix the error below."<br>* Error Message "Invalid postcode - should look like "LNL NLN"" |
| Modify Zip/Postal Code > Click on "Save" button | * Success message "Address successfully updated!" is displayed<br> * Back to "Your addresses" page with the updated address on your account |
| Go to home page > Add a product on cart > Click on "Proceed to checkout" button in the modal > Click on "Proceed to checkout" button in the "Shopping cart" page | * Step 2 with your addresses is displayed<br> * The first address added is checked |
| Click on the shop logo > Click on your username link in the header > Click on "Addresses" tab > Click on "Delete" link at the bottom of your first address card | Error message "Could not delete the address since it is used in the shopping cart." is displayed |
| Click on  "Cart" button on the header > Click on "Proceed to checkout" button > Select the other address > Click on "Continue" button | * The second address added is well checked<br> * Step 3 with your "Shipping method" is displayed |
| Click on the shop logo > Click on your username link in the header > Click on "Addresses" tab > Click on "Delete" link at the bottom of your first address card | * Success message "Address successfully deleted!" is displayed<br> * Only one address exists in the list |
| Go to BO > Customers list page & delete the customer created | The alert "Successful deletion." is well displayed |