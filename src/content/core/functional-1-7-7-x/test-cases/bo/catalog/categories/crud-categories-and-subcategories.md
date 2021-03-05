---
title: CRUD Categories And Subcategories
weight: 2
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the "Catalog > Categories" page | The Categories page is displayed correctly |
| Reset all filters | All filters are reset. All Categories are displayed |
| Click on "Add new category" | New Category Page is displayed correctly. Page title contains "Add new" |
| Fill all information : Name : Random Displayed : Yes Parent category : Random  Description : Random Category cover image : image Category thumbnail : image Menu thumbnails : image Meta title : Random Friendly URL : NewCategory Group Access : All And Save Form | Category is saved correctly. Message is displayed : "Successful creation." |
| Go to FO by clicking on View my shop | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the existence of the new category | The new category exist in categories |
| Close FO and Go Back to BO | BO is displayed |
| In list Filter By Name Criteria : "NewCategory" | Filter is succeeded |
| Click on the category name | Category Page is displayed correctly Page title contains "NewCategory" |
| Click on "Add new category" | New Category Page is displayed correctly Page title contains "Add new" Parent category is checked |
| Fill all information : Name : Subcategory + Random Displayed : Yes Parent category : Category  Description : Random Category cover image : image Category thumbnail : image Menu thumbnails : image Meta title : Random Friendly URL : Subcategory Group Access : All And Save Form | Category is saved correctly Message is displayed : "Successful creation." |
| Go to FO by clicking on View my shop | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the existence of the sub category name | The sub category name exist in categories |
| Close FO page and go Back to BO | BO is displayed |
| Go to the "Catalog > Categories" page | Categories page is displayed correctly |
| In list Filter By Name Criteria : "NewCategory" | Filter is succeeded |
| Click on edit Category | For Edit Category is displayed correctly Page Title contains "Edit:NewCategory" |
| Edit category with other fake values : Name : EditCategory + Random Displayed : No Parent category : Random  Description : Random Category cover image : image Category thumbnail : image Menu thumbnails : image Meta title : Random Friendly URL : EditCategory Group Access : All And Save Form | Category is saved correctly<br>Message is displayed : "Successful update." |
| Go to FO by clicking on View my shop | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the non existence of the category name | The category does not exist in categories |
| Close FO page and go Back to BO | BO is displayed |
| In list Filter By Name Criteria : "EditCategory" | Filter is succeeded |
| Delete Category with option "I want to associate the products without other categories to the parent category then disable these products for now. I re-enable them when they are moved in their new category. (Recommended)" | Customer is deleted Message is displayed : "Successful deletion." |
| Reset all filters | All filters are reset. All Categories are displayed |
| Go to FO by clicking on View my shop | FO page switched and refreshed. Sitemap page is displayed |
| Check the non existence of the category name | The category does not exist in categories |
