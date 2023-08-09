---
title: "FO - User account - Order history - Download invoice from orders list"
weight: 3
---

# FO - User account - Order history - Download invoice from orders list
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1208

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Case 1: Change status in order list page in BO*<br>Go to BO > Orders > Orders > Click on status label of an order (previously placed with the pre-condition)  > Change "Awaiting XX payment" to "Delivered" status on the list | * The order list page is refreshed<br> * A successful message "Successful update." is displayed<br> * The status label of the order is well changed to "Delivered" |
| *Case 2: Change status in order details page in BO*<br>Go to BO > Orders > Orders > Click on an order (previously placed with the pre-condition) | The order details page is well displayed |
| Click on status list in top of the page > Choose "Delivered" in the list > Click on the "Update status" | * The order list page is refreshed<br> * A successful message "Successful update." is displayed<br> * The status label of the order is well changed to "Delivered" |
| Go to FO > Click on you user account name in the header (previously connected with the pre-condition below) | "Your account" page is well displayed with all tabs linked to your account |
| Click on "Order history and details" tab | * The "Order history" page with the order list is well displayed (with the order placed by the pre-condition below)<br> * All informations about orders are displayed on the list (reference / date / total price / payment / status / invoice / "Details" and "Reorder" links)<br> * At least one order should have "Delivered" status and an invoice to download (the one placed by the pre-condition below)<br> * For the status "Awaiting XX payment" for example, there is no invoice icon on the column |
| Choose the order with the "Delivered" status and click on the "PDF" icon in "Invoice" column | Invoice .pdf file is downloaded on your computer with its ID name as "XXXX.pdf" |
