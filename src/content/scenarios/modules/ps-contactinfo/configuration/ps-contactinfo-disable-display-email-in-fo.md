---
title: "ps_contactinfo - Disable display email in FO"
weight: 1
---

# ps_contactinfo - Disable display email in FO
## Details
* **Component** : ps_contactinfo
* **Status** : Deprecated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7398

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back office -> Modules -> Module manger and search ps_contactinfo | The module page should be displayed and module ps_contactinfo should appear in the module page |
| Click on the switch button to disable the display of email in FO | The switch button should be red |
| Click on the button save | A message should appear |
| Go to the front office | The email shouldn't be displayed in the footer |
| Click on the contact us button in the header | The email shouldn't be displayed in the column |
