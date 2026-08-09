---
title: "BO - Advanced Parameters - Extra Properties - Creation d\'un string sur product"
weight: 1
---

# BO - Advanced Parameters - Extra Properties - Creation d\'un string sur product
## Details
* **Component** : Core
* **Status** : À faire
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8571
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/10_multistore/03_CRUDShops.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/logs/advanced-parameters/multistore

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Extra Properties | Tab is displayed with on top two buttons : <br> * Add new extra properties<br> * Help |
| Clic on button "Add new extra properties" | New Extra property tab is displayed |
| Set up your Extra property and click on Save button | * "Successful creation." is displayed on top<br> * You can't change : <br> ** Entity Name<br> ** Property Name<br> ** Field type<br> ** Scope <br> ** Default value |
| Go to BO > Catalog > Products and click on Brown bear Notebook | Brown Bear notebook product's page is displayed |
| Go to Extra Field tab | Test field is displayed with "QA Tester" already setted on it and with description "test effectuer par la QA" |
| Change the test value and clic on "save and publish" | Successfull update is displayed |
