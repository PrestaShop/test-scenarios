---
title: "BO - Design - Email Theme - Preview email themes"
weight: 1
---

# BO - Design - Email Theme - Preview email themes
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-939
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/03_emailTheme/01_previewEmailThemes.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/email-theme

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to design > email themes page | title contains 'Email Theme' |
| Preview email theme 'classic' | title contains 'Previewing Theme classic'<br>number of layouts = 50 |
| Go back to email theme page | title contains 'Email Theme' |
| Preview email theme 'modern' | title contains 'Previewing Theme modern'<br>number of layouts = 50 |
| Go back to email theme page | title contains 'Email Theme' |
