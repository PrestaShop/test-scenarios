---
title: "BO - Modules - GDPR - Help"
weight: 5
---

# BO - Modules - GDPR - Help
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7595
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/37_psgdpr/02_configuration/05_help.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Modules manager > Search psgdpr > Configure | psgdpr module configuration page is displayed |
| Go to tab Help | Title Help & contact is displayed<br><br>See 2 columns : "This module allows you to" & a FAQ section |
| In FAQ section > Click on all the questions | See that the answer is displayed in a dropdown |
| Click again on the question | The answer is hidden |
| Click on Documentation | Another tab will open with the User guide in English |
| Go to Your profile > Change your language to French > Save | Successful update message is displayed |
| Go back to psgdpr module > Tab Help > Documentation button | Another tab will open with the User guide in French |
