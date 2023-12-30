---
title: "BO - Orders - Invoices - Enable/Disable Current Year"
weight: 5
---

# BO - Orders - Invoices - Enable/Disable Current Year
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x, 1.7.8.x, 1.7.7.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-764
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/02_invoices/03_invoiceOptions/05_enableDisableCurrentYear.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > "Invoices" page | Invoices page is displayed successfully |
| Enable Add current year to invoice number<br>Choose the option After the sequential number and save | The validation message is displayed successfully<br>"Update successful" |
| Go to Orders > "Orders" page | Orders page is displayed successfully |
| Open the first order page | Order page is displayed successfully |
| Change the order status to "Shipped" | The status is changed successfully<br>the current year exists in the invoice file name at the end |
| Go to Orders > "Invoices" page | Invoices page is displayed successfully |
| Choose the option Before the sequential number and save | The validation message is displayed successfully<br>"Update successful" |
| Go to Orders > "Orders" page | Orders page is displayed successfully |
| Open the first order page | the current year exists in the invoice file name at the beginning |
| Go to Orders > "Invoices" page | Invoices page is displayed successfully |
| Disable Add current year to invoice number and save the form | The validation message is displayed successfully<br>"Update successful" |
| Go to BO > Orders > "Orders" page | The orders page is displayed successfully |
| Open the first order page | Orders page is displayed successfully<br>the current year does not exist in the invoice file name |