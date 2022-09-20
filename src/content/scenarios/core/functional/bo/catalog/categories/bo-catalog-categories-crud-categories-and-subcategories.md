---
title: "BO - Catalog - Categories - CRUD Categories And Subcategories"
weight: 2
---

# BO - Catalog - Categories - CRUD Categories And Subcategories
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Catalog > "Categories" page | The Categories page is displayed correctly |
| Reset all filters | All filters are reset. All Categories are displayed |
| Click on "Add new category" | New Category Page is displayed correctly. The page title contains "Add new" |
| Fill all information and Save Form | Category is saved correctly. Message is displayed : Successful creation."<br> # Total categories = total categories + 1 |
| Filter by Name | Categories list is filtered. Categories listed contains the:<br> # searched  "Name"<br> # The description of the searched category<br> # The status |
| Go to FO by clicking on View my shop | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the existence of the new category | The new category exist in categories |
| Click on "Newcategory" category | The "NewCatgory" category page is displayed<br><br>Check the description and the existence of the Category cover image |
| Close FO and Go Back to BO | BO is displayed |
| In list Filter By Name Criteria : "NewCategory" | Filter is succeeded |
| Click on the category name | Category Page is displayed correctly Page title contains the category's name "NewCategory" |
| Click on "Add new category" to create a sub-category | New Category Page is displayed correctly Page title contains "Add new" Parent category is "checked " |
| Fill all information : and Save Form | Category is saved correctly Message is displayed : "Successful creation." |
| Go to FO by clicking on View my shop | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the existence of the sub category name | The sub category name exist in categories |
| Click on "Subcategory" category | The "Subcategory" category page is displayed<br><br>Check the description and the existence of the Category cover image |
| Close FO page and go Back to BO | BO is displayed |
| Go to the Catalog > "Categories" page | Categories page is displayed correctly |
| In list Filter By Name Criteria : "NewCategory" | Filter is succeeded |
| Click on "View" | The Sub-categories list page is displayed |
| Rest filter | Number of subcategories = Total subcategories |
| In list Filter By Name Criteria : "SubCategory" | Filter is succeeded |
| Go to the Catalog > "Categories" page | Categories page is displayed correctly |
| In list Filter By Name Criteria : "NewCategory" | Filter is succeeded |
| Click on edit Category | For Edit Category is displayed correctly Page Title contains "Edit:NewCategory" |
| Edit category with other fake values and Save Form | Category is saved correctly<br>Message is displayed : "Successful update." |
| Go to FO by clicking on View my shop | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the non-existence of the category name "NewCategory" | The category does not exist in categories |
| Close FO page and go Back to BO | BO is displayed |
| In list Filter By Name Criteria : "EditCategory" | Filter is succeeded |
| Delete Category with option I want to associate the products without other categories to the parent category then disable these products for now. I re-enable them when they are moved in their new category. (Recommended) | The category is deleted and a message is displayed: "Successful deletion." |
| Reset all filters | All filters are reset. All Categories are displayed |
| Go to FO by clicking on View my shop | FO page switched and refreshed. Sitemap page is displayed |
| Check the non existence of the category name | The category does not exist in categories |
