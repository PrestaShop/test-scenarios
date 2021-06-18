---
title: "Enable Disable Tax Breakdown"
weight: 2
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Orders > Invoices" page" | Invoices page is displayed successfully |
| Enable tax breakdown and save the form | The tax breakdown is enabled successfully. The validation message is displayed successfully Update successful" |
| Go to International > "taxes" page | Taxes page is displayed successfully |
| Go to "Tax rules" page | The tax rules page is displayed successfully |
| Create new tax rule group. name: 'FR tax Rule ${faker.random.word()}' enabled: true and click on Save | The validation message is displayed successfully "Successful creation." |
| Create the first tax rule country: 'France' behavior: 'Combine' tax: 'TVA FR 20%' and click on "Save and Stay" | The validation message is displayed successfully "Successful update." |
| Click on Add new tax rule" button" | New tax rule form is displayed successfully |
| Create the second tax rule country: 'France' behavior: 'Combine' tax: 'TVA FR 10%' and click on "Save and stay" | The validation message is displayed successfully Successful update." |
| Go to Catalog > "Products" page | Products list is displayed successfully |
| Create new product type: 'Standard product' productHasCombinations: false taxRule: taxRuleGroupToCreated.name | Product is created successfully |
| Click on preview button | The product page in FO is displayed successfully |
| Add the product to the cart | There is one product in the cart |
| Click on "Proceed to checkout" button | The purchase form is displayed correctly |
| Sign in with the default account "pub@prestashop.com" | The customer is logged successfully |
| Go to delivery step | The delivery step is displayed correctly |
| Go to the payment step | The payment step is displayed correctly |
| Choose the payment method and confirm the order | The confirmation page is displayed correctly |
| Go to BO > Orders > "Orders" page | Orders list is displayed successfully |
| Go to the first order page | The order page is displayed successfully |
| Change the order status to "Payment accepted" | The order status is updated successfully. The invoice is created successfully |
| Download the invoice | The invoice is downloaded successfully. There are 2 taxes in the invoice (10.000 %, 20.000 %) |
| Delete the invoice from the disk | The invoice is deleted successfully |
| Go to Orders > "Invoices" page | Invoices page is displayed correctly |
| Disable tax breackdown and save the form | The validation message is displayed successfully "Update successful" |
| Go to Orders > "Orders" page | Orders list is displayed successfully |
| Go to the first order page | The order page is displayed successfully |
| Download the invoice | The invoice is downloaded successfully. There is one tax in the invoice (30.000 %) |
