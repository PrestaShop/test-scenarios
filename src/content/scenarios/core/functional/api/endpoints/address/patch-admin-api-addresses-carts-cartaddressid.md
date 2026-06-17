---
title: "PATCH /admin-api/addresses/carts/{cartAddressId}"
weight: 3
---

# PATCH /admin-api/addresses/carts/{cartAddressId}
## Details
* **Component** : Core
* **Status** : Sandbox
* **Automated on** : 9.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12891

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Open FO > Add product to cart > proceed to checkout | Cart page is displayed |
| sign in with the created customer | the customer is connected |
| Choose the created address and continue to payment step | Payment step is visible |
| Go to BO > Order > shopping cart page | Shopping cart page is displayed |
| Fetch the ID of the first shopping cart in the list as \{idCart} | the idCart is > 0 |
| Request with method PATCH the endpoint "https://[url of your shop]/admin-api/addresses/carts/\{cartAddressId}" for updating the field "firstName" where \{idCart} is the previous ID get | The HTTP code is 200.<br>The return data has multiples keys.<br>The key type has the updated value. |
