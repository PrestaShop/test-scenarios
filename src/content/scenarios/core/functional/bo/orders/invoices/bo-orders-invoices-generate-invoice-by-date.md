---
title: "BO - Orders - Invoices - Generate Invoice By Date"
weight: 1
---

# BO - Orders - Invoices - Generate Invoice By Date
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-758
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/02_invoices/01_generateInvoiceByDate.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/invoices

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Orders > "Orders" page | Orders listing is displayed correctly |
| Go to the first order page | The order page is displayed successfully |
| Change the order status to "Shipped" > Click on "Update Status" button | * A "Successful update." is well displayed<br> * The status is changed successfully |
| Go to the Orders > "Invoices" page | Invoices page is displayed correctly |
| Go to "By date" section > Click on "Generate PDF file" button with the current date > Check the file existence | The pdf file is generated successfully with the correct configured data (see pre-conditions) |
| Change the date to previous period when there is no invoice in the entered date in the "By date" section  > Click on "Generate PDF file" button | An error message "No invoice has been found for this period." is well displayed |
