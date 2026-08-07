---
title: "ps_dataprivacy - Change message for customer"
weight: 1
---

# ps_dataprivacy - Change message for customer
## Details
* **Component** : ps_dataprivacy
* **Status** : To be automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7415

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Modules > Module Manager > Customer data privacy block | Customer data privacy block page displayed |
| Change text, add some special character and some style (bold...) and save | New text should be saved |
| Change the language and change text. Save the new change | New text should be saved |
| Go to Front office <br>Open the account creation page | New message should be displayed |
| Change language in BO | New message should be displayed using the new language |
| Fill the form save without mark the ps_dataprivacy checkbox | Message should be displayed asking for customer to mark the checkbox |
| Mark the checkbox and save | Account should be created |
