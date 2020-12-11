---
title: Filter And Quick Edit Categories
weight: 2
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to "Design>Pages" page	<br>Pages page is displayed correctly | Pages page is displayed correctly |
| Go to Add new page category | Add new page category is displayed correctly |
| Fill all information :<br><br>Name : Random<br>Description : Random<br>Displayed : Yes<br><br>And Save Form | Category saved successfully |
| Go back to Categories list | Categories list is displayed correctly |
| Fill all information :<br><br>Name : Random<br>Description : Random<br>Displayed : Yes<br><br>And Save Form | Category saved successfully |
| Go back to categories list | Categories list is displayed correctly |
| Reset all filters of Categories table | All filters are reset<br>All categories are displayed |
| Save the categgories number in a variable | Number of categories is saved |
| filter by ID<br>Criteria : "2" | Categories list is filtered<br>Pages listed have "2" in their ID |
| Reset all filters of Categories table | All filters are reset<br>All categories are displayed |
| filter by name<br>Criteria : RANDOM | Pages list is filtered<br>Pages listed have the name in their name |
| Reset all filters of Categories table | All filters are reset<br>All categories are displayed |
| filter by description<br>Criteria : RANDOM | Pages list is filtered<br>Pages listed have the Random description in their description |
| Reset all filters of Categories table | All filters are reset<br>All categories are displayed |
| filter by position<br>Criteria : "1" | Pages list is filtered<br>Pages listed have "1" in their position |
| Reset all filters of Categories table | All filters are reset<br>All categories are displayed |
| filter by displayed<br>Criteria : "yes" | Pages list is filtered<br>Pages listed have "yes" in their displayed |
| filter by name<br>Criteria : RANDOM | Pages list is filtered<br>Pages listed have the Random name in their name |
| Change Displayed to "No" for first category | Icon changed to Not-valid<br>![](index.php?/attachments/get/32) |
| Change Displayed to "Yes" for first category | Icon changed to valid<br>![](index.php?/attachments/get/33) |
