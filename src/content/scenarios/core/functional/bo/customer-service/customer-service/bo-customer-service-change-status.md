---
title: "BO - Customer Service - Change status"
weight: 2
---

# BO - Customer Service - Change status
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-864
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/05_customerService/01_customerService/02_changeStatus.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/customer-service/customer-service

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Contact us page > Fill the fields > Click Send | Message "Your message has been successfully sent to our team." appears |
| Go to BO > Customer Service > Customer Service | See that the latest message sent from FO is displayed in Customer Service block |
| Click on the message > Click "Mark as handled" | Message "The status has been successfully updated." is displayed<br><br>The button transforms into "Re-open"<br><br>Status is "Closed" in Customer Service block |
| Click on the message > Change status > Click "Mark as "pending 1" (will be answered later)" | Message "The status has been successfully updated." is displayed<br><br>Button transforms into "Disable pending status"<br><br>Status has changed to "Pending 1" in Customer Service block |
| Click on the message > Change status > Click "Mark as "pending 2" (will be answered later)" | Message "The status has been successfully updated." is displayed<br><br>Button transforms into "Disable pending status"<br><br>Status has changed to "Pending 2" in Customer Service block |
| Click "Forward this discussion to another employee" > In the popup, choose an existing employee > Add a comment > Click Forward | See in the thread :<br>-Message forwarded to ...<br>-Comment: ...<br><br>Block Orders and messages timeline is updated |
