---
title: "Enable Disable Tax Breakdown"
weight: 2
---

# Enable Disable Tax Breakdown
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Orders > "Invoices" page | Invoices page is displayed successfully |
| Go to "Invoice options" section > Set to "Yes" the "Enable tax breakdown" switch button > Click on "Save" button | * The tax breakdown is enabled successfully. The switch button is set to Yes and is green<br> * A successful message "Update successful" is displayed successfully |
| Go to International > "Taxes" page | Taxes page is displayed successfully |
| Click on "Tax Rules" tab | The tax rules page is displayed successfully |
| Click on "Add new tax rules group" button on the top of the page | The "Add new" page is displayed |
| Create new tax rule group by adding a name on "Tax Rules" section > Set to "Yes" the "Enable" switch button > Click on "Save and stay" button | * A successful message "Successful creation." is displayed successfully<br> * The name is saved and is enabled<br> * 2 new sections are displayed "New tax rule" and an empty list |
| Create the first tax rule country on "New tax rule" section > Click on "Save and stay" button | * A successful message "Successful update." is displayed successfully<br> * The tax rules country is saved<br> * The "New tax rule" section is disappeared<br> * The last section is filled by the new tax rule country with all datas previously added |
| Click again on "Add new tax rule" button | New tax rule form is displayed successfully |
| Create the second tax rule country on "New tax rule" section > Click on "Save and stay" button | * A successful message "Successful update." is displayed successfully<br> * The tax rules country is saved<br> * The "New tax rule" section is disappeared<br> * The last section is filled by the new tax rule country with all datas previously added. There is 2 lines |
| Go to Catalog > "Products" page | Products list is displayed successfully |
| Click on "New product" button on the top of the page | The "New product" page is displayed successfully |
| Create new product type with data > Set to "Online" the Offline" switch button | * Product is created and saved successfully<br> * A information message "Settings updated!" is displayed |
| Click on "Preview" button at the bottom of the page > go to FO | The product page in FO is displayed successfully |
| Add the product to the cart by clicking on "Add to cart" button | * The product has added to the cart<br> * The "Product successfully added to your shopping cart" modal is opened |
| Click on "Proceed to checkout" button | The "Shopping cart" page is displayed correctly |
| Click on the "Sign in" tab > Sign in with the default account "John Doe" > Click on "Continue" button | * The customer is logged successfully<br> * The "Addresses" step is displayed |
| Click on "Continue" button | The "Shipping method" step is displayed |
| Click on "Continue" button | The "Payment" step is displayed |
| Choose the payment method and check the "Terms of service" checkbox > Click on "Place order" button | The "order confirmation" page is displayed correctly |
| Go to BO > Orders > "Orders" page | Orders list is displayed successfully |
| Click on the first order | The order details page is displayed successfully |
| Change the order status to "Payment accepted" > Click on the "Update status" button | * A successful message "Successful update." is displayed<br> * The order status is updated successfully.<br> * The invoice is created successfully |
| Download the invoice by clicking on "View invoice" button | * The invoice is downloaded successfully.<br> * There are 2 taxes in the invoice (10.000 %, 20.000 %) |
| Delete the invoice from the disk | The invoice is deleted successfully |
| Go to Orders > "Invoices" page | Invoices page is displayed correctly |
| Go to "Invoice options" section > Set to "No" the "Enable tax breakdown" switch button > Click on "Save" button | * The tax breakdown is enabled successfully. The switch button is set to No and is grey<br> * A successful message "Update successful" is displayed successfully |
| Go to Orders > "Orders" page | Orders list is displayed successfully |
| Click on the first order | The order details page is displayed successfully |
| Download the invoice by clicking on "View invoice" button | * The invoice is downloaded successfully.<br> * There is one tax in the invoice (30.000 %) |
