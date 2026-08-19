---
title: "Payment"
weight: 12
---

# Payment
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x, 9.1.x, 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8422
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/audit/BO/10_payment.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO -> Dashboard page | The dashboard page is displayed<br><br>No JS errors are triggered |
| Go to BO > Payment > Payment Methods | The payment methods page is displayed<br><br>No JS errors are triggered |
| Go to BO > Payment > Preferences | The preferences page is displayed<br><br>No JS errors are triggered |
