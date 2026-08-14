---
title: "BO - Design - Pages - Pagination"
weight: 3
---

# BO - Design - Pages - Pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7665
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/08_design/04_pages/pages/03_pagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/design/pages

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design > Pages | Pages page is displayed correctly |
| create 11 new pages in category "home" | pages table =nbr of pages + 11 |
| Reset all filters | All filters are reset , the query sql are  displayed |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Go back to the first page | The first page is displayed (page 1 / 2) |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 1)_ |
