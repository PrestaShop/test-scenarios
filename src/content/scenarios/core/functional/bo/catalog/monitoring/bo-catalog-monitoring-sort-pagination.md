---
title: "BO - Catalog - Monitoring - Sort & Pagination"
weight: 1
---

# BO - Catalog - Monitoring - Sort & Pagination
## Details
* **Component** : Core
* **Status** : À faire
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7567
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/03_monitoring/sortPaginationAndBulkDelete/01_emptyCategories.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/monitoring

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Catalog > Monitoring | Monitoring page is displayed<br><br>Multiple tables are visible (Products without images, Products without description, Disabled products, Products out of stock) |
| Click on the "Product name" column header in the first table | "Product name" column is sorted in ascending order (A→Z)<br><br>A sort icon (▲) appears on the active column header |
| Click on the "Product name" column header again | "Product name" column is sorted in descending order (Z→A)<br><br>The sort icon changes from ▲ to ▼ |
| Click on the "Product name" column header a third time | Sort returns to default order or neutral state<br><br>No error displayed |
| Click on the "Reference" column header (if present) | Rows are sorted in alphanumeric ascending order on the Reference column |
| Navigate to page 2 after sorting by Name ASC | Page 2 products are alphabetically greater than the products on page 1<br><br>Sort is preserved across pages |
| Sort by Name in Table 1, then click a column header in Table 2 | Table 2 sorts independently<br><br>Table 1 sort is not affected |
| Sort by column A then click on column B in the same table | Only column B is sorted (single active sort criterion)<br><br>Column A sort icon disappears |
| Change the items-per-page selector | Up to 50 items are displayed<br><br>Total result count remains unchanged |
| Change the items-per-page selector | Up to 100 items are displayed<br><br>Total result count remains unchanged |
| Click the next page button (›) from page 1 | Page 2 is displayed with different products than page 1 |
| Click the last page button (») | Last page is displayed<br><br>The next page button (›) is disabled or hidden |
| From the last page, click the previous page button (‹) | The previous page is displayed correctly |
| From page 2, click the first page button («) | Page 1 is displayed<br><br>The previous page button (‹) is disabled or hidden |
| Enter a valid page number manually in the field | Page 3 is displayed directly<br><br>No error |
| Verify the result counter on any page | The counter shows the correct range (e.g. Showing 1 - 20 of 47)<br><br>X and Y match the visible rows, Z matches the total |
| Navigate to a table that has 0 results | An empty state message is displayed (e.g. No results found)<br><br>No PHP or JS error<br><br>No broken empty table layout |
| Navigate to a table that has exactly 1 result | The single row is displayed correctly<br><br>Pagination controls are hidden or show 1 of 1<br><br>Sort controls are still functional without error |
| Sort by Name ASC, then change items-per-page to 50 | Sort is preserved after changing the pagination selector<br><br>Page resets to 1 but the sort column and direction remain active |
| While on page 3, change items-per-page to a higher value | No phantom page displayed (e.g. no page 4 of 2)<br><br>Page resets gracefully to 1 or last valid page |
| Manually set an out-of-range page number in the URL | No 500 error displayed<br><br>Graceful fallback to the last valid page or page 1 |
| Check all other Monitoring tables after testing sort and pagination | All other tables display correctly<br><br>No layout or data regression |
| Navigate to BO > Catalog > Products and test sort and pagination | Sort and pagination on the Products listing page are not affected |
| Log in with a non-admin account with limited permissions, navigate to BO > Catalog > Monitoring | Access permissions are not broken<br><br>The page loads correctly for authorized profiles |
| Open browser console (F12) and interact with sort and pagination controls | No JavaScript errors or blocking warnings in the console |
