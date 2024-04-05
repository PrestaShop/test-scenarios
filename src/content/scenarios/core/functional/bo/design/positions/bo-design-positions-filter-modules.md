---
title: "BO - Design - Positions - Filter modules"
weight: 2
---

# BO - Design - Positions - Filter modules
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-953
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/05_positions/02_filterModule.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/positions

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Positions | Positions Page is displayed<br><br>All hooks are displayed |
| Click on Show dropdown > Click on Linklist module | See hook displayFooter is displayed with Link List module highlighted |
| Click on Show dropdown > Search for Wishlist module with search bar | See that 5 hooks are used by Wishlist module :<br><br>displayAdminCustomers<br>displayCustomerAccount<br>displayFooter<br>displayMyAccountBlock<br>displayProductActions<br><br><br>In all hooks, Wishlist module should be highlighted |
| Click on Show dropdown > Select All modules | All hooks should be displayed, no modules are highlighted |
