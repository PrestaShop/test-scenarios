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
