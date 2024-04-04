---
title: "BO - Design - Positions - Unhook module in list by Bulk actions"
weight: 5
---

# BO - Design - Positions - Unhook module in list by Bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-956
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/05_positions/05_unhookModuleInListByBulkActions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/positions

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to  BO > Design > Positions | Position page is well displayed |
| Select the checkboxe of the first displayed hook | A new section at the right of the page named '*Selection*' well be displayed |
| Click on the button *Unhook the selection* | A success message should be displayed "The module was successfully removed from the hook." |
