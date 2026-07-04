---
title: "BO - Advanced Parameters - Extra Properties - Creation d\'un string sur product"
weight: 2
---

# BO - Advanced Parameters - Extra Properties - Creation d\'un string sur product
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-12903

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Advanced Parameters > Extra Properties | Tab is displayed with on top two buttons : <br> * Add new extra properties<br> * Help |
| Clic on button "Add new extra properties" | New Extra property tab is displayed |
| Set up your Extra property and click on Save button | * "Successful creation." is displayed on top<br> * You can't change : <br> ** Entity Name<br> ** Property Name<br> ** Field type<br> ** Scope <br> ** Default value |
| Go to BO > Catalog > Products and click on Brown bear Notebook | Brown Bear notebook product's page is displayed |
| Go to Extra Field tab | Test field is displayed with "QA Tester" already setted on it and with description "test effectuer par la QA" |
| Change the test value and clic on "save and publish" | Successfull update is displayed |
