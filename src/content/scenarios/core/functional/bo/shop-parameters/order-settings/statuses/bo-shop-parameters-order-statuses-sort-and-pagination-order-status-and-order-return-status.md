---
title: "BO - Shop Parameters - Order Statuses - Sort and Pagination : order status and order return status"
weight: 1
---

# BO - Shop Parameters - Order Statuses - Sort and Pagination : order status and order return status
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1058

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Order Settings > Statuses | Statuses page is well displayed.<br>2 blocks are displayed :  statuses (13) and Return statuses (5) |
| In block Order statuses (13) > Change pagination to 10 | 2 pages are available now |
| In block Order statuses (13) > Change pagination to 20 | All the order statuses are displayed on 1 page |
| In block Order statuses (13) > Change pagination to 100 | All the order statuses are displayed on 1 page |
| Scroll down to the Return statuses (5) block | See that all the Return statuses are displayed in the block |
| Add 6 Return statuses | Messages Successful creation are displayed<br><br>Title of return status block is now : Return statuses (11) <br><br>Pagination is displayed with 50 elements per page |
| In block Return statuses (11) > Change pagination to 20 | All the return statuses are displayed on 1 page |
| In block Return statuses (11) > Change pagination to 100 | All the return statuses are displayed on 1 page |
