---
title: "BO - Order details - Product block"
weight: 2
---

# BO - Order details - Product block
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-737
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/viewAndEditOrder/02_productBlock.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/orders/page-template

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Orders -> View last Order page | The Order details page is displayed |
| Click on "Delete" button to remove the product and confirm the deletion | An alert "The product was successfully removed." is displayed and number products = 0 |
| Click on Add a product | The addProductTableRow is displayed |
| Search for standard simple product and click on it | The "Stock location" value is correct and the "Available" quantity is correct |
| Click on "Add" | A green alert "The product was successfully added." is displayed and the new product is displayed in the list |
| Click on "Add product", search the same product and click on "Add" | A red alert "Error! This product is already in your order, please edit the quantity instead." is displayed and the product cannot be added again |
| Click on the "Cancel" button | The addProductTableRow is not displayed |
| Click on Add a product | The addProductTableRow is displayed |
| Search for standard product with combinations and click on it | The "Stock location" value is correct and the "Available" quantity is correct |
| Click on "Add" | A green alert "The product was successfully added." is displayed and the new product is displayed in the list |
| Click on Add a product | The addProductTableRow is displayed |
| Search for virtual product and click on it | The "Stock location" value is correct and the "Available" quantity is correct |
| Click on "Add" | A green alert "The product was successfully added." is displayed and the new product is displayed in the list |
| Click on Add a product | The addProductTableRow is displayed |
| Search for pack product and click on it | The "Stock location" value is correct and the "Available" quantity is correct |
| Click on "Add" | A red alert "{color:#FF0000}Error!{color}<br>{color:#FF0000}Minimum quantity of "2" must be added{color}" is displayed |
| Increase quantity = minimal quantity | The quantity is changed |
| Click on "Add" | 1. A green alert "The product was successfully added." is displayed and the new product is displayed in the list<br><br>2. The name is correct, the base price is correct, the quantity is correct, the Available is ok and the total is ok |
| Click on Add a product | The addProductTableRow is displayed |
| Search for customized product (demo_14) and click on it | The "Stock location" value is correct and the "Available" quantity is correct |
| Click on "Add" | A green alert "The product was successfully added." is displayed and the new product is displayed in the list |
| Click on Add a product | The addProductTableRow is displayed |
| Search for an out of stock allowed product and click on it | The "Stock location" value is correct and the "Available" quantity is correct |
| Click on "Add" | A green alert "The product was successfully added." is displayed and the new product is displayed in the list |
| Click on Add a product | The addProductTableRow is displayed |
| Search for an out of stock not allowed product and click on it | The "Stock location" value is correct,  the "Available" quantity is correct and the "Add" button is disabled |
| Increase the quantity | The "Add" button is still disabled |
| Click on "Cancel" button | The addProductTableRow is not displayed |
| Click on Add a product | The addProductTableRow is displayed |
| Search for a product with a specific price and click on it | The base price and the total are correct |
| Click on Add a product | The addProductTableRow is displayed |
| Search for a product with ecotax and click on it | The base price and the total are correct |
| Click on Add a product | The addProductTableRow is displayed |
| Search for a product with cart rule and click on it | The base price and the total are correct <br><br>Check that the discount line is well added |
| Click on "Edit" of the first product in the list | The "editProductRow" is displayed |
| Edit the quantity, click on "Save" and confirm the modification | The Quantity is correct |
| Click on "Edit" of the first product in the list | The "editProductRow" is displayed |
| Edit the price, click on "Save" and confirm the modification | The base price is correct and the total is correct |
| Click on Add" | A green alert "The product was successfully added." is displayed and the new product is displayed in the list |
| Add 3 differents products to have more 8 products in the list | The number of products in the list is correct |
| Click on "Display with items" = 8 and click on "Next" | The pagiation number is equal to 2 |
| Click on "Previous" | The pagination number is equal to 1 |
| Click on "Display with items" = 20 | The pagiation doesn't exit: the Next button is not visible |
| Click on "Display with items" = 8 | The pagiation is displayed & the New button is visible |
