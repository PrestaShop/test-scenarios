---
title: "BO - Payments - Preferences - Edit Group restrictions"
weight: 2
---

# BO - Payments - Preferences - Edit Group restrictions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Payment > Preferences > Scroll to Group restrictions block | Currency restrictions block is displayed<br><br>All Payment methods are checked for all Groups |
| Click on Bank Transfer to uncheck the payment method for all groups > Save | Message Successful update is displayed |
| Go to FO > Add product to cart > Process to checkout until Step 4 (Payment) | See only 2 payments available : COD and Check |
| Go back to BO > Uncheck COD and Payment by check > Save | Message Successful update is displayed |
| Go to FO > Refresh the page | See only bank wire payment available |
