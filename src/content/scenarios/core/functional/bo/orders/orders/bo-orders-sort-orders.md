---
title: "BO - Orders - Sort orders"
weight: 2
---

# BO - Orders - Sort orders
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-724
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/02_orders/01_orders/07_sortOrders.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Orders > Orders" page" | Orders listing is displayed correctly |
| Sort by ID ASC | The orders are sorted by ID ASC |
| Sort by ID DESC | The Orders are sorted by ID DESC |
| Sort by Reference ASC | The orders are sorted by Reference ASC |
| Sort by Reference DESC | The orders are sorted by Reference DESC |
| Sort by Delivery (Country) ASC | The orders are sorted by country ASC |
| Sort by Delivery (Country) DESC | The orders are sorted by country DESC |
| Sort by Customer ASC | The orders are sorted by customer ASC |
| Sort by Customer DESC | The orders are sorted by customer DESC |
| Sort by Total paid ASC | The orders are sorted by total ASC |
| Sort by Total paid DESC | The orders are sorted by total DESC |
| Sort by Payment method ASC | The orders are sorted by payment methods ASC |
| Sort by Payment method DESC | The orders are sorted by payment methods DESC |
| Sort by Order Status name ASC | The orders are sorted by status name ASC |
| Sort by Order Status name DESC | The orders are sorted by status name DESC |
| Sort by Date ASC | The Orders are sorted by date ASC |
| Sort by Date DESC | The Orders are sorted by date DESC |
