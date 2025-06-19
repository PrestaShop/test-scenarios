---
title: "BO - Design - Pages - Bulk Actions"
weight: 2
---

# BO - Design - Pages - Bulk Actions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-948
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/04_pages/pages/02_pagesBulkActions.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/pages

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design>Pages" page | Pages page is displayed correctly |
| Reset all filters of Pages table and get number of elements | All filters are reset. All pages are displayed |
| Go to Add new page page | Add new page is displayed correctly |
| Fill all information and Save Form | Page is saved correctly |
| filter by Title. Criteria : todelete" | Pages list is filtered. Pages listed have todelete" in their name" |
| Disable pages with Bulk Actions and check Result | Pages are disabled successfully |
| Enable pages with Bulk Actions and check Result | Pages are enabled successfully |
| Filter by Title. Criteria : todelete" | Pages list is filtered. Pages listed have todelete" in their name" |
| Delete pages with Bulk Actions and check Result | Pages is deleted successfully |
| Reset all filters | All filters are reset. All pages are displayed |
