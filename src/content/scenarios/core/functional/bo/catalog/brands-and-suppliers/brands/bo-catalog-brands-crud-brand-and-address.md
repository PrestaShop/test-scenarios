---
title: "BO - Catalog - Brands - CRUD Brand And Address"
weight: 4
---

# BO - Catalog - Brands - CRUD Brand And Address
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-818
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/05_brandsAndSuppliers/brands/01_CRUDBrandAndAddress.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Brands page | The Brands page is well displayed |
| Click on "Add new brand" | Title of page = Add new |
| Set the form fields with the following Data > Save | The successful message "Successful creation" is displayed<br>Number of brands after creation = Total of brands + 1<br><br>See columns :<br>Addresses = '--'<br> Products = '0' |
| Click on "Add new brand address" | Title of page = Add new address |
| Set the form fields with the following Data > Save | The successful message "Successful creation" is displayed<br>number of Addresses after creation = Total of Addresses + 1 |
| Filter brand by Name | Filter is successful <br>Number of brands after filter < Total of brands<br>First row column name in table contain 'name of created brand' |
| View Brand | Title of page = Name of brand created<br>Number of Address in list = 1<br>First row in Addresses list, column name = ${Address.firstName} ${Address.lastName} |
| Return to Brands page | Page title = Brands |
| Reset Brand filters | Number of brands after reset = Total of brands + 1 |
| Filter Brands list by Name of Brand created | Filter is successful <br>Number of Brands after filter < Total of brands<br>first row column name in table contain 'name of created brand' |
| Click on Edit | page title = 'Edit:' |
| Update the info with the following data > Save | The successful message "Successful update" is displayed<br>number of brands after reset = Total of brands + 1 |
| Filter Address by Brand name (edited brand) | In table Addresses, first row column brand name = 'name of edited brand' |
| Click on Edit | title of page = 'Brands *' |
| Update Address data > Save | The successful message "Successful update" is displayed |
| Reset filter Addresses | Number of Addresses after reset = Total of Addresses + 1 |
| Filter Brand by name | Filter is successful <br>Number of brands after filter < Total of brands<br>First row column name in table contain 'name of edited brand' |
| View brand | Title of page = name of brand edited<br>Number of Address in list = 1<br>First row in Addresses list, column name = ${Address.firstName} ${Address.lastName} |
| Click Edit on Address > Edit Address > Save | The successful message "Successful update" is displayed |
| Reset Brand filters | Number of brands after reset = Total of brands + 1 |
| Filter Brands list by Name of Brand edited | Filter is successful <br>Number of brands after filter < Total of brands<br>First row column name in table contain 'name of edited brand' |
| Delete Brand | "Successful deletion" message is displayed<br><br>No records found is table |
| Reset filter Brand | Number of Brand after reset = Total of Brands |
| Filter Address by First name and Last name of edited Address | In Address list first row column Brand = '--' |
| Reset brand address filter | Number of brands address after reset = Total of brands address |
| Filter Address list by First name and Last name | First row in Addresses list, <br>column firstname = Address.firstName<br>column lastname = Address.lastName |
| Delete Address | "Successful deletion" message is displayed |
| Reset filter Address | Number of Addresses after reset = Total of Addresses |