---
title: "BO - Orders - Invoices - Other Options"
weight: 6
---

# BO - Orders - Invoices - Other Options
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x, 1.7.8.x, 1.7.7.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-765
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/02_invoices/03_invoiceOptions/06_otherOptions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Orders > "Invoices" page | Invoices page is displayed successfully |
| Set the new invoice number, legal free text, footer text and save the form | The validation message is displayed successfully<br>"Update successful" |
| Go to BO > Orders > "Orders" page | Orders list is displayed successfully |
| Go to the first order page (created in the pre-condition) | The order page is displayed successfully |
| Change the order status to "Shipped" | The order status is updated successfully<br>The invoice is created successfully |
| Download the invoice | The invoice is downloaded successfully<br>The invoice number is changed successfully<br>The legal free text and the footer text exist in the invoice |
| Go to Orders > "Invoices" page | Invoices page is displayed successfully |
| Set the new invoice number, legal free text, and footer text to the default data and save the form | The validation message is displayed successfully<br>"Update successful" |