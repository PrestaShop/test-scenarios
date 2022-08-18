---
title: "BO - Outstanding - Pagination"
weight: 4
---

# BO - Outstanding - Pagination
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Orders list page | The Orders list page is well displayed |
| Change the status of all orders created from the pre-condition step to payment accepted | The alert "Successful update." is well displayed |
| Go to BO > Customers > Oustanding page | The Outstanding page is well displayed |
| Change "items per page" to 10<br><br>Get the number of Pages = *NumPage* = up round (NumbOrder / 10), For example if we have 11 oustandings, NumPage  = 2 | Page reloads with 10 items on the first page<br><br>Buttons appear to go to the next page<br><br>The number of pages is correct |
| Click on the next button | The next page is well displayed and check (page 2 / *NumPage*) is correct |
| Click on Previous button | The first page is well displayed |
| Change "items per page" to 50 | Page reloads with all items on the first page = *NumOrder* orders<br><br>Only one page of outstanding is available |
| Go to BO > Shop Parameters > Customer Settings and Disable B2B | The alert Update successful is well displayed |
