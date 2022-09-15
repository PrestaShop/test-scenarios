---
title: "BO - Order details - Carriers tab"
weight: 5
---

# BO - Order details - Carriers tab
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders | Order list appears |
| Click on the order of your choice (any status is ok) | Carrier tab will have at least one Carrier<br>Carrier details are correct (Date, carrier name, product weight, hipping cost, traking number is empty) |
| Scroll down to Carrier > Click on Carrier tab > Click on Edit | Popup appears with 2 options |
| Add a tracking number and Update the carrier | Message Successful update. appears.<br><br>Tracking Number will be updated on Order page<br><br>Carrier name will be updated<br><br>Cost price will be changed |
| Go to BO > Orders > Orders > View Order created with the *virtual* product | In the Carrier tab, check the existence of this message: "Shipping does not apply to virtual orders" |
