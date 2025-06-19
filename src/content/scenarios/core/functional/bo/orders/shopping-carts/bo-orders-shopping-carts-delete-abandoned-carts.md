---
title: "BO - Orders - Shopping carts - Delete abandoned carts"
weight: 5
---

# BO - Orders - Shopping carts - Delete abandoned carts
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-777
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/05_shoppingCarts/05_deleteAbandonedCarts.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/shopping-cart

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Create Shopping cart | Go to BO > See new shopping carts displayed |
| Bulk action :<br><br>Select multiple "Non-ordered" carts > Click "Bulk actions" > Click "Delete selected" | Message "The selection has been successfully deleted." appears<br><br>Multiple Non-ordered carts are deleted |
| Reset all filters | Number of shopping carts = Total of shopping carts |
