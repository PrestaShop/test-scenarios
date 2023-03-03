---
title: "BO - Catalog - Suppliers - Filter and Quick Edit"
weight: 2
---

# BO - Catalog - Suppliers - Filter and Quick Edit
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Suppliers | Number Suppliers =  Total Suppliers |
| Filter by ID | Number of suppliers < Total suppliers<br><br>The list contains the searched ID |
| Reset filter | Number of Suppliers after reset = Total Suppliers |
| Filter Supplier by Name | Number of suppliers after filter <= total of suppliers<br>All suppliers in list contains value of filter |
| Reset Filter | Number of Suppliers after reset = Total Suppliers |
| Filter Supplier by Number of products = 0 | Number of suppliers after filter <= total of suppliers<br><br>All suppliers in list contains value of filter |
| Reset Filter | Number of Suppliers after reset = Total Suppliers |
| Filter Supplier by Enabled value = 'Yes' | Number of Suppliers after filter <= total of suppliers<br>All suppliers in list contains value of filter 'check' |
| Reset Filter | Number of Suppliers after reset = Total Suppliers |
| Filter Supplier by Name | Number of suppliers after filter <= total of suppliers<br>All suppliers in list contains value of filter |
| Disable Supplier in list | A green alert "The status has been successfully updated." is displayed<br><br>Check value of column enabled 'clear' |
| Enable Supplier in list | A green alert "The status has been successfully updated." is displayed<br><br>Check value of column enabled 'check' |
| Reset Filter | Number of Suppliers after reset = Total Suppliers |
| Filter by Name | Total suppliers < Number of suppliers<br><br>The list contains the searched Name |
| Select All suppliers | All suppliers are selected |
| Click on Bulk actions button | A drop down list is displayed |
| Disable all Suppliers with bulk actions | The alert "The status has been successfully updated." is displayed<br><br>All suppliers are disabled<br><br>Check value of column enabled of all rows 'clear' |
| Select All Suppliers | All suppliers are selected |
| Click on Bulk actions button | A drop down list is displayed |
| Enable All Suppliers with bulk actions | The alert "The status has been successfully updated." is displayed<br>All suppliers are enabled<br>Check value of column enabled of all rows 'check' |
| Select All suplliers | All suppliers are selected |
| Click on Bulk actions button | A drop down list is displayed |
| Delete All Suppliers with bulk actions (Delete selected button > confirm deletion) | Alert "The selection has been successfully deleted" is displayed<br>Supplier grid has message "No record found" |
| Reset Filter | Number suppliers = Total Suppliers |
