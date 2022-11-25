---
title: "Check a resource endpoint using hook-status with an invalid access token"
weight: 2
---

# Check a resource endpoint using hook-status with an invalid access token
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request the endpoint /admin-dev/new-api/hook-status/1 with an invalid access token | * Receive a response where the HTTP Code is 401<br> * Receive a response where the Header 'WWW-Authenticate: Bearer' |
