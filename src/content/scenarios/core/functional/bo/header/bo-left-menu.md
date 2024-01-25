---
title: "BO - Left Menu"
weight: 1
---

# BO - Left Menu
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-702
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/15_header/01_leftMenu.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/common-components/back-office-header

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Check every item on the menu | All children items are displayed (when applicable). All links work as expected |
| Close the menu | The animation is smooth. The menu is now a thinner vertical blue band with a few icons |
| Check every item on the menu | All children items are displayed on a separate block on the right (when applicable). All links work as expected |
| Go to a specific page in a children block (ex: Orders > Orders). Re-open the menu | The corresponding children item is visible (not collapsed) and correctly highlighted |
| Click on the chevron icon on the top right corner of the menu | Menu should be collapsed, only icons are displayed |
| Resize the page to a smaller size | See that the menu is hidden and a hamburger icon is displayed |
