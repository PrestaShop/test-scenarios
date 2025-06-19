---
title: "BO - Order details - Documents tab"
weight: 4
---

# BO - Order details - Documents tab
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-739
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/04_documentsTab.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Invoices > Disable Invoices | Invoices are disabled |
| Go to BO > Orders > Orders > View last order page<br>Check Documents Tab | No button "Generate Invoice" |
| Go to BO > Orders > Invoices > Enable Invoices | Invoices are enabled |
| Go to view firts order page | Documents tab should be empty -> Document count = 0<br>Message "There is no available document" should be displayed |
| Click "Generate Invoice" | The invoice appears in the list of documents<br>Document number is increased (+1)<br>Message Successful update. is displayed |
| Click on Number column to Download Invoice | Invoice downloaded |
| Click Add a note | Button changes to "Edit note"<br><br>Note can be seen in the Invoice in section Notes<br><br>Note can be seen in Documents tab<br><br>Message Successful update. is displayed |
| Delete note and Save | Note is deleted<br>Button "Add note" appears<br>Message Successful update. is displayed |
| Click "Enter a payment" | Page scrolls to Payment tab -> Cannot check it with automated tests<br>Amount input is not empty |
| Change status to Payment Accepted | Button "Enter Payment" should be hidden in Document tab<br>Message Successful update. is displayed |
| Change Order Status<br>Example : Shipped | Delivery Slip appears in list<br>Message Successful update. is displayed |
| Click on Delivery Slip Number | Launch Download of Delivery Slip |
| Click on Partial Refund > Choose quantity | Credit slip will be generated<br><br>Message Successful update. is displayed |
| Click on Credit Slip Number | Credit Slip is downloaded |
