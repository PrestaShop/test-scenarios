---
title: "Check a resource endpoint using hook-status with a valid but expired access token"
weight: 3
---

# Check a resource endpoint using hook-status with a valid but expired access token
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request the endpoint /admin-dev/new-api/hook-status/1 with a valid but expired access token | * Receive a response where the HTTP Code is 401<br> * Receive a response where the Header 'WWW-Authenticate: Bearer' |
