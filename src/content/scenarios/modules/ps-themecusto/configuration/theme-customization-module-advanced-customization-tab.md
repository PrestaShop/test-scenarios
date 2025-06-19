---
title: "Theme Customization module - Advanced Customization tab "
weight: 3
---

# Theme Customization module - Advanced Customization tab 
## Details
* **Component** : ps_themecusto
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4167
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/35_ps_themecusto/02_configuration/02_advancedCustomizationTab.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Theme & Logo > Click on "Advanced Customization" tab | * The "Advanced Customization" tab is well displayed with 3 blocks and some text informations |
| On the first block, click on "Download theme" button | Your current theme is downloaded with a new name "child-yourthemename".zip on your computer |
| On the second block, click on "How to use parents/child themes " button | A new tab is opened on "PrestaShop DevDocs" on Parent/child theme content: https://devdocs.prestashop-project.org/1.7/themes/reference/template-inheritance/parent-child-feature/ |
| On the third block, click on "Upload child theme " button | "Upload child theme" modal is opened to allow an upload of your theme |
