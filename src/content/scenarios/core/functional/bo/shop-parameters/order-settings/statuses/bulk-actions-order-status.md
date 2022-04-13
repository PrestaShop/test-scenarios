---
title: "Bulk actions order status"
weight: 5
---

# Bulk actions order status
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters  > Order Settings | Page titles contains "Order settings" |
| Go to Statuses tab | * Page title contains "Statuses"<br> * All Statuses shouldn't have checkbox and a down arrow on the right of the edit button |
| Create a [new order statuses|https://forge.prestashop.com/browse/TEST-3211] | You should have a new order status with a check box on it left and a down arrow on the right of the Edit button |
| Click on the checkbox on the left of  order statuses | The bulked action button is now a possible action |
| Click on the Bulked Action button at the top of all the order statuses | The button is darked<br> - A drop-down menu should be display option: <br>Delete selected |
| Clic on "Delete Selected" button | All the order statuses checked are now deleted |
| Create a [new order return status|https://forge.prestashop.com/browse/TEST-3220] | You should have a new order return status with a check box on it left and a down arrow on the right of the Edit button |
| Click on the checkbox on the left of order return statuses | The bulked action button is now a possible action |
| Click on the Bulked Action button at the top of all the order return statuses | * The button is darked<br> * A drop-down menu should be display option: <br>Delete selected |
| Clic on "Delete Selected" button | All the order return statuses checked are now deleted |
