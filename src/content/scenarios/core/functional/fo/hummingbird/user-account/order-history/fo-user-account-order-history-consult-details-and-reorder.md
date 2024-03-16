---
title: "FO - User account - Order history - Consult details and Reorder"
weight: 2
---

# FO - User account - Order history - Consult details and Reorder
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-8339
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/03_userAccount/02_orderHistory/01_consultDetailsAndReorder.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on you user account name in the header (previously connected with the pre-condition below) > Click Your account | "My account" page is well displayed with all tabs linked to your account |
| *Case 1: No order has been placed*<br>Click on "Order history and details" tab | * The "Order history" page with the empty order list is well displayed<br> * An information message "You have not placed any orders." is displayed |
| *Case 2: At least one order has been placed*<br>Click on Click on "Order history and details" tab | * The "Order history" page with the order list is well displayed (with the order placed by the pre-condition below)<br> * All informations about orders are displayed on the list (reference / date / total price / payment / status / invoice / "Details" and "Reorder" links) |
| Click on Details link | The order details page is displayed with theses blocks :<br>- Follow your order's status step-by-step<br>- Addresses<br>- Products<br>- Tracking<br>- Add a message |
| Click on "Order history and details" tab again | * The "Order history" page with the order list is well displayed (with the order placed by the pre-condition below)<br> * All informations about orders are displayed on the list (reference / date / total price / payment / status / invoice / "Details" and "Reorder" links) |
| Click on Reorder link | The Step 2 of checkout process is displayed |
| Proceed to checkout | Your order is confirmed |
| Click on your user account > Orders | See that you have 2 orders displayed in your Order history page |
