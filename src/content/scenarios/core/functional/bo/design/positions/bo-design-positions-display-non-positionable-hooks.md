---
title: "BO - Design - Positions - Display non-positionable hooks"
weight: 4
---

# BO - Design - Positions - Display non-positionable hooks
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-955

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Positions | Positions Page is displayed |
| Go to BO > Design > Positions | Positions Page is displayed<br><br>All hooks are displayed |
| Click on Show dropdown > Click on Linklist module | See hook displayFooter is displayed with Link List module highlighted |
| Click on Show dropdown > Search for Wishlist module with search bar | See that 5 hooks are used by Wishlist module :<br><br>displayAdminCustomers<br>displayCustomerAccount<br>displayFooter<br>displayMyAccountBlock<br>displayProductActions<br><br><br>In all hooks, Wishlist module should be highlighted |
| Click on Show dropdown > Select All modules | All hooks should be displayed, no modules are highlighted |
| Click on Display non-positionable hooks | See that non-positionable hooks are displayed<br><br>Examples:<br>actionAdminControllerSetMedia<br>actionAfterCreateFeatureFormHandler |
| Go to BO > Design > Positions | Positions Page is displayed |
| In Search for a hook field > Search for displayAttributeGroupForm | Hook displayAttributeGroupForm is displayed and highlighted |
| In Search for a hook field > Search for displayhelloworld | Nothing is displayed |
| Delete everything in the search hook field | All hooks are displayed |
| Click on Display non-positionable hooks | See that positionable hooks are displayed<br><br>Examples:<br>displayAdminCustomers<br><br>displayAdminOrder |
