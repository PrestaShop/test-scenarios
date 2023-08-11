---
title: "BO - Design - Theme & Logo - Page Configuration - Disable / Enable desktop and mobile"
weight: 1
---

# BO - Design - Theme & Logo - Page Configuration - Disable / Enable desktop and mobile
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-925
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/01_themeAndLogo/02_pagesConfiguration/01_enableDisableModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Improve > Design > Theme & Logo | Theme & Logo page is displayed correctly |
| Click on "Pages Configuration" | Pages Configuration page is displayed correctly |
| On Menu > Main menu > click to Disable mobile | Notice!<br>Action on the module successfully completed |
| On Menu > Main menu > click to Enabled mobile | Notice!<br>Action on the module successfully completed |
| On Menu > Main menu > click to Disable | A modale should appear :<br><br> <br>h4. Disable module?<br><br>You are about to disable Main menu<br><br>Your current settings will be saved, but the module will no longer be active. |
| Click to Yes, disable it | Notice!<br>Action on the module successfully completed |
| Click to enable module | Notice!<br>Action on the module successfully completed |
