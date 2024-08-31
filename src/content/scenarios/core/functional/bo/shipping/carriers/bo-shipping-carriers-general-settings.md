---
title: "BO - Shipping - Carriers - General Settings"
weight: 6
---

# BO - Shipping - Carriers - General Settings
## Details
* **Status** : [TEST] Automation in progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-9730

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shipping > Carriers | Carriers page diplayed |
| Add new carrier | New carrier page displayed |
| Fill the form > Save each tab > Finish | Successful creation<br><br>Carriers page displayed |
| Click on View my store | FO is displayed |
| Add to cart The best is yet to come' Framed poster > Proceed to checkout > Proceed to checkout | Personal information is displayed |
| Sign in | Addresses tab displayed |
| Select "Mon adresse" > Continue | Shipping method tab with 2 carriers is displayed |
| On BO > Edit the carrier "Test_general" > Click Summary > Finish | Successful update message is displayed |
| Refresh the FO | Test_general carrier is displayed |
| On BO > Edit the carrier "Test_general" > Finish | Successful update message is displayed |
| Refresh the FO | Test_general2 displayed<br><br>Name : test_general2<br><br>Transit time : 1 days<br><br>Logo : another file |
| On BO > Edit the carrier "Test_general2" > Tab Size, weight, and group access > Uncheck Visitor and Customer > FInish | Successful update message is displayed |
| Refresh the FO | Test_general2 is no longer displayed |
| Click Personal information tab > Log out | Cart is empty |
| Add to cart The best is yet to come' Framed poster > Proceed to checkout > Proceed to checkout | Personal information tab is displayed |
| Order as guest | Addresses page displayed |
| Fill form > Continue | Test_General2 carrier is displayed |
| Place order | Your order is confirmed |
