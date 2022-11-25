---
title: "Check a resource endpoint using hook-status with a valid access token"
weight: 4
---

# Check a resource endpoint using hook-status with a valid access token
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request the endpoint /admin-dev/new-api/hook-status/1 with a valid access token | * Receive a response where the HTTP Code is 200<br> * Receive a response in JSON<br> * Receive a response which contains the id of the hook and if it’s active (true / false) |
