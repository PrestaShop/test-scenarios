---
title: "BO - Payments - Preferences - Edit Currency restrictions"
weight: 1
---

# BO - Payments - Preferences - Edit Currency restrictions
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization > Currencies > Add new currency > Select an existing currency (Azerbaijani Manat (AZN)) > Save | Successful creation message is displayed |
| Go to BO > Payment > Preferences > Block Currency restrictions | Currency restrictions block is displayed<br><br>Currency Euro is checked<br><br>See Azerbaijani Manat (AZN) is available and not checked |
| Go to FO > Change Currency to Azerbaijani Manat (AZN) > Add product to cart > Proceed to checkout | In Step 4 - Payment, See alert : Unfortunately, there is no payment method available. |
| Go back to BO > Payment > Preferences > Check Bank Transfer for Azerbaijani Manat (AZN) > Save | Message Successful update is displayed |
| Go back to FO > Refresh > Check Pay by bank wire | Order can be placed |
| Go back to BO > Payment > Preferences > Uncheck Bank Transfer and COD for Euro | Message Successful update is displayed |
| Go back to Homepage FO > Change currency to Euro > Add product to cart > Proceed to checkout Until Step 4 | In step 4, only Payment by check is available |
| Go back to BO > Check all boxed to make all currency available for every payment > Save | Message Successful update is displayed |
