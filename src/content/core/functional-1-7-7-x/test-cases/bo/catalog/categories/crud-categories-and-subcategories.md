---
title: CRUD Categories And Subcategories
weight: 2
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the "Catalog > Categories" page | The Categories page is displayed correctly |
| Reset all filters | All filters are reset<br>All Categories are displayed |
| Click on "Add new category" | New Category Page is displayed correctly<br>Page title contains "Add new" |
| Fill all information :<br><br>Name : Random<br>Displayed : Yes<br>Parent category : Random <br>Description : Random<br>Category cover image : image<br>Category thumbnail : image<br>Menu thumbnails : image<br>Meta title : Random<br>Friendly URL : NewCategory<br>Group Access : All<br><br>And Save Form | Category is saved correctly<br>Message is displayed : "Successful creation." |
| Go to FO by clicking on View my shop | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the existence of the new category | The new category exist in categories |
| Close FO and Go Back to BO | BO is displayed |
| In list, Filter By Name<br>Criteria : "NewCategory" | Filter is succeeded |
| Click on the category name | Category Page is displayed correctly<br>Page title contains "NewCategory" |
| Click on "Add new category" | New Category Page is displayed correctly<br>Page title contains "Add new"<br>Parent category is checked |
| Fill all information :<br><br>Name : Subcategory + Random<br>Displayed : Yes<br>Parent category : Category <br>Description : Random<br>Category cover image : image<br>Category thumbnail : image<br>Menu thumbnails : image<br>Meta title : Random<br>Friendly URL : Subcategory<br>Group Access : All<br><br>And Save Form | Category is saved correctly<br>Message is displayed : "Successful creation." |
| Go to FO by clicking on View my shop | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the existence of the sub category name | The sub category name exist in categories |
| Close FO page and go Back to BO | BO is displayed |
| Go to the "Catalog > Categories" page | Categories page is displayed correctly |
| In list, Filter By Name<br>Criteria : "NewCategory" | Filter is succeeded |
| Click on edit Category | For Edit Category is displayed correctly<br>Page Title contains "Edit:NewCategory" |
| Edit category with other fake values :<br><br>Name : EditCategory + Random<br>Displayed : No<br>Parent category : Random <br>Description : Random<br>Category cover image : image<br>Category thumbnail : image<br>Menu thumbnails : image<br>Meta title : Random<br>Friendly URL : EditCategory<br>Group Access : All<br><br>And Save Form | Category is saved correctly<br>Message is displayed : "Successful update." |
| Go to FO by clicking on View my shop | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the non existence of the category name | The category does not exist in categories |
| Close FO page and go Back to BO | BO is displayed |
| In list, Filter By Name<br>Criteria : "EditCategory" | Filter is succeeded |
| Delete Category with option<br>"I want to associate the products without other categories to the parent category, then disable these products for now. I re-enable them when they are moved in their new category. (Recommended)" | Customer is deleted<br>Message is displayed : "Successful deletion." |
| Reset all filters | All filters are reset<br>All Categories are displayed |
| Go to FO by clicking on View my shop | FO page switched and refreshed<br>Sitemap page is displayed |
| Check the non existence of the category name | The category does not exist in categories |
