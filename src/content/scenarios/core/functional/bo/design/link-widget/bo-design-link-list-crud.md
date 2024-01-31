---
title: "BO - Design - Link list - CRUD"
weight: 1
---

# BO - Design - Link list - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-965
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/07_linkWidget/01_createAndCheckFooterLinkWidget.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/link-list-link-widget/link-widget-link-widget

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Link List | title contains 'Link list' |
| Clic on "New block" | title contains 'new Link block' |
| Set up the block<br><br>and clic on Save | Successful message is displayed <br>Total of block for displayFooter hook > 0 |
| Go to Fo and change language to 'en' | Footer contain block title 'Footer test block'<br>Links in footer contains all links created |
| Go back to BO and delete the link Widget created | Successful message is displayed<br>number of block for displayFooter hook after deletion < Total of block for displayFooter hook before deletion |
