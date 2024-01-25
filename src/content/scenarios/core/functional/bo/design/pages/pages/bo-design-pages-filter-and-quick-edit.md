---
title: "BO - Design - Pages - Filter and Quick Edit"
weight: 1
---

# BO - Design - Pages - Filter and Quick Edit
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-944
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/04_pages/pages/01_filterAndQuickEditPages.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/pages/edit-add-page

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design>Pages" page" | Pages page is displayed correctly |
| Reset all filters | All filters are reset. All pages are displayed |
| Save the pages number in a variable | Number of pages is saved |
| filter by ID. Criteria : 1" | Pages list is filtered. Pages listed have 1" in their ID" |
| Reset all filters | All filters are reset. All pages are displayed |
| filter by URL. Criteria : about-us" | Pages list is filtered. Pages listed have about-us" in their URL" |
| Reset all filters | All filters are reset. All pages are displayed |
| filter by title. Criteria : Terms and conditions of use" | Pages list is filtered. Pages listed have Terms and conditions of use" in their title" |
| Reset all filters | All filters are reset. All pages are displayed |
| filter by displayed. Criteria : yes" | Pages list is filtered. Pages listed have yes" in their displayed" |
| filter by title. Criteria : Terms and conditions of use" | Pages list is filtered. Pages listed have Terms and conditions of use" in their title" |
| Change Displayed to No" for page" | Icon changed to Not-valid |
| Change Displayed to Yes" for page" | Icon changed to valid |
