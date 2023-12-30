---
title: "ps_googleanalytics - Enable Back Office Tracking"
weight: 2
---

# ps_googleanalytics - Enable Back Office Tracking
## Details
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-3188

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module Manager page & search the module ps_googleanalytics | The module manager is well displayed and the module is displayed as a result |
| Click on Configure | The configuration page is well displayed |
| Set a valid Google Analytics Tracking ID and save | A green alert "Account ID updated successfully" & "Settings for Enable Back Office tracking updated successfully" are displayed |
| Go to BO, Click on Enable on the Tag Assistant Legacy (by Google) and refresh the page | A red message is displayed<br><br>!image-2022-03-22-18-22-04-703.png! |
| Go to the module manager page and enable the Enable Back Office tracking | A green alert "Settings for Enable Back Office tracking updated successfully" is displayed |
| Go to BO, Click on Enable on the Tag Assistant Legacy (by Google) and refresh the page | The red message is not displayed anymore |