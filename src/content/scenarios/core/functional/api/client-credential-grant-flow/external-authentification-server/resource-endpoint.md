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
| Request the endpoint /admin-dev/new-api/feature_flags without access token  using a GET method | * Receive a response where the HTTP Code is 401 |
| Install this module on PrestaShop (see attachment) <br><br>Request the endpoint /admin-dev/new-api/feature_flags with an invalid access token using a GET method | * Receive a response where the HTTP Code is 401 |
| Install this module on PrestaShop (See attachement)<br><br>Request the endpoint /admin-dev/new-api/feature_flags with a valid but expired access token  using a GET method | * Receive a response where the HTTP Code is 401 |
| Install this module on PrestaShop (See attachement)<br><br>Request the endpoint /admin-dev/new-api/feature_flags with a valid access token  using a GET method | * Receive a response where the HTTP Code is 200<br> * Receive a response in JSON<br> * [ \{"id": 1,"name": "product_page_v2","enabled": false,"labelWording": "New product page - Single store","labelDomain": "Admin.Advparameters.Feature","descriptionWording": "This page benefits from increased performance and includes new features such as a new combination management system.","descriptionDomain": "Admin.Advparameters.Help","stability": "beta"},<br>{"id": 2,"name": "product_page_v2_multi_shop","enabled": false,"labelWording": "New product page - Multi store","labelDomain": "Admin.Advparameters.Feature","descriptionWording": "Access the new product page, even in a multistore context. This is a work in progress and some features are not available.","descriptionDomain": "Admin.Advparameters.Help","stability": "beta"}<br>] |
