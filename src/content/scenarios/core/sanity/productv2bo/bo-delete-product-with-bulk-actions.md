---
title: "BO - Delete product with bulk actions"
weight: 7
---

# BO - Delete product with bulk actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-3555

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | Products list page is displayed correctly |
| Click on "New product" button on the top right of the page > Choose "Standard product" block in the modal | * A modal "Add new product" is displayed<br> * A description by type is displayed. For Standard product:  "A physical product that needs to be shipped." |
| Click on "Add new product" button | * New Product page on "Description" tab is displayed<br> * "Standard product" type description is displayed below the product name field |
| Fill the name on "Description" tab > Click on the "Save button" at the bottom of the page | "Successful update" message is displayed |
| Clic on the "< Go to Catalog" button at the bottom-left | Products list page is displayed correctly |
| Create another standard product by using steps 2 to 5 by changing only the name | * The product is created<br> * "Successful update" message is displayed |
| Filter with name > Click on "Search" button | Two products are displayed |
| Check both products with checkboxes > Click on "Bulk Actions" button > Click on "Delete selection" | A modal is displayed with two buttons and a description:<br> * Deleting X selection<br> * Cancel<br> * Delete selection |
| Click on "Delete selection" button | A new modal is displayed with some informations:<br> * title: "Deleting X products"<br> * description: "Deleting X / X products"<br> * a progress bar<br> * "Close" button |
| Click on "Close" button | * "No records found" text is displayed instead of the product list<br> * Products are well removed |
| Click on "Reset" button | * All filters are reset.<br> * All products are displayed. |
