---
title: "Pagination"
weight: 11
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Bo > Orders > Orders | List of all Orders appears |
| *number orders _⩽_ 10* | All orders are on the same page : no pagination available |
| *number orders _⩾_ 10* | Order are display according to "Items by page" |
| Add order from BO or FO until number of orders reaches 11 orders | List of orders displays with number of order = 11<br><br>Pagination bar at the bottom of the page displays |
| Change "items per page" to 10 | Page reloads with 10 items on the first page<br><br>Buttons appear to go to the next page |
| Click on page 2 or arrow ">" to see the next page | Only one order should appear |
| Change "items per page" to 20 | Page reloads with all items on the first page = 11 orders<br><br>Only one page of order is available |
| Change "items per page" to 50 | Page reloads with all items on the first page = 11 orders<br><br>Only one page of orders is available |
| Change "items per page" to 100 | Page reloads with all items on the first page = 11 orders<br><br>Only one page of orders is available |
| Add orders to reach 21 orders total | Items per page : 10 <br><br>You should see 3 pages order orders |
| Change "items per page" : 20 | Pagination is available : 3 pages are available |
| Change "Items per page" : 50 / 100 | Only one page of order is available |
| *Filter*<br><br>By id : ASC or DESC | Pagination should keep its configuration |
| Filter by Status > Choose a status > Click Search | Order list should be filterer with the payment chosen<br><br>If < to "Items per page" : one page is available with no pagination<br><br>if > to "Items per page" : X pages are available to go through |
