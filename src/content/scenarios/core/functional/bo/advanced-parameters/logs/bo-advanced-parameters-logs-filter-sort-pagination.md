---
title: "BO - Advanced Parameters - Logs - Filter sort pagination"
weight: 1
---

# BO - Advanced Parameters - Logs - Filter sort pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1174
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/08_logs/01_filterSortAndPagination.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO>Advanced Parameters>Logs | Page title contains 'Logs' |
| Change the items number to 100 per page | 4 pages are displayed and the pagination number = _page 1 /4_ |
| Click on next | The second page is well displayed & the pagination number = _page 2 / 4_ |
| Click on previous | The first page is well displayed and the pagination number = _page 1 /4_ |
| Change the items number to 50 per page | 8 pages are displayed and the pagination number = _page 1 /8_ |
| Sort logs by ID desc | logs are sorted by ID (3 -> 2 -> 1) |
| Sort logs by ID asc | logs are sorted by ID (1 -> 2 -> 3) |
| Sort logs by Employee desc | logs are sorted by Employee (z -> y -> x) |
| Sort logs by Employee asc | logs are sorted by Employee (a -> b -> c) |
| Sort logs by Severity desc | logs are sorted by Severity (4 -> 3 -> 2) |
| Sort logs by Severity asc | logs are sorted by Severity (1 -> 2 -> 3) |
| Sort logs by Message desc | logs are sorted by Message (z -> y -> x) |
| Sort logs by Message asc | logs are sorted by Message (a -> b -> c) |
| Sort logs by Object type desc | logs are sorted by Object type (4 -> 3 -> 2) |
| Sort logs by Object type asc | logs are sorted by Object type (1 -> 2 -> 3) |
| Sort logs by Object ID desc | logs are sorted by Object ID (4 -> 3 -> 2) |
| Sort logs by Object ID asc | logs are sorted by Object ID (1 -> 2 -> 3) |
| Sort logs by Shop context desc | logs are sorted by Shop context (z -> y -> x) |
| Sort logs by Shop context asc | logs are sorted by Shop context (a -> b -> c) |
| Sort logs by Language asc | logs are sorted by Language (a -> b -> c) |
| Sort logs by Language desc | logs are sorted by Language (z -> y -> x) |
| Sort logs by Error code desc | logs are sorted by Error code (4 -> 3 -> 2) |
| Sort logs by Error code asc | logs are sorted by Error code (1 -> 2 -> 3) |
| Sort logs by Date asc | logs are sorted by Date (2023 -> 2022 -> 2021) |
| Sort logs by Date desc | logs are sorted by Date (2021 -> 2022 -> 2023) |
| Filter By id. | Logs list is filtered. Log listed have the searched ID |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter By Employee | Logs list is filtered. Logs listed have the searched Employee |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter By Severity | Logs list is filtered. Logs listed have the searched Severity |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter By Message | Logs list is filtered. Logs listed have the searched Message |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter By Object type | Logs list is filtered. Logs listed have the searched Object type |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter By Object ID | Logs list is filtered. Logs listed have the searched Object ID |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter By Error code | Logs list is filtered. Logs listed have the searched Error code |
| Reset all filters | All filters are reset. All categories are displayed |
| Filter By Date | Logs list is filtered. Logs listed have the searched Date |
| Reset all filters | All filters are reset. All categories are displayed |