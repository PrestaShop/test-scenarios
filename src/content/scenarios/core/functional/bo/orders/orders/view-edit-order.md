---
title: "View / Edit order"
weight: 4
---

# View / Edit order
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders | The Orders page is well displayed |
| Click on the icon loop to preview an order created | The row order-preview-content is displayed |
| Add a product to the Order | Message "The product was successfully added." appears<br><br>The new product is added in the list of Products |
| Add a Discount to the Order | Message "Successful update." appears<br><br>New line appear in discount table with discount amount |
| Update the Order status to "Payment accepted"<br>Click on "Update status" button which is enbaled | Message "Successful update." appears<br><br>In Status block, the new status is displayed<br>The "Update status" button become disabled<br><br>A new buttons are displayed : "View Invoice" is displayed next to Status dropdown AND "Partial refund" is displayed after "Print Order" |
| Click "View Invoice" | The Invoice is downloaded |
| Update Status to "Shipped" | Message "Successful update." appears<br><br>Status block is updated with all history of status from recent to old one<br><br>New button "View delivery slip" is displayed between "Print Order" and "Partial refund" |
| Click "View delivery slip" | The Delivery slip is downloaded |
| Add an Order note to the order | Message "Update successful" appears<br><br>Note is displayed |
| Go to Documents Tab > Add a note to the Invoice > Save > Download Invoice | Message "Successful update." appears<br><br>"Edit note" button is displayed<br>The note is well displayed in the downloaded Invoice |
| In Carriers Tab > Edit Carrier > Add a tracking number > Update | Message "Successful Update" appears<br><br>Tracking number in Carrier tab is updated |
| Click button "Partial Refund" to refund a product | Message "A partial refund was successfully created." appears<br><br>In Documents Tab, the "Credit Slip" is added |
| Add a Payment > Fill all fields > Click Add | Message "Successful Update" appears<br><br>In Payment, see a warning : "Warning *€SUM Of amount in Paymet block* paid instead of *€Total amount"* |
| In Message Block > Add a new message > Click Send message | Message "Comment successfully added." is displayed<br><br>Message is displayed in Messages block |
| In Messages Block > Choose your order message > Delay | An automatic message is added in the Message base |
| Click on "Send message" | The message is well displayed |
