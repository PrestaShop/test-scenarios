---
title: "API : Check endpoints"
weight: 3
---

# API : Check endpoints
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-11070
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_checkEndpoints.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the documentation link about the JSON documentation | The JSON documentation is displayed.<br>The JSON documentation has a property named "paths".<br>The JSON documentation paths number is greater than 0.<br>Each JSON documentation path is linked to a linked UI Test. |
