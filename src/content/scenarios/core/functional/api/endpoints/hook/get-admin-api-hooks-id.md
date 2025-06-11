---
title: "GET /admin-api/hooks/{id}"
weight: 2
---

# GET /admin-api/hooks/{id}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7790
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/06_hooks/02_getHooksId.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Design > Positions | Positions Page is displayed correctly. |
| Get the ID of the first hook of the page | !https://forge.prestashop.com/plugins/servlet/raven/attachment/1571/ID+hook.png|width=777,height=514! |
| Request with method GET the endpoint "https://[url of your shop]/admin-dev/index.php/api/hooks/\{id}" where \{id} is the previous ID get | The return value is in JSON.<br><br>The return data has multiples keys : "id", "active", "name", "title", "description"<br><br>The return data keys are consistent relative to BackOffice data. |
