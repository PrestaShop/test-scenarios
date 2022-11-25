---
title: "Check the authorization endpoint with oauth2 in POST method with valid informations (clientId + clientSecret)"
weight: 6
---

# Check the authorization endpoint with oauth2 in POST method with valid informations (clientId + clientSecret)
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request the endpoint /admin-dev/api/oauth2/token in POST with valid informations (clientId + clientSecret) | * Receive a response where the HTTP Code is 200<br> * Receive a response in JSON<br> * Receive a response which contains this object <br><br>{   "token_type":"Bearer"   "expires_in":3000,   "access_token":"%access_token%", } |
