---
title: "FO - User account - Order history - Consult order list"
weight: 1
---

# FO - User account - Order history - Consult order list
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1206
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/03_userAccount/02_orderHistory/01_consultOrderList.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on you user account name in the header (previously connected with the pre-condition below) | "Homepage" page is well displayed with all tabs linked to your account |
| *Case 1: No order has been placed*<br>Click on "Order history and details" tab | * The "Order history" page with the empty order list is well displayed<br> * An information message "You have not placed any orders." is displayed |
| *Case 2: At least one order has been placed*<br>Click on "Order history and details" tab | * The "Order history" page with the order list is well displayed (with the order placed by the pre-condition below)<br> * All informations about orders are displayed on the list (reference / date / total price / payment / status / invoice / "Details" and "Reorder" links) |
| Click on "Back to your account" link below the order list | "Your account" page is well displayed with all tabs linked to your account |
| Click on "Order history and details" tab again | * The "Order history" page with the order list is well displayed (with the order placed by the pre-condition below)<br> * All informations about orders are displayed on the list (reference / date / total price / payment / status / invoice / "Details" and "Reorder" links) |
| Click on "Home" link below the order list | "Homepage" is well displayed |
