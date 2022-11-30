---
title: "Resource Endpoint"
weight: 2
---

# Resource Endpoint
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request the endpoint /admin-dev/new-api/hook-status/1 without access token | * Receive a response where the HTTP Code is 401<br> * Receive a response where the Header 'WWW-Authenticate: Bearer' |
| Request the endpoint /admin-dev/new-api/hook-status/1 with an invalid access token | * Receive a response where the HTTP Code is 401<br> * Receive a response where the Header 'WWW-Authenticate: Bearer' |
| Request the endpoint /admin-dev/new-api/hook-status/1 with a valid but expired access token | * Receive a response where the HTTP Code is 401<br> * Receive a response where the Header 'WWW-Authenticate: Bearer' |
| Request the endpoint /admin-dev/new-api/hook-status/1 with a valid access token | * Receive a response where the HTTP Code is 200<br> * Receive a response in JSON<br> * Receive a response which contains the id of the hook and if it’s active (true / false) |
