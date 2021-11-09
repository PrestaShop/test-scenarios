---
title: "Message block"
weight: 7
---

# Message block
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders | Order list appears |
| Click on the order of your choice | Display Order Detail |
| Check option *Display to customer ?* | Option is checked |
| Click Choose your order message > Choose an option > Click Send message | Message Comment successfully added. appears<br><br>Order message will be displayed in BO in blue<br><br>Messages number is correct<br>Sender, message, date, icon are correct |
| Go to FO > Log into Customer account > Go to Order history | In Message block, see new message added |
| In BO > Order > Write a message within the limit of 1200 characters | Order message will be displayed in BO and FO in blue<br>-> Cannot be automated |
| Write a message above 1200 characters | Message won't be sent and an error will appear<br>-> Cannot be automated |
| Uncheck option *Display to customer ?* | Option is unchecked |
| Click Choose your order message > Choose an option > Click Send message | Order message will be displayed in BO in grey with crossed eye icon<br>Messages number is correct<br>Sender, message, date, icon are correct |
| Write a message within the limit 1200 characters | Order message will be displayed in BO in grey with crossed eye icon<br>-> Cannot be automated |
| Write a message above 1200 characters | Message won't be sent and an error will appear<br><br>-> Cannot be automated |
| Go to FO > Log into Customer account > Go to Order history | In Message block, no new message added |
| Click Configure predefined messages link | BO > Customer Service > Order Messages Page will open |
| Click button View full conversation | Popup appear with all messages |
| Send message from FO | Message is visible en BO<br>Messages number is correct<br>Sender, message, date, icon are correct |
