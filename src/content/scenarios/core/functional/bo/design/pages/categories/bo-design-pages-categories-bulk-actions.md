---
title: "BO - Design - Pages - Categories Bulk Actions"
weight: 2
---

# BO - Design - Pages - Categories Bulk Actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-947
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/04_pages/categories/02_categoriesBulkActions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/pages

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design>Pages" page | Pages page is displayed correctly |
| Reset all filters of Categories table and get number of elements | All filters are reset. All categories are displayed |
| Go to Add new page category page | Add new page category page is displayed correctly |
| Fill all information : Name : todelete. Description : Random. Displayed : Yes. And Save Form | Category saved successfully |
| Go back to pages page | Pages page is displayed correctly |
| Go to Add new page category page | Go to Add new page category page |
| Fill all information : Name : todelete. Description : Random. Displayed : Yes. And Save Form | Category saved successfully |
| Go back to pages page | Pages page is displayed correctly |
| filter by name. Criteria : todelete" | Categories list is filtered. Pages listed have todelete" in their Name" |
| Disable categories with Bulk Actions and check Result | Categories are disabled successfully with bulk actions |
| Enable categories with Bulk Actions and check Result' | Categories are enabled successfully with bulk actions |
| filter by name. Criteria : todelete" | Categories list is filtered. Categories listed have todelete" in their name" |
| Delete categories with Bulk Actions and check Result | The categories is deleted successfully |
| Reset all filters of Categories | All filters are reset. All categories are displayed |
