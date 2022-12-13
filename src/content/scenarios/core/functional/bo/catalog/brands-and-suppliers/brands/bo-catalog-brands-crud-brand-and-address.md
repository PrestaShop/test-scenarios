---
title: "BO - Catalog - Brands - CRUD Brand And Address"
weight: 4
---

# BO - Catalog - Brands - CRUD Brand And Address
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Brands page | The Brands page is well displayed |
| Click on "Add new brand" | Title of page = Add new |
| Set the form fields with the following Data > Save | The successful message "Successful creation." is displayed<br>Number of brands after creation = Total of brands + 1<br><br>See columns :<br>Addresses = '--'<br> Products = '0' |
| Click on "Add new brand address" | Title of page = Add new address |
| Set the form fields with the following Data > Save | The successful message "Successful creation." is displayed<br>number of Addresses after creation = Total of Addresses + 1 |
| Filter brand by Name | Filter is successful <br>Number of brands after filter < Total of brands<br>First row column name in table contain 'name of created brand' |
| View Brand | Title of page = Name of brand created<br>Number of Address in list = 1<br>First row in Addresses list, column name = ${Address.firstName} ${Address.lastName} |
| Return to Brands page | Page title = Brands |
| Reset Brand filters | Number of brands after reset = Total of brands + 1 |
| Filter Brands list by Name of Brand created | Filter is successful <br>Number of Brands after filter < Total of brands<br>first row column name in table contain 'name of created brand' |
| go to edit page | page title = 'Edit:' |
| edit brand<br>Criteria : <br><br>- name : company name from faker <br>- logo : name with no special chars (.png)<br>- short description : lorem sentence  from faker<br>- short description fr : same as short description<br>- description : lorem sentence  from faker<br>- description fr : same as description<br>- metaTitle : same as name<br>- metaTitle fr : same as metatitle<br>- metaDescription : lorem sentence  from faker<br>- metaDescription fr : same as metaDescription<br>- metaKeywords : array of 2 lorem word from faker <br>- metaKeywords fr : same as metaKeywords<br>- enabled : true <br>- addresses : 0<br>- products : 0 | The successful message "Successful update." is displayed<br>number of brands after reset = Total of brands + 1 |
| filter address by brand name (edited brand) | in table Addresses, first row column brand name = 'name of edited brand' |
| reset filter Addresses | number of Addresses after reset = Total of Addresses + 1 |
| filter address by brand name (edited brand) | in table Addresses, first row column brand name = 'name of edited brand' |
| go to edit page | title of page = 'Brands *' |
| Update Address data and click on Save | The successful message "Successful update." is displayed |
| reset filter Addresses | number of Addresses after reset = Total of Addresses + 1 |
| filter brand by name | filter is successful <br>number of brands after filter < Total of brands<br>first row column name in table contain 'name of edited brand' |
| view brand | title of page  = name of brand edited<br>Number of Address in list = 1<br>First row in Addresses list, column name = ${Address.firstName} ${Address.lastName} |
| return to brands page | page title = Brands * |
| reset brand filters | number of brands after reset = Total of brands + 1 |
| filter Brands list by name of brand edited | filter is successful <br>number of brands after filter < Total of brands<br>first row column name in table contain 'name of edited brand' |
| Delete brand | Successful deletion message is displayed |
| filter Address by firstname and lastname of edited address | in Address list first row column Brandname = '--' |
| Reset brand address filter | number of brands address after reset = Total of brands address |
| filter address list by firstname and lastname | First row in Addresses list, <br>column firstname = Address.firstName<br>column lastname = Address.lastName |
| Delete Address | Successful message is displayed |
| reset filter address | number of Addresses after reset = Total of Addresses |
