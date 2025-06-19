---
title: "BO - Design - Pages - Filter and Quick Edit Categories"
weight: 1
---

# BO - Design - Pages - Filter and Quick Edit Categories
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-945
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/04_pages/categories/01_filterAndQuickEditCategories.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/pages

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design>Pages" page. Pages page is displayed correctly" | Pages page is displayed correctly |
| Go to Add new page category | Add new page category is displayed correctly |
| Fill all information : Name : Random. Description : Random. Displayed : Yes And Save Form | Category saved successfully |
| Go back to Categories list | Categories list is displayed correctly |
| Fill all information : Name : Random. Description : Random. Displayed : Yes. And Save Form | Category saved successfully |
| Go back to categories list | Categories list is displayed correctly |
| Reset all filters of Categories table | All filters are reset. All categories are displayed |
| Save the categgories number in a variable | Number of categories is saved |
| filter by ID. Criteria : 2" | Categories list is filtered. Pages listed have 2" in their ID" |
| Reset all filters of Categories table | All filters are reset. All categories are displayed |
| filter by name. Criteria : RANDOM | Pages list is filtered. Pages listed have the name in their name |
| Reset all filters of Categories table | All filters are reset. All categories are displayed |
| filter by description. Criteria : RANDOM | Pages list is filtered. Pages listed have the Random description in their description |
| Reset all filters of Categories table | All filters are reset. All categories are displayed |
| filter by displayed. Criteria : yes" | Pages list is filtered. Pages listed have yes" in their displayed" |
| filter by name. Criteria : RANDOM | Pages list is filtered. Pages listed have the Random name in their name |
| Change Displayed to No" for first category" | Icon changed to Not-valid |
| Change Displayed to Yes" for first category" | Icon changed to valid |
