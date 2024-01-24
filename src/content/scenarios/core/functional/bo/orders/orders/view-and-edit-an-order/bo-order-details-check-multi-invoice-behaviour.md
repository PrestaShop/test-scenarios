---
title: "BO - Order details - Check multi invoice behaviour"
weight: 12
---

# BO - Order details - Check multi invoice behaviour
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-748
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/12_checkMultiInvoice.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Add new order | A new order should be created |
| Click on latest Order created > Update status to "Payment accepted" to generate an Invoice | Status is updated<br><br>An invoice is available |
| Click on Add a product | The addProductTableRow is displayed |
| Click on "Add product", search the same product and click on "Add" | A red alert "This product is already in the invoice #INxxxx, please edit the quantity instead." is displayed and the product cannot be added again |
| In the invoice column, select "Create a new invoice" | A block "addProductNewInvoiceInfo" is well displayed<br><br>Check that the carrier name is well displayed & Free shipping option is not selected |
| Edit the price of the product and click on Add | A modal is opened <br>h4. "Create a new invoice<br>Are you sure you want to create a new invoice?" |
| Click on Create | An alert "The product was successfully added."<br><br>Check that the price of two products is updated<br><br>Check that the new invoice is well added |
| In the Documents tab, download the invoice | check that:<br><br>The product name is correct<br><br>Product reference is ok<br><br>The total is ok |
| Edit the price, click on "Save" and confirm the modification | A modal is displayed<br>h4. "Edit the price<br>×<br>Are you sure you want to edit this product price? It will be applied to all invoices of this order." |
| Click on "Edit" | Check that the price is updated is the two products |
| Click "View invoice" to download all invoices | The list of invoices is dowloaded<br><br>check that the price of each product is OK and total is ok |
| Scroll down to Carrier > Click on Carrier tab > Click on Edit and select a carrier not free | A green alert "Successful update." is displayed |
| Click on Add a product | The addProductTableRow is displayed |
| Click on "Add product", search another product | In the Invoice column, check there are two existing invoices |
| In the invoice column, select "Create a new invoice" | A block "addProductNewInvoiceInfo" is well displayed<br><br>Check that the carrier name is well displayed & Free shipping option is not selected |
| Select Free shipping and click on Add | A modal is opened <br>h4. "Create a new invoice<br><br>Are you sure you want to create a new invoice?" |
| Click on Create | An alert "The product was successfully added."<br><br>- Check that the new invoice is well added<br><br>- Check that a new column is added in the discount block with this name "[Generated] CartRule for Free Shipping" |
| Download the third invoice | check that:<br><br>The product name is correct<br><br>Product reference is ok<br><br>The shipping cost is free<br><br>The total is ok |
