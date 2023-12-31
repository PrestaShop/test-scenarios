---
title: "BO - Shop Parameters - Traffic and SEO - Search Engines - CRUD"
weight: 2
---

# BO - Shop Parameters - Traffic and SEO - Search Engines - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1118
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/06_trafficAndSeo/02_searchEngines/02_CRUDSearchEngines.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO - Shop Parameters - Traffic and SEO - Search Engines | Search Engines Page is displayed |
| Click on "Add new search engine" | New search engine Page displayed |
| Fill all information and click on save | Successful creation notification |
| click to Edit | Edit: new test Page displayed |
| Modify all information and click on save | Successful update notification<br><br>ID: 39/Server: new test to delete/GET variable: testx |
| click on "..." > "Delete" | h4. Delete selection<br>Are you sure you want to delete the selected item(s)?<br><br>Modal displayed |
| Click on Delete | Successful deletion notification<br><br>ID 39 deleted |