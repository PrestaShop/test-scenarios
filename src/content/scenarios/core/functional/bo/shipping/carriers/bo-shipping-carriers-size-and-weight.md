---
title: "BO - Shipping - Carriers - Size and weight"
weight: 8
---

# BO - Shipping - Carriers - Size and weight
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-9736

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shipping > Carriers | Carriers page diplayed |
| Click on Add new carrier | A new page is well displayed.<br>Logo is displayed<br><br>4 tabs are displayed :<br> # General settings <br> # Shipping locations and costs <br> # Size, weight, and group access<br> # Summary |
| Fill the blank of the first tab "General settings" > Click on Next | The data is saved<br>You are now on Tab 2 : Shipping locations and costs |
| Fill the blank of the second tab "Shipping locations and costs" > Click on Next | The data is saved<br><br>You are now on Tab 3 : Size, weight, and group access |
| Fill the blanks of the third tab "Size weight and group access" > Click on Finish | A green alert "Successful creation" is displayed<br>The new carrier test is displayed on the list |
| BO > Catalog > Products > Add new product > Standard product > Add new product > Fill the form > Save | Successful creation |
| Click on 3-dot button in footer > Preview > Add the product to cart > Proceed to checkout > Proceed to checkout > Fill in Step 1 and 2 > Continue to Shipping | In Step 3, carrier test is displayed |
| Go back to cart > Modify quantity > Proceed to checkout until Shipping Tab | Carrier is not longer displayed |
| Go back to BO > Catalog > Products > Edit the test product carrier > In Shipping tab > Save and publish | Successful update |
| Refresh the cart in FO | Carrier test is no longer displayed |
| Delete carrier test | Successful deletion |
| Delete test product carrier | Successful deletion |
