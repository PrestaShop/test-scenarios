---
title: "FO - Checkout - Addresses - CRUD address"
weight: 4
---

# FO - Checkout - Addresses - CRUD address
## Steps
| Step Description | Expected result |
| ----- | ----- |
| In FO > Add a product to the cart > Proceed to checkout > Sign In with your customer | Step 2 of checkout process is displayed |
| Fill and required fields > Continue | Step 3 of checkout process is displayed |
| Edit Step 2 > Edit Address > Fill all optional fields > Continue | Step 3 of checkout process is displayed |
| In FO > After creation of your customer account > Click on your name on the top right corner | Your account page is displayed |
| Click on "Add first address" | New address page is displayed<br><br>Name, Last name and countries are already filled in. |
| Fill in the fields > Save | Message Address successfully added. is displayed |
| Click on Update | Update your address Page is displayed<br><br>See that Alias has been automatically updated |
| Fill in all the optional fields > Save | Message Address successfully updated. is displayed |
| Click on +Create a new address > Fill all fields (optional and non-optional) > Save | Message Address successfully added. is displayed |
| Delete the latest address created | Message Address successfully deleted. is displayed |
| Click on Your account in breadcrumb | See Address block has changed name.<br> It was called "Add first address" , it is now called "Addresses" |
| Delete the only address that is displayed | Message Address successfully deleted. is displayed<br><br>Alert "No addresses are available. [Add a new address|http://develop:8888/en/address]" is displayed |
