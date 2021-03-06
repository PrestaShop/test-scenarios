---
title: "Documents tab"
weight: 4
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Invoices > Disable Invoices | Invoices are disabled |
| Go to BO > Orders > Orders > Check Documents Tab | No button "Generate Invoice" |
| Go to BO > Orders > Invoices > Enable Invoices | Invoices are enabled |
| Click on *Order with no document* | Documents tab should be empty -> Document count = 0<br>Message "There is no available document" should be displayed |
| Click "Generate Invoice" | The invoice appears in the list of documents<br>Document number is increased (+1)<br>Message Successful update. is displayed |
| Click on Number column to Download Invoice | Invoice downloaded |
| Click Add a note | Button changes to "Edit note"<br><br>Note can be seen in the Invoice in section Notes<br><br>Note can be seen in Documents tab<br><br>Message Successful update. is displayed |
| Delete note and Save | Note is deleted<br>Button "Add note" appears<br>Message Successful update. is displayed |
| Click "Enter a payment" | Page scrolls to Payment tab |
| Change status to Payment Accepted | Button "Enter Payment" should be hidden in Document tab<br>Message Successful update. is displayed |
| Change Order Status<br>Example : Shipped | Delivery Slip appears in list<br>Message Successful update. is displayed |
| Click on Delivery Slip Number | Launch Download of Delivery Slip |
| Click on Partial Refund > Choose quantity | Credit slip will be generated<br><br>Message Successful update. is displayed |
| Click on Credit Slip Number | Credit Slip is downloaded |
| *Order with documents (Invoice or/and Delivery Slip or/and Credit Slip)* | List of documents available<br>Document count in title correct |
| Click on column Number | Download is launched (for Invoice or Delivery Slip or Credit Note) |
