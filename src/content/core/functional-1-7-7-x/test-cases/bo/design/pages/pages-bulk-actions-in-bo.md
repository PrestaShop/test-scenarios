---
title: Pages Bulk Actions In BO
weight: 7
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to "Design>Pages" page<br>Pages page is displayed correctly | Pages page is displayed correctly |
| Reset all filters of Pages table and get number of elements | All filters are reset<br>All pages are displayed |
| Go to Add new page page | Add new page is displayed correctly |
| Fill all information :<br><br>Title : todelete<br>Meta Title : Random<br>Meta description : Random<br>Meta keyword : Random<br>Content : Random<br>Indexation by search engines : Yes<br>Displayed : Yes<br><br>And Save Form | Page is saved correctly |
| Go to Add new page page | Add new page is displayed correctly |
| Fill all information :<br><br>Title : todelete<br>Meta Title : Random<br>Meta description : Random<br>Meta keyword : Random<br>Content : Random<br>Indexation by search engines : Yes<br>Displayed : Yes<br><br>And Save Form | Page is saved correctly |
| filter by Title<br>Criteria : "todelete" | Pages list is filtered<br>Pages listed have "todelete" in their name |
| Disable pages with Bulk Actions and check Result | Pages are disabled successfully |
| Enable pages with Bulk Actions and check Result | Pages are enabled successfully |
| Filter by Title<br>Criteria : "todelete" | Pages list is filtered<br>Pages listed have "todelete" in their name |
| Delete pages with Bulk Actions and check Result | Pages is deleted successfully |
| Reset all filters | All filters are reset<br>All pages are displayed |
