---
title: "ps_dataprivacy - Change message for customer"
weight: 1
---

# ps_dataprivacy - Change message for customer
## Details
* **Component** : ps_dataprivacy
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-634

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Change text, add some special character and some style (bold...) and save | New text should be saved |
| Change the language and change text. Save the new change | New text should be saved |
| Go to Front office <br>Open the account creation page | New message should be displayed |
| Change language in BO | New message should be displayed using the new language |
| Fill the form save without mark the ps_dataprivacy checkbox | Message should be displayed asking for customer to mark the checkbox |
| Mark the checkbox and save | Account should be created |
