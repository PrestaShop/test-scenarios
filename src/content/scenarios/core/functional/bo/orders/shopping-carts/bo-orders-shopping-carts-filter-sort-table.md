---
title: "BO - Orders - Shopping carts - Filter & sort table"
weight: 1
---

# BO - Orders - Shopping carts - Filter & sort table
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-773

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Orders > Shopping carts page | The Shopping carts page is well displayed |
| Filter shopping carts by ID | No records found<br><br>Number of shopping carts = 0 |
| Filter shopping carts by ID | No records found<br><br>Number of shopping carts = 0 |
| Reset all filters | Number of shopping carts = 5 |
| Filter shopping carts by Order ID | Shopping cart with Order ID = 4 is displayed<br><br>Number of shopping carts = 1 |
| Reset all filters | Number of shopping carts = 5 |
| Filter Shopping carts by Status | Number of shopping carts = 5 |
| Reset all filters | Number of shopping carts = 5 |
| Go to FO > Add any product to cart > Go back to BO > Refresh Shopping carts page | The Shopping carts page is well displayed<br><br>Number of shopping carts = 6 |
| Filter Shopping carts by Status | Number of shopping carts = 1 |
| Filter Shopping carts by Customer | Number of shopping carts = 5 |
| Filter Shopping carts by Customer | Number of shopping carts = 5 |
| Reset all filters | Number of shopping carts = 6 |
| Filter Shopping carts by Carrier | Number of shopping carts = 5 |
| Reset all filters | Number of shopping carts = 6 |
| Filter shopping carts by Date | No records found<br><br>Number of shopping carts = 0 |
| Reset all filters | Number of shopping carts = 6 |
| Filter Shopping carts by Online | No records found<br><br>Number of shopping carts = 0 |
| Reset all filters | Number of shopping carts = 6 |
| Sort by ID ASC | Shopping carts are sorted by ID ASC (1-2-3) |
| Sort by Order ID ASC | Shopping carts are sorted by Order ID ASC (1-2-3) |
| Sort by Order ID DESC | Shopping carts are sorted by Order ID DESC (3-2-1) |
| Sort by Status ASC | Shopping carts are sorted by Status ASC (a-b-c) |
| Sort by Status DESC | Shopping carts are sorted by Status DESC (z-y-x) |
| Sort by Customer ASC | Shopping carts are sorted by Customer ASC (a-b-c) |
| Sort by Customer DESC | Shopping carts are sorted by Customer DESC (z-y-x) |
| Sort by Carrier ASC | Shopping carts are sorted by Carrier ASC (a-b-c) |
| Sort by Carrier DESC | Shopping carts are sorted by Carrier DESC (z-y-x) |
| Sort by Date ASC | Shopping carts are sorted by Date ASC |
| Sort by Date DESC | Shopping carts are sorted by Date DESC |
| Sort by Online ASC | Shopping carts are sorted by Online ASC |
| Sort by Online DESC | Shopping carts are sorted by Online DESC |
