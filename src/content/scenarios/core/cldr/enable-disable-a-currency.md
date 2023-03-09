---
title: "Enable/Disable a currency"
weight: 9
---

# Enable/Disable a currency
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization > Currencies > Disable Euro currency | Message "You cannot disable the default currency"<br><br>The currency is not disabled |
| Click "Add new currency" > Choose USD > Status "No" > Save | Message "Successful creation."<br><br>Currency USD is disabled and displayed in the list |
| Enable USD from Currency list | Message "The status has been successfully updated."<br><br>USD is enabled |
| Go to Tab Localization > Select Default currency = USD > Save | A popup is display with message:<br>"Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations." |
| Click OK on the popup | Popup disappears<br><br>Message "Update successful"<br><br>USD is now the default currency |
| Go back to Tab Currencies > Disable Euro | Message "The status has been successfully updated."<br><br>Currency Euro is disabled |
| Enable Euro, Change your default currency to Euro and delete currency USD | Message "Successful deletion." |
