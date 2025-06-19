---
title: "BO - Advanced Parameters - Webservice - Help card"
weight: 3
---

# BO - Advanced Parameters - Webservice - Help card
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1181
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/09_webservice/03_helpCard.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/webservice

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Webservice | Webservice page is well displayed |
| Click on *Help* button on top right corner | Help card is displayed from the right side of the page |
| *Case1*<br><br>Click on *{color:#4c9aff}x{color}* button in the Help card header<br><br>*Case 2*<br><br>Click any where in Profiles page<br><br>*Case 3* <br><br>Click on *Help* button | The Help card disappears |
