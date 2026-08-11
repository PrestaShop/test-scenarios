---
title: "ps_contactinfo - Enable/Disable display email in FO"
weight: 1
---

# ps_contactinfo - Enable/Disable display email in FO
## Details
* **Component** : ps_contactinfo
* **Status** : To be automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7395

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back office -> Modules -> Module manger and search ps_contactinfo | The module page should be displayed and module ps_contactinfo should appear in the module page |
| Click on the switch button to disable the display of email in FO and save | The email should be displayed in the column |
| Go to the front office | The email shouldn't be displayed in the footer |
| Click on the contact us button in the header | The email shouldn't be displayed in the column |
| Click on the switch button to enable the display of email in FO and save | The settings have been successfully updated. |
| Go to the front office | The email should be displayed in the footer |
| Click on the contact us button in the header | The email should be displayed in the column |
