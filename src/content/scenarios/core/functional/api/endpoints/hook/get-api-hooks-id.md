---
title: "GET /api/hooks/{id}"
weight: 2
---

# GET /api/hooks/{id}
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-7790

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Design > Positions | Positions Page is displayed correctly. |
| Get the ID of the first hook of the page | !https://forge.prestashop.com/plugins/servlet/raven/attachment/1571/ID+hook.png|width=777,height=514! |
| Request with method GET the endpoint "https://[url of your shop]/admin-dev/index.php/api/hooks/\{id}" where \{id} is the previous ID get | The return value is in JSON.<br><br>The return data has multiples keys : "id", "active", "name", "title", "description"<br><br>The return data keys are consistent relative to BackOffice data. |
