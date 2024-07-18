---
title: "BO - Orders - Credit Slips - Filter Credit Slips"
weight: 1
---

# BO - Orders - Credit Slips - Filter Credit Slips
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-766

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Credit slips | Credit slip page is displayed<br><br>Credit slips = 0 |
| Go to BO > Orders > Orders > View Order with ID = 5 | Order details page is well displayed |
| Update the order status to "Shipped" | The order status is updated successfully<br>The invoice is created successfully |
| Click on "Partial refund" | A partial refund was successfully created.<br><br>Credit slip is available is Documents tab : 000001 |
| Click on "Partial refund" | A partial refund was successfully created.<br><br>Credit slip is available is Documents tab : 000002 |
| Go to Orders > Credit slips | Credit slip page is displayed<br><br>Credit slips = 2 |
| Filter by ID | Credit slip with ID 1 is displayed in list |
| Reset all filters | All filters are reset<br><br>Credit slips = 2 |
| Filter by ID | No records founds<br><br>Credit slips = 0 |
| Reset all filters | All filters are reset<br><br>Credit slips = 2 |
| Filter by Order ID | Credit slips list is filtered<br><br>Credit slips = 2 |
| Filter by Order ID | No records found<br><br>Credit slips = 0 |
| Reset all filters | All filters are reset<br><br>Credit slips = 2 |
| Filter by Date | Credit slips list is filtered<br><br>Credit slips = 2 |
| Reset all filters | All filters are reset<br><br>Credit slips = 2 |
