---
title: "BO - Orders - Invoices - Enable/Disable Invoices"
weight: 1
---

# BO - Orders - Invoices - Enable/Disable Invoices
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x, 1.7.8.x, 1.7.7.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-760
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/02_invoices/03_invoiceOptions/01_enableDisableInvoices.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Orders > "Invoices" page | Invoices page is displayed successfully |
| Go to "Invoice options" section > Set to "No" the "Enable invoices" switch button > Click on "Save" button | * The invoice is disabled successfully. The switch button is set to No and is grey<br> * The successful message "Update successful" is displayed successfully |
| Go to Orders > "Orders" page | Orders page is displayed successfully |
| Go to the the order page created in the pre-condition > Click on it | Order details page is displayed successfully |
| Change the order status to "Shipped" > Click on "Update status" button | * A successful message "Successful update" is displayed<br> * The status is changed successfully<br> * The invoice is not created |
| Go back to Orders > "Invoices" page | Invoices page is displayed successfully |
| Go to "Invoice options" section > Set to "Yes" the "Enable invoices" switch button > Click on "Save" button | * The invoice is enabled successfully. The switch button is set to Yes and is green<br> * The successful message "Update successful" is displayed successfully |
| Go back to Orders > "Orders" page | Orders page is displayed successfully |
| Go to the order page  "created in the pre-condition"> Click on it | Order details page is displayed successfully |
| Change the order status to "payment accepted" > Click on "Update status" button | * A successful message "Successful update" is displayed<br> * The status is changed successfully<br> * The invoice is created successfully |
