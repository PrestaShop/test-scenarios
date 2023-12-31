---
title: "BO - Login - Log into BO"
weight: 1
---

# BO - Login - Log into BO
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-715
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/00_login/02_login.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Enter invalid credentials<br>Click on log in" | Error message is displayed |
| Enter valid credentials<br>Click on log in" | Redirected to BO dashvoard |
