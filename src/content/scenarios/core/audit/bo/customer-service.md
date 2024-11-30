---
title: "Customer Service"
weight: 5
---

# Customer Service
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-10084
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/audit/BO/05_customerService.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Dashboard page | The dashboard page is displayed<br><br>No JS errors are triggered |
| Go to Customer Service > Customer Service page | The Customer Service page is displayed<br><br>No JS errors are triggered |
| Go to Customer Service > Order messages page | The Order messages page is displayed<br><br>No JS errors are triggered |
| Click on the icon "Edit" on the first row | The "Edit order message" page is displayed<br><br>No JS errors are triggered |
| Go to Customer Service > Order messages page<br><br>Click on the button "Add new order message" | The "Add order message" page is displayed<br><br>No JS errors are triggered |
| Go to Customers > Merchandise Returns | The Merchandise Returns page is displayed<br><br>No JS errors are triggered |
