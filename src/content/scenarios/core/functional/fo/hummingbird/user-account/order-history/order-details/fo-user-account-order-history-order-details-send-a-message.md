---
title: "FO - User account - Order history - Order details - Send a message"
weight: 1
---

# FO - User account - Order history - Order details - Send a message
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-8343

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on Sign In with a customer account | You are logged in to your customer account |
| Click your account > Orders > Click on Details link of the latest order | Order details page is displayed |
| Scroll down to Add a message section >  Select a product > Write a message > Click on send | Message successfully sent alert is displayed |
| Go to BO > Customers Service > Customers Service > Click on the latest the message | Customer page is displayed, the thread is displayed with the message and the product related |
| Check received email | Mail with title _Message from a customer_ is received |
