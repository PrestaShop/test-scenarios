---
title: "BO - Design - Theme & Logo - Page Configuration - Uninstall"
weight: 3
---

# BO - Design - Theme & Logo - Page Configuration - Uninstall
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-927
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/01_themeAndLogo/02_pagesConfiguration/03_installUninstallModule.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/theme-and-logo/theme-customization-ps_themecusto

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Improve > Design > Theme & Logo | Theme & Logo page is displayed correctly |
| Click on "Pages Configuration" | Pages Configuration page is displayed correctly |
| On Footer > Link List > Uninstall | A modale should appear :<br><br> <br>h4. Uninstall module?<br>You are about to uninstall Link List<br><br>This will definitely disable the module. |
| Click to Yes, uninstall it | Notice!<br>Action on the module successfully completed |
| On footer > Link List > Install | Notice!<br>Action on the module successfully completed |
