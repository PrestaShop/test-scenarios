---
title: "API : Internal Auth Server - Resource Endpoint"
weight: 2
---

# API : Internal Auth Server - Resource Endpoint
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4859
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/01_clientCredentialGrantFlow/01_internalAuthServer/02_resourceEndpoint.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request the endpoint /admin-dev/new-api/hooks/1 without access token | * Receive a response where the HTTP Code is 401 |
| Request the endpoint /admin-dev/new-api/hooks/1 with an invalid access token | * Receive a response where the HTTP Code is 401<br> * Receive a response where the Header 'WWW-Authenticate: Bearer' |
| Request the endpoint /admin-dev/new-api/hooks/1 with a valid but expired access token | * Receive a response where the HTTP Code is 401<br> * Receive a response where the Header 'WWW-Authenticate: Bearer' |
| Request the endpoint /admin-dev/new-api/hooks/1 with a valid access token | * Receive a response where the HTTP Code is 200<br> * Receive a response in JSON<br> * Receive a response which have keys<br> ** enabled<br> ** hookId |
