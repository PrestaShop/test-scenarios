---
title: "GET /admin-api/hook-status/{id}"
weight: 1
---

# GET /admin-api/hook-status/{id}
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7792
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/05_hookStatus/01_getHookStatusId.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Design > Positions | Positions Page is displayed correctly. |
| Get the ID of the first hook of the page | !https://forge.prestashop.com/plugins/servlet/raven/attachment/1571/ID+hook.png|width=777,height=514! |
| Request with method GET the endpoint "https://[url of your shop]/admin-dev/index.php/api/hook-status/\{id}" where \{id} is the previous ID get | The return value is in JSON.<br><br>The return data has multiples keys : "id", "active"<br><br>The return data keys are consistent relative to BackOffice data. |
