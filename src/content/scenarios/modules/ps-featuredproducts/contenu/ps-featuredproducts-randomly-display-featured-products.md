---
title: "ps_featuredproducts - Randomly display featured products"
weight: 1
---

# ps_featuredproducts - Randomly display featured products
## Details
* **Component** : ps_featuredproducts
* **Status** : To be automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7449

## Steps
| Step Description | Expected result |
| ----- | ----- |
| BO > Modules > Module Manager > Featured products | Featured products page displayed |
| Enable the option "Randomly display featured products" and Save | A message should appear in green. <br>The settings have been updated.<br><br>The option should be enabled |
| Go to front office/check the homepage | Product shouldn't be display by id but randomly |
| Disable the option "Randomly display featured products" and Save | A message should appear in green. <br>The settings have been updated.<br><br>The option should be disabled |
| Go to front office/check the homepage | Product shoul be display by id |
