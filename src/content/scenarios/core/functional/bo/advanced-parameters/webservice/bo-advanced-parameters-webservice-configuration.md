---
title: "BO - Advanced Parameters - Webservice - Configuration"
weight: 6
---

# BO - Advanced Parameters - Webservice - Configuration
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1180
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/09_webservice/06_configuration.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/webservice

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Webservice > Add new webservice key > Generate a key > Click AA for addresses > Save | Message Successful update is displayed |
| Enable PrestaShop's webservice > Save | Message Update successful is displayed<br><br>A new block  Webservice status is displayed |
| Click on the link displayed on Webservice status > Enter the generated key in the Username field > Sign in | The api page is displayed |
| Go to BO > Advanced Parameters > Webservice > Disable the option "Enable PrestaShop's webservice" > Save | Message Successful update is displayed |
| Go to your api page > Refresh | See the error message "The PrestaShop webservice is disabled. Please activate it in the PrestaShop Back Office" |
