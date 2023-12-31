---
title: "BO - Design - Theme & Logo - Page Configuration - Reset"
weight: 2
---

# BO - Design - Theme & Logo - Page Configuration - Reset
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-926
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/01_themeAndLogo/02_pagesConfiguration/02_resetModule.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Improve > Design > Theme & Logo | Theme & Logo page is displayed correctly |
| Click on "Pages Configuration" | Pages Configuration page is displayed correctly |
| On Menu > Main menu > Reset | A modale should appear :<br><br>Reset module?<br>You are about to reset Main menu<br><br>This will restore the defaults settings.<br><br>This action cannot be undone. |
| Click to Yes, reset it | Notice!<br>Action on the module successfully completed |