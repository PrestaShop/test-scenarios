---
title: "BO - Customers - Pagination and Sort"
weight: 3
---

# BO - Customers - Pagination and Sort
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
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
| Sort by ID desc | List is sort by ID desc |
| Sort by Social title asc | List is sort by Social title asc |
| Sort by Social title desc | List is sort by Social title desc |
| Sort by First name asc | List is sort by First name asc |
| Sort by First name desc | List is sort by First name desc |
| Sort by Last name asc | List is sort by Last name asc |
| Sort by Last name desc | List is sort by Last name desc |
| Sort by Email address asc | List is sort by Email address asc |
| Sort by Email address desc | List is sort by Email address desc |
| Sort by Group asc | List is sort by Group asc |
| Sort by Group desc | List is sort by Group desc |
| Sort by Sales asc | List is sort by Sales asc |
| Sort by Sales desc | List is sort by Sales desc |
| Sort by Enabled asc | List is sort by Enabled asc |
| Sort by Enabled desc | List is sort by Enabled desc |
| Sort by Newsletter asc | List is sort by Newsletter asc |
| Sort by Newsletter desc | List is sort by Newsletter desc |
| Sort by Partner offers asc | List is sort by Partner offers asc |
| Sort by Partner offers desc | List is sort by Partner offers desc |
| Sort by Registration asc | List is sort by Registration asc |
| Sort by Registration desc | List is sort by Registration desc |
| Sort by Last visit asc | List is sort by Last visit asc |
| Sort by Last visit desc | List is sort by Last visit desc |
| Sort by ID asc | List is sort by ID asc |
| Select All Customers > Bulk Action > Disable selection | All customers are disabled<br><br>Message successful update |
| Select All Customers > Bulk Action > Enable selection | All customers are enabled<br><br>Message successful update |
| Select All Customers > Bulk Action > Delete selection > Confirm deletion | Customers are successfully deleted<br><br>Message "The selection has been successfully deleted" |
| Reset filter | All customers are displayed in list |
| Check the pagination is correct:<br> - total number of items<br> - current page<br> - total of pages<br> - number of items per page | Total number of items should be correct<br>Current page should be 1<br>Total of pages should be 1<br>Number of items should be 50 (by default) |
| Change the number of items per page to 10 | There are 10 items visible<br>Current page is 1<br>Total of pages is 2 |
| Go to page 2 | There are 5 items visible<br>Current page is 2<br>Total of pages is 2 |
| Change the number of items per page to 50 | There are 15 items visible<br>Current page is 1<br>Total of pages is 1 |
