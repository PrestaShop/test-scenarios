---
title: "BO - Catalog - Categories - CRUD Categories And Subcategories"
weight: 2
---

# BO - Catalog - Categories - CRUD Categories And Subcategories
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-792

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Catalog > "Categories" page | The Categories page is displayed correctly |
| Click on "Add new category" | New Category Page is displayed correctly. The page title contains "Add new" |
| Fill all information and Save Form | Category is saved correctly. Message is displayed : Successful creation." |
| Search by Name | Categories list is filtered. Categories listed contains the latest category created |
| Reset all filters | All categories are displayed |
| Click on View my store | FO page is displayed correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the existence of the new category | The new category exist in categories |
| Click on "Random" category | The "Random" category page is displayed<br><br>Check the title and the description of the category |
| Go back to BO > Catalog > Categories | The categories page is well displayed |
| Click on "Add new category" > Fill all information and Save Form | Category is saved correctly. Message is displayed : Successful creation." |
| Click on left menu Categories > Click on View button on Random category to display the subcategories table related | The category list is well displayed & page title contains the category Subcategory |
| Click on Subcategory | Category Page is displayed correctly<br>Page title contains "Category Subcategory" |
| Click on Home in Breadcrumb | All the categories with Home as a parent category are displayed |
| Click on View my store | FO page is opened correctly |
| Go to Sitemap page | Sitemap page is displayed |
| Check the existence of the sub category | See that the Subcategory is displayed under the category Random |
| Click on "Subcategory" category | The "Subcategory" category page is displayed<br><br>Check the title and the description of the Subcategory |
| Close FO and go back to BO | BO is displayed |
| Go to the Catalog > Categories | Categories page is displayed correctly |
| Click on Edit Category for Random > Edit category with following data > Save | Message is displayed : "Successful update." |
| Go to Sitemap page | See that Random and Subcategories categories are not displayed |
| In browser, open URL myshop.com/en/10-random | You are redirected to category Art : myshop.com/en/9-art |
| Go back to FO > Categories > Click on Random > Switch off Displayed category | The status has been successfully updated. |
| In browser, open URL myshop.com/en/11-subcategory | You are redirected to category Art : myshop.com/en/3-clothes |
| Close FO page and go Back to BO > Categories | BO is displayed |
| Edit category Random > Save | Message Successful update is displayed |
| In browser, open URL myshop.com/en/10-random | This category is no longer available.<br><br>The page you are looking for was not found. |
| Open Browser console > Network | See the following :<br>Name : 10-random<br>Status : 404 |
| Edit category Subcategory > Save | Message Successful update is displayed |
| In browser, open URL myshop.com/en/11-subcategory | The page you are looking for doesn't exist |
| Open Browser console > Network | See the following :<br>Name : 11-subcategoriy<br>Status : 410 |
| Go back to BO > Categories > Delete category Random with the first option | The categories Random and Subcategory are deleted and a message is displayed: "Successful deletion." |
