---
title: "BO - Design - Pages - CRUD Page Category"
weight: 2
---

# BO - Design - Pages - CRUD Page Category
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-946
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/04_pages/01_CRUDPageCategory.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/pages/add-edit-page-category

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Design > Pages | Pages page is displayed correctly |
| Click Add new page category | Add new CMS Category page is displayed correctly |
| Fill all information > Save | Category saved successfully with message Successful creation |
| Click button Back to list | Pages page is displayed correctly |
| Check the category number | The category number is correct : 1 |
| Filter the new category by name : Prestashop | The new category is displayed correctly in the table |
| Click 3-dot button > Edit page category with following information > Save | The page category is edited correctly with Successful update message |
| Click back to list button | The category displayed is edited |
| Delete the created category | The category is deleted successfully with message Successful deletion |
| Click Add new page button | Add new page is displayed correctly |
| Fill all information > Save | Page is saved correctly with message Successful creation |
| Search for the created page and check result | The page is displayed correctly in the table |
| Go to Edit page and click on save button | Edit page is displayed correctly<br><br>Successful update message is displayed |
| Delete the updated page | The page is deleted successfully with message Successful deletion |
| Click on back to list | Pages page is displayed correctly |
| Reset all filters of Categories and Pages tables and get number of elements | All filters are reset. All categories and all pages are displayed |
