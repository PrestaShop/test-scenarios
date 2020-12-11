---
title: Bulk Actions Brands
weight: 5
---

## Preconditions

Prestashop Installed\
Login Into BO \
Go to Brands Page \
Reset All filters brands
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Scenario 1 : Create 2 brands |  |
| go to new brand Page | title of page = Add new • |
| Create new Brand <br>Criteria : <br>- name : BrandToDelete<br>- logo : name with no special chars (.png)<br>- short description : lorem sentence  from faker<br>- short description fr : same as short description<br>- description : lorem sentence  from faker<br>- description fr : same as description<br>- metaTitle : same as name<br>- metaTitle fr : same as metatitle<br>- metaDescription : lorem sentence  from faker<br>- metaDescription fr : same as metaDescription<br>- metaKeywords : array of 2 lorem word from faker <br>- metaKeywords fr : same as metaKeywords<br>- enabled : true <br>- addresses : 0<br>- products : 0 | Successful message is displayed<br>number of brands after creation = Total of brands + 1 |
| go to new brand Page | title of page = Add new • |
| Create new Brand <br>Criteria : <br>- name : BrandToDelete2<br>- logo : name with no special chars (.png)<br>- short description : lorem sentence  from faker<br>- short description fr : same as short description<br>- description : lorem sentence  from faker<br>- description fr : same as description<br>- metaTitle : same as name<br>- metaTitle fr : same as metatitle<br>- metaDescription : lorem sentence  from faker<br>- metaDescription fr : same as metaDescription<br>- metaKeywords : array of 2 lorem word from faker <br>- metaKeywords fr : same as metaKeywords<br>- enabled : true <br>- addresses : 0<br>- products : 0 | Successful message is displayed<br>number of brands after creation = Total of brands + 2 |
| Scenario 2 : Disable, enable brands with bulk actions |  |
| filter brands by name <br>Criteria : BrandToDelete | in brands table all rows, column name contain 'BrandToDelete' |
| Select all brands and disable them | All brands are disabled <br>column active = clear |
| Select all brands and enable them | All brands are disabled <br>column active = check |
| reset Brands filter | number of brands after reset = Total of brands + 2 |
| Scenario 3 : Delete brands with bulk actions |  |
| filter brands by name <br>Criteria : BrandToDelete | in brands table all rows, column name contain 'BrandToDelete' |
| Select All brands and delete with Bulk Actions | Successful message is displayed |
| reset filter brands | number of brands after creation = Total of brands |
