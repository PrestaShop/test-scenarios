---
title: "Basic Test"
weight: 1
---

# Basic Test
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4837
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/01_basicTest.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request the endpoint /admin-dev/new-api/ | Receive a response where the HTTP code is 404 |
| Request the endpoint /admin-dev/new-api/hook-status | Receive a response where the HTTP code is 405 |
