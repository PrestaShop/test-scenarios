---
title: "BO - Customers - Pagination and sort"
weight: 5
---

# BO - Customers - Pagination and sort
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Login to BO<br>Go to Customers > Customers | The Customers page is displayed |
| Check the pagination is correct:<br>- total number of items<br>- current page<br>- total of pages<br>- number of items per page | Total number of items should be correct<br>Current page should be 1<br>total of pages should be 1<br>Number of items should be 50 (by default) |
| Change the number of items per page to 10 | There is 10 items visible<br>Current page is 1<br>total of pages is 2 |
| Go to page 2 | There is 5 items visible<br>Current page is 2<br>total of pages is 2 |
| Change the number of items per page to 50 | There is 15 items visible<br>Current page is 1<br>total of pages is 1 |
