---
title: "BO - Shipping - Carriers - Shipping locations and costs"
weight: 7
---

# BO - Shipping - Carriers - Shipping locations and costs
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-9731
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/09_shipping/01_carriers/07_shippingLocationsAndCosts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shipping > Carriers | Carriers page displayed |
| Click on Add new carrier | A new page is well displayed<br>Logo is displayed<br><br>4 tabs are displayed :<br> # General settings <br> # Shipping locations and costs <br> # Size, weight, and group access<br> # Summary |
| Fill the blank of the first tab "General settings" > Click on Next | The data is saved<br>You are now on Tab 2 : Shipping locations and costs |
| Put your pointer on Handling costs tooltip | Tooltip is displayed |
| Put your pointer on Out-of-range behavior tooltip | Tooltip is displayed |
| Fill the blank of the second tab "Shipping locations and costs" > Click on Next | The data is saved<br><br>You are now on Tab 3 : Size, weight, and group access |
| Fill the blanks of the third tab "Size, weight, and group access" > Click on Next | The data is saved<br><br>You are now on Tab 4 : Summary |
| Click on Finish | A green alert "Successful creation" is displayed<br>The new carrier is well displayed on the list |
| Click on View my store > Add product to cart > Proceed to checkout > Proceed to checkout > Fill in Step 1 (Personal info) and 2 (Addresses) > Continue | In Step 3 - Shipping method, see Test carrier is displayed<br><br>-> test - 2 days - €5.00 tax incl. |
| Return to BO and edit the carrier > Go to tab 2 > Finish | The data is saved<br><br>Message Successful update is displayed |
| Go back to FO > Refresh | Shipping costs are now free<br><br>-> test - 2 days - Free |
| Return to BO > Edit the carrier > Go to tab 2 > Finish | Successful update |
| Go back to FO > Refresh | Shipping costs are updated<br><br>-> test - 2 days - €7.00 tax incl.<br><br>(because 5 for the range + 2 Handling costs) |
| Return to BO > Edit the carrier > Go to tab 2 > Finish | Successful update |
| Go back to FO > Refresh | Shipping costs are updated<br><br>-> test - 2 days - €8.40 tax incl.<br><br>(because (5 for the range + 2 Handling costs) + 20% for tax) |
| Return to BO > Catalog > Products > Edit the MUG THE BEST IS YET TO COME > Go to Shipping Tab > Edit Weight > Save and publish | Successful update |
| Go back to FO > Refresh | Shipping costs are updated<br><br>-> test - 2 days - €8.40 tax incl.<br><br>(because (5 for the range + 2 Handling costs) + 20% for tax) |
| GO to BO > Edit the carrier > Add manually the ranges > Finish |  |
| Go back to FO > Refresh | Shipping costs are updated<br><br>-> test - 2 days - €26.40 tax incl.<br><br>(because (20 for the range + 2 Handling costs) + 20% for tax) |
| Return to cart > Edit the quantity > Proceed to checkout > Continue to Shipping | Carrier test is not displayed |
| Return to cart > Edit the quantity > Proceed to checkout > Continue to Shipping | Carrier test is displayed |
| Return to BO > Edit the carrier > Go to tab 2 > Finish | Successful update |
| Refresh the FO | Carrier test is not displayed |
| Return to BO > Edit the carrier > Go to tab 2 > Finish | Ranges are now with € |
| Edit ranges > Finish | Successful update message is displayed |
| Refresh the FO | Shipping costs are updated<br><br>-> test - 2 days - €24.00 tax incl. |
| Return to BO > Edit the carrier > Go to Tab 2 > Edit ranges > Finish | Successful update message is displayed |
| Refresh the FO | Carrier test is not displayed |
| Return to BO > Delete the carrier test > Yes | Successful deletion |
