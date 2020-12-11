---
title: Categories Bulk Actions In BO
weight: 5
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the "Catalog>Categories" page | The categories page is displayed correctly |
| Click on "Add new category" | New Category Page is displayed correctly<br>Page title contains "Add new" |
| Fill all information :<br><br>Name : FirstToDelete<br>Displayed : Yes<br>Parent category : Random<br>Description : Random<br>Category cover image : image<br>Category thumbnail : image<br>Menu thumbnails : image<br>Meta title : Random<br>Friendly URL : Random<br>Group Access : All<br><br>And Save Form | Category is saved correctly<br>Message is displayed : "Successful creation. |
| Click on Home link | Categories in Home category are displayed correctly |
| Click on "Add new category" | New Category Page is displayed correctly<br>Page title contains "Add new" |
| Fill all information :<br><br>Name : SecondToDelete<br>Displayed : Yes<br>Parent category : Random<br>Description : Random<br>Category cover image : image<br>Category thumbnail : image<br>Menu thumbnails : image<br>Meta title : Random<br>Friendly URL : Random<br>Group Access : All<br><br>And Save Form | Category is saved correctly<br>Message is displayed : "Successful creation. |
| Click on Home link | Categories in Home category are displayed correctly |
| In list, Filter By Name<br>Criteria : "ToDelete" | Filter is succeeded |
| Select All Categories and Disable them | All Categories are disabled in grid |
| Select All Categories and Enable them | All Categories are enabled in grid |
| Select All customers and Delete with Bulk actions | Caegories are successfully deleted<br>Message is displayed : "Successful deletion." |
