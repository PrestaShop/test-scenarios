---
title: "Resource Endpoint"
weight: 2
---

# Resource Endpoint
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4926
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/01_clientCredentialGrantFlow/02_externalAuthServer/02_resourceEndpoint.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Login in BO > Go to modules manager page | * The page title should contains 'Module manager'<br>Check that the button *upload module* exist in the header of the page |
| Click on the button Upload module | A pop-up contains *'Drop your module archive here or select file*' appears |
| Drop the module "Keycloak Connector Demo" you want to install | The installing process begins > a sucess message should appears |
| Check that the module is well installed and exist in the list of modules |  |
| Click on the button configure | The page title should contains 'Configure ' and the page sub-title should contains the  module's name |
| Define the Keycloak realm endpoint (for example *http://127.0.0.1:8003/realms/master*)<br>Click on Save | * The configuration page is refreshed<br> * The success message "Successful update" is well displayed |
| Request [http://localhost:8080/realms/master/protocol/openid-connect/token] using POST data | Return the access token by Keycloak |
| Request the endpoint /admin-dev/new-api/hook-status/1 without access token | * Receive a response where the HTTP Code is 401<br> * Receive a response where the Header 'WWW-Authenticate: Bearer' |
| Request the endpoint /admin-dev/new-api/hook-status/1 with an invalid access token | * Receive a response where the HTTP Code is 401<br> * Receive a response where the Header 'WWW-Authenticate: Bearer' |
| Request the endpoint /admin-dev/new-api/hook-status/1 with a valid but expired access token from Keycloak | * Receive a response where the HTTP Code is 401<br> * Receive a response where the Header 'WWW-Authenticate: Bearer' |
| Request the endpoint /admin-dev/new-api/hook-status/1 with a valid token from Keycloak | * Receive a response where the HTTP Code is 200<br> * Receive a response in JSON<br> * Receive a response which contains the id of the hook and if it’s active (true / false) |
