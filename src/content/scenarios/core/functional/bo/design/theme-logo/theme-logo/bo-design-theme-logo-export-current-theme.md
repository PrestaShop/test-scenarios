---
title: "BO - Design - Theme & Logo - Export current theme"
weight: 2
---

# BO - Design - Theme & Logo - Export current theme
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-916
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/01_themeAndLogo/01_themeAndLogo/02_exportCurrentTheme.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/theme-and-logo

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Improve > Design > Theme & Logo | Theme & Logo page is displayed correctly |
| Click to "Export current theme" | Your theme has been correctly exported: /var/www/html/develop/themes/classic.zip |
