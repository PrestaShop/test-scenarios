---
title: "BO - Design - Pages - Filter and Quick Edit"
weight: 2
---

# BO - Design - Pages - Filter and Quick Edit
## Details
* **Component** : Core
* **Status** : Automation in progress
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7660
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
| filter by Meta title. Criteria : "123" | Pages list is filtered. No records found |
| Reset all filters | All filters are reset. All pages are displayed |
| Change Displayed to "No" for the ID = 1 | Icon changed to Not-valid<br><br>Notification : The status has been successfully updated.<br><br>ID 1 displayed |
| filter by displayed. Criteria : "No" | Pages list is filtered. Pages listed have "no" in their displayed<br><br>Only ID 1 is displayed |
| Change Displayed to "Yes" for ID =1 | ID 1 isn't displayed<br><br>The status has been successfully updated. |
| filter by displayed. Criteria : "Yes" | Pages list is filtered. Pages listed have "Yes" in their displayed<br><br>ID 1 is displayed |
| Reset all filters | All filters are reset. All pages are displayed |
