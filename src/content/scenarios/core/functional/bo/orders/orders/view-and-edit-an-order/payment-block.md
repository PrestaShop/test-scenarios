---
title: "Payment block"
weight: 8
---

# Payment block
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders | Order list appears |
| Choose an Order without payment | Payment tab should be empty : Payment (0) |
| Fill Payment line with amount *inferior to* total | Message Successful update. appears<br><br>Warning appears : <br>Warning *€XX.XX* paid instead of *€XX.XX*<br><br>New line with payment appears |
| Fill Payment line with amount *equal to* total | Message Successful update. appears<br><br>New line with payment appears |
| Fill Payment line with amount *superior to* total | Message Successful update. appears<br><br>Warning appears : <br>Warning *€XX.XX* paid instead of *€XX.XX*<br><br>New line with payment appears |
| See new line with payment > Click on button Details | A block will appear with 4 elements |
| In International > Localization > Currency > Add another currency | New options appear in Payment Tab |
| Click on dropdown Amount | See other currencies |
| Choose a currency | Currency changes |
| Fill Payment line with total amount | Message Successful update. appears |
| Change currency : Choose currency of choice > Click button Change | Message Successful update. appears<br><br>See that the currency of the order will be updated |
| Go to BO > Orders > Orders and Choose an Order without a payment | Order details page is displayed |
| change the status order to Payment accepted | * a "Successful update." is displayed<br> * a status well updated<br> * a new line in the payment tab is added<br> * all data are ok (Date + payment method + amount + invoice) |
| Click Add a product, search a product, click on it with creating a new invoice and save | a pop-up "Create a new invoice" is displayed |
| Click on Create | An alert "The product was successfully added." is displayed<br><br>The product is well added<br><br>A new invoice is created<br><br>In the payment tab: Warning appears : <br>Warning *€XX.XX* paid instead of *€XX.XX* |
| In the payment tab, try to add a payment to the new invoice with total = product added | new line added to the payment |
| Download and view the new invoice | Invoice => in the Payment Method, the amount is well updated |
