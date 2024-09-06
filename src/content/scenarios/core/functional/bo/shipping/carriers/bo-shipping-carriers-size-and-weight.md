---
title: "BO - Shipping - Carriers - Size and weight"
weight: 8
---

# BO - Shipping - Carriers - Size and weight
## Details
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-9736

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shipping > Carriers | Carriers page diplayed |
| Click on Add new carrier | A new page is well displayed with a title : New carrier<br>Logo is displayed<br><br>3 tabs are displayed :<br> # General settings <br> # Shipping locations and costs <br> # Size, weight |
| Fill the blank of the first tab "General settings" > Click on Next | The data is saved<br>You are now on Tab 2 : Shipping locations and costs |
| Fill the blank of the second tab "Shipping locations and costs" > Click on Next | The data is saved<br><br>You are now on Tab 3 : Size, weight |
| Fill the blanks of the third tab "Size weight and group access" > Click on Next | A green alert "Successful creation" is displayed<br>A new carrier is well displayed on the list |
| BO > Catalog > Products > Add new product > fill the form and save | Successful creation |
| Click on View my store > Add the product to cart > Proceed to checkout > Fill in Step 1 and 2 > Continue | In Step 3,  Test carrier displayed |
| Modify quantity | Carrier is not longer displayed |
| BO > Catalog > Products > Edit the test product carrier | Successful update |
| Refresh the FO | test carrier displayed |
| Modify quantity | Carrier is not longer displayed |
| Delete test carrier | successful deletion |
| Delete test product carrier | successful deletion |
