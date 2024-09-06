---
title: "BO - Shipping - Carriers - Shipping locations and costs"
weight: 7
---

# BO - Shipping - Carriers - Shipping locations and costs
## Details
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-9731

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shipping > Carriers | Carriers page displayed |
| Click on Add new carrier | A new page is well displayed with a title : New carrier<br>Logo is displayed<br><br>3 tabs are displayed :<br> # General settings <br> # Shipping locations and costs <br> # Size, weight<br> # Summary |
| Fill the blank of the first tab "General settings" > Click on Next | The data is saved<br>You are now on Tab 2 : Shipping locations and costs |
| Put your pointer on Handling costs tooltip | Tooltip is displayed |
| Put your pointer on Out-of-range behavior help button | Tooltip is displayed |
| Click to Manage taxes | Taxes page displayed |
| Click to Manage locations | Zones page displayed |
| Fill the blank of the second tab "Shipping locations and costs" > Click on Next | The data is saved<br><br>You are now on Tab 3 : Size, weight |
| Fill the blanks of the third tab "Size weight and group access" > Click on Next | A green alert "Successful creation" is displayed<br>A new carrier is well displayed on the list |
| Click on View my store > Add any product to cart > Proceed to checkout > Fill in Step 1 and 2 > Continue | In Step 3, see Test carrier with correct information |
| Return to BO and edit the carrier | The data is saved<br><br>You are now on Tab 3 : Size, weight |
| Refresh the FO | Shipping costs now free |
| Return to BO and edit the carrier | Successful update |
| Refresh the FO | transport costs are payable and with an increase for handling costs |
| Return to BO and edit the carrier | Successful update |
| Refresh the FO | transport costs are payable and with an increase for tax |
| Return to BO and edit the MUG THE BEST IS YET TO COME | Successful update |
| Refresh the FO | transport costs are payable and with an increase for next range |
| Return to cart and change the quantity and go to checkout | Carrier test is not displayed |
| Return to cart and change the quantity and go to checkout | Carrier test is displayed |
| Return to BO and edit the carrier | Successful update |
| Refresh the FO | carrier test is not displayed |
| Return to BO and edit the carrier | Successful update<br><br>Range is now with € |
| Edit ranges | successful update |
| Refresh the FO | transport costs are payable and with an modify for new range |
| Return to BO and edit the carrier | Successful update |
| Return to BO and edit the carrier | Successful update |
| Refresh the FO | carrier test is not displayed |
| Return to BO and delete the carrier | Successful deletion |
