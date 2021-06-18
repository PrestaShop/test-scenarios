---
title: "Customers Bulk Actions In BO"
weight: 3
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Customers > Customers" page" | The Customers page is displayed correctly |
| The Customers page is displayed correctly | All filters are reset<br>All products are displayed |
| Click on Add new customer" | New Customer Page is displayed correctly<br>Page title contains Creating a new Customer" |
| Fill all information : <br>> Social title :  Mrs / Mrs<br>> First name : FirstToDelete<br>> Last name : Random<br>> Email : firstName.lastName@prestashop.com<br>> Birthday Year : Random integer between 1950 and 2000<br>> Birthday Month : Random integer between 1 and 12<br>> Birthday Day : Random integer between 1 and 28<br>> Customer Enabled : Yes<br>> Partner offers : No<br>> Group Access : All<br>> Default customer group : Visitor<br><br>And Save Form | Customer is saved correctly<br>Message is displayed : Successful creation." |
| Click on Add new customer" | New Customer Page is displayed correctly<br>Page title contains Creating a new Customer" |
| Fill all information : <br>> Social title :  Mrs / Mrs<br>> First name : SecondToDelete<br>> Last name : Random<br>> Email : firstName.lastName@prestashop.com<br>> Birthday Year : Random integer between 1950 and 2000<br>> Birthday Month : Random integer between 1 and 12<br>> Birthday Day : Random integer between 1 and 28<br>> Customer Enabled : Yes<br>> Partner offers : No<br>> Group Access : All<br>> Default customer group : Visitor<br><br>And Save Form | Customer is saved correctly<br>Message is displayed : Successful creation." |
| In list, Filter By first Name<br>Criteria : ToDelete" | Filter is succeeded |
| Select All Customers and Disable them | All customers are disabled in grid |
| Select All Customers and Enable them | All customers are enabled in grid |
| Select All customers and Delete with Bulk actions | Customers are successfully deleted <br>Message is displayed : Successful deletion." |
