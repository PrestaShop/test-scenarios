---
title: "BO - Design - Theme & Logo - Add new theme"
weight: 1
---

# BO - Design - Theme & Logo - Add new theme
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-915
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/01_themeAndLogo/01_themeAndLogo/01_addNewTheme.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/theme-and-logo/add-new-theme

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Improve > Design > Theme & Logo | Theme & Logo page is displayed correctly |
| Click to "Add new theme" | You should be able to choose to import from your computer, Import from the web, Import from FTP |
| Import from your computer<br><br>Click to Browse and select your theme.<br><br>Click to save | Theme should be added<br><br>and The & logo page is displayed |
| Go to _My theme for prestashop shop_ and click on delete button of new theme added | Delete popup is displayed |
| Click on YES to delete theme | Successful deletion message is displayed and the theme is deleted |
| Click to "Add new theme" | Theme import page is displayed |
| Go to Import from the web<br><br>Click to input and indicate the complete URL to an online.zip<br><br>Click to save | Theme should be added |
| Go to _My theme for prestashop shop_ and click on delete button of new theme added | Delete popup is displayed |
| Click on YES to delete theme | Successful deletion message is displayed and the theme is deleted |
| Click to "Add new theme" | Theme import page is displayed |
| Go to Import from FTP<br><br>Select .zip files that you uploaded in the /themes folder<br><br>Click to save | Theme should be added |
