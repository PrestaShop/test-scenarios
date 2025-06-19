---
title: "BO - Order details - Carriers tab"
weight: 5
---

# BO - Order details - Carriers tab
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-740
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/05_carriersTab.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders | Order list appears |
| Click on the order of your choice (any status is ok) | Carrier tab will have at least one Carrier<br>Carrier details are correct (Date, carrier name, product weight, hipping cost, traking number is empty) |
| Scroll down to Carrier > Click on Carrier tab > Click on Edit | Popup appears with 2 options |
| Add a tracking number and Update the carrier | Message Successful update. appears.<br><br>Tracking Number will be updated on Order page<br><br>Carrier name will be updated<br><br>Cost price will be changed |
| Go to BO > Orders > Orders > View Order created with the *virtual* product | In the Carrier tab, check the existence of this message: "Shipping does not apply to virtual orders" |
