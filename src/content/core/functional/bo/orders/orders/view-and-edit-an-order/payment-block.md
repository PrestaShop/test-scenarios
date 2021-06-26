---
title: "Payment block"
weight: 8
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders | Order list appears |
| Choose an Order without payment | Payment tab should be empty : Payment (0) |
| Fill Payment line with amount < total | Warning appears : <br>Warning *€XX.XX* paid instead of *€XX.XX* |
| Fill Payment line with amount = total | Message Successful update. appears |
| Fill Payment line with amount < total | Warning appears : <br>Warning *€XX.XX* paid instead of *€XX.XX* |
| Add another currency | New options appear in Payment Tab |
| Click on dropdown amount | See other currencies |
| Change currency and make a payment | Payment lines will updated with new info |
