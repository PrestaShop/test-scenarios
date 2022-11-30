---
title: "TLS Check"
weight: 2
---

# TLS Check
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request the endpoint /admin-dev/new-api/hook-status/1 without HTTPS | Receive a response where the HTTP code is 301<br><br>Redirect to the endpoint in HTTPS |
| Request the endpoint /admin-dev/new-api/hook-status/1 in TLS 1.0 with a valid access token | Receive a response where the HTTP code is 426<br><br>Receive a response where the header “Upgrade” is present |
| Request the endpoint /admin-dev/new-api/hook-status/1 in TLS 1.1 with a valid access token | Receive a response where the HTTP code is 426<br><br>Receive a response where the header “Upgrade” is present |
| Request the endpoint /admin-dev/new-api/hook-status/1 in TLS 1.2 with a valid access token | Receive a response where the HTTP code is 200 |
| Request the endpoint /admin-dev/new-api/hook-status/1 in TLS 1.3 with a valid access token | Receive a response where the HTTP code is 200 |
