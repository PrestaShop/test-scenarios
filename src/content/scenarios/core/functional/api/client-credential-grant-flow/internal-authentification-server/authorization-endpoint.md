---
title: "Authorization Endpoint"
weight: 1
---

# Authorization Endpoint
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-4851
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/01_clientCredentialGrantFlow/01_internalAuthServer/01_authorizationEndpoint.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request the endpoint /admin-dev/new-api/oauth2/token in GET method | Receive a response where the HTTP code is 405 |
| Request the endpoint /admin-dev/api/oauth2/token with oauth2 in POST method without informations | Receive a response where the HTTP code is 400 |
| Request the endpoint /admin-dev/api/oauth2/token in POST with informations but undefined (notUsed) | Receive a response where the HTTP code is 400 |
| Request the endpoint /admin-dev/api/oauth2/token in POST with informations but invalid (clientId + clientSecret) | Receive a response where the HTTP Code is 401 |
| Request the endpoint /admin-dev/api/oauth2/token in POST with valid informations (clientId + clientSecret) and undefined (notUsed parameter) | Receive a response where the HTTP Code is 200 |
| Request the endpoint /admin-dev/api/oauth2/token in POST with valid informations (clientId + clientSecret) | * Receive a response where the HTTP Code is 200<br> * Receive a response in JSON<br> * Receive a response which contains this object <br><br>{   "token_type":"Bearer"   "expires_in":3600,   "access_token":"%access_token%", } |
