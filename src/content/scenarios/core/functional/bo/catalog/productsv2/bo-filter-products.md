---
title: "BO - Filter Products"
weight: 1
---

# BO - Filter Products
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4771

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | * Products list page is displayed correctly<br> * No filter by default. All products are displayed |
| Filter the list by ID > Add a number on "min" and "max" field below "ID" in column > Click on "Search" button on the right of the table | A red alert "ID: Maximum value must be higher than minimum value." is displayed |
| Filter the list by ID > Add a number on "min" and "max" field below "ID" in column > Click on "Search" button on the right of the table | * Products list is filtered between the 4 and 10 IDs<br> * A "Reset" button on the right of the table below the "Search" button is displayed |
| Click on "Reset" button | * All filters are reset.<br> * All products are displayed. |
| Filter the list by name > Add a name on "Search name" field below "Name" in column > Click on "Search" button on the right of the table | * Products list is filtered by name.<br> * Products listed have "Mug" in their name<br> * A "Reset" button on the right of the table below the "Search" button is displayed |
| Click on "Reset" button | * All filters are reset.<br> * All products are displayed. |
| Filter the list by reference > Add a reference on "Search reference" field below "Reference" in column > Click on "Search" button on the right of the table | * Products list is filtered by reference.<br> * Products listed have "demo_1" in their reference<br> * A "Reset" button on the right of the table below the "Search" button is displayed |
| Click on "Reset" button | * All filters are reset.<br> * All products are displayed. |
| Filter the list by category > Add a category on "Search category" field below "Category" in column > Click on "Search" button on the right of the table | * Products list is filtered by category.<br> * Products listed have "Home" in their category<br> * A "Reset" button on the right of the table below the "Search" button is displayed |
| Click on "Reset" button | * All filters are reset.<br> * All products are displayed. |
| Filter the list by price > Add a number on "min" and "max" field below "Price" in column > Click on "Search" button on the right of the table | A red alert "Price (tax excl.): Maximum value must be higher than minimum value." is displayed |
| Filter the list by price > Add a number on "min" and "max" field below "Price" in column > Click on "Search" button on the right of the table | * Products list is filtered between the 10 and 15 prices<br> * A "Reset" button on the right of the table below the "Search" button is displayed |
| Click on "Reset" button | * All filters are reset.<br> * All products are displayed. |
| Filter the list by quantity > Add a number on "min" and "max" field below "Quantity" in column > Click on "Search" button on the right of the table | A red alert "Quantity: Maximum value must be higher than minimum value." is displayed |
| Filter the list by quantity > Add a number on "min" and "max" field below "Quantity" in column > Click on "Search" button on the right of the table | * Products list is filtered between the 100 and 500 quantities<br> * A "Reset" button on the right of the table below the "Search" button is displayed |
| Click on "Reset" button | * All filters are reset.<br> * All products are displayed. |
| Filter the list by status > Select "Yes" on the select list below "Status" in column > Click on "Search" button on the right of the table | * Products list is filtered by status which products are online<br> * A "Reset" button on the right of the table below the "Search" button is displayed |
| Filter the list by status > Select "No" on the select list below "Status" in column > Click on "Search" button on the right of the table | * Products list is filtered by status which products are offline<br> * "No records found" message is displayed<br> * A "Reset" button on the right of the table below the "Search" button is displayed |
| Click on "Reset" button | * All filters are reset.<br> * All products are displayed. |
| Click on "Filter by categories" and select "Home" category | * The button is updated to "Filter by categories (Home)"<br>* The button "Clear filter" is visible<br>* The position Column is visible |
| Filter the list by Position in column > Click on "Search" button on the right of the table | * Products list is filtered by position.<br>* Products listed have "1" in their position<br>* A "Reset" button on the right of the table below the "Search" button is displayed |
| Click on "Reset" button | * All filters are reset.<br> * All products are displayed. |
| Click on "Clear filter" | * The button is updated from "Filter by categories (Home)" to "Filter by categories"<br>* The button "Clear filter" is not visible<br>* The position Column is not visible<br>* The Home category is not selected in the "Filter by categories" drop-down |
