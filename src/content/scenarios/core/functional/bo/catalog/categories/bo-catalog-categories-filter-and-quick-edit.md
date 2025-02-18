---
title: "BO - Catalog - Categories - Filter And Quick Edit"
weight: 1
---

# BO - Catalog - Categories - Filter And Quick Edit
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-791

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Catalog > "Categories" page | Categories listing is displayed correctly |
| Reset all filters | All filters are reset. All categories are displayed |
| Save the number of categories in a variable | Number of categories is saved |
| Filter By id. | Categories list is filtered. Categories listed have the searched ID |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter by Name | Categories list is filtered. Categories listed contains the searched  "Name" |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter by Description | Categories list is filtered. Categories listed contains the searched "Description" |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter by Position. | Categories list is filtered. Categories listed have the searched Position" |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter By Displayed. | The customer list is filtered. Customers listed have the searched status |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter by Name | Categories list is filtered. <br><br>Categories (0)<br><br>No records found |
| Filter by Name | Categories list is filtered. Categories listed contains the searched  "Name" |
| Change Displayed to "No" with the quick edit | An alert "The status has been successfully updated." is displayed and the Icon is changed to Not-valid |
| Change Displayed to "YES" with the quick edit | An alert "The status has been successfully updated." is displayed and theIcon is changed to valid |
| Reset all Filters | Number of categories = Total of categories |
