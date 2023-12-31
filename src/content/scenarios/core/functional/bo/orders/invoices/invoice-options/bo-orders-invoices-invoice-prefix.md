---
title: "BO - Orders - Invoices - Invoice Prefix"
weight: 4
---

# BO - Orders - Invoices - Invoice Prefix
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x, 1.7.8.x, 1.7.7.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-763
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/02_invoices/03_invoiceOptions/04_invoicePrefix.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > "Invoices" page | Invoices page is displayed successfully |
| Set the new prefix and save the form | The validation message is displayed successfully<br>"Update successful" |
| Go to Orders > "Orders" page | Orders page is displayed successfully |
| Open the first order page | Order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully<br>The invoice prefix is changed successfully |
| Go to BO > Orders > "Invoices" page | Invoices page is displayed successfully |
| Set the default prefix and save the form | The validation message is displayed successfully<br>"Update successful" |
| Go to BO > Orders > "Orders" page | Orders page is displayed successfully |
| Open the first order page | Order page is displayed successfully<br>The invoice prefix is changed successfully |