---
title: "ps_customeraccountlinks - Uninstall/Install"
weight: 3
---

# ps_customeraccountlinks - Uninstall/Install
## Details
* **Component** : ps_customeraccountlinks
* **Status** : To be automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7406

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to back office -> Modules -> Module manger and search ps_customeraccountlinks | The module page should be displayed and module ps_customeraccountlinks should appear in the module page |
| Click on uninstall" and confirm the uninstall message by clicking on ok" | A message should appear in green to indicate that the module is uninstalled |
| Refresh the page | The module should be uninstalled and available on Modules -> Module catalog |
| Go to the front office and scroll down to the footer | The block shouldn't be displayed |
| Go to Module catalog and search ps_customeraccountlinks | The module catalog page should be displayed and module ps_customeraccountlinks should appear in the module page |
| Click on install | A message should appear in green to indicate that the module is installed |
| Go to Modules -> Module manager and search ps_customeraccountlinks" | The module should be displayed |
| Go to the front office and scroll down to the footer | The block should be displayed in the header and the footer |
