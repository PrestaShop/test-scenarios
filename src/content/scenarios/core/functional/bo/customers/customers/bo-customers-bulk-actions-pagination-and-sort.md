---
title: "BO - Customers - Bulk Actions, Pagination and Sort"
weight: 3
---

# BO - Customers - Bulk Actions, Pagination and Sort
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-850

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Customers > Customers page | The Customers page is displayed correctly |
| The Customers page is displayed correctly | All filters are reset<br>All Customers are displayed |
| Click on Add new customer | New Customer Page is displayed correctly<br>Page title contains Creating a new Customer |
| Fill all information > Click on Save | Customer is saved correctly<br><br>Message is displayed : Successful creation |
| Click on Add new customer" | New Customer Page is displayed correctly<br>Page title contains Creating a new Customer" |
| Fill all information > Click on Save | Customer is saved correctly<br><br>Message is displayed : Successful creation |
| In list, Filter by First name | Filter is succeeded |
| Select All Customers > Bulk Action > Disable selection | All customers are disabled<br><br>Message successful update |
| Select All Customers > Bulk Action > Enable selection | All customers are enabled<br><br>Message successful update |
| Select All Customers > Bulk Action > Delete selection > Confirm deletion | Customers are successfully deleted<br><br>Message "The selection has been successfully deleted" |
| Reset filter | All customers are displayed in list |
| Check the pagination is correct:<br> - total number of items<br> - current page<br> - total of pages<br> - number of items per page | Total number of items should be correct<br>Current page should be 1<br>Total of pages should be 1<br>Number of items should be 50 (by default) |
| Change the number of items per page to 10 | There are 10 items visible<br>Current page is 1<br>Total of pages is 2 |
| Go to page 2 | There are 5 items visible<br>Current page is 2<br>Total of pages is 2 |
| Change the number of items per page to 50 | There are 15 items visible<br>Current page is 1<br>Total of pages is 1 |
