---
title: "BO - Shop Parameters - Contacts - Stores - Filter, quick edit"
weight: 1
---

# BO - Shop Parameters - Contacts - Stores - Filter, quick edit
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1099
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/05_contact/stores/01_filterAndQuickEditStorestests/UI/campaigns/functional/BO/13_shopParameters/05_contact/stores/01_filterAndQuickEditStores.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Contact>Stores > Stores  tab | Stores page is well displayed |
| Filter by id_store = 6 -> Click Search | Number of Stores < total of stores<br><br>All rows column 'id_store' contains '6' |
| Click on Reset | Filter is reset<br><br>Number of stores after reset = total of stores |
| Filter by name = testname | Number of stores < total of stores<br><br>All rows column 'name' contains 'testname' |
| Click on Reset | Filter is reset<br><br>Number of stores after reset = total of stores |
| Filter by Address = rue de test | Number of stores < total of stores<br><br>All rows column 'Address' contains ' rue de test ' |
| Click on Reset | Filter is reset<br><br>Number of stores after reset = total of stores |
| Filter by City = test | Number of stores < total of stores<br><br>All rows column 'City' contains 'test' |
| Click on Reset | Filter is reset<br><br>Number of stores after reset = total of stores |
| Filter by  Zip/Postal code = 11111 | Number of stores < total of stores<br><br>All rows column 'Zip/Postal code' contains '11111' |
| Filter by State : Florida | Number of stores < total of stores<br><br>All rows column 'State' contains 'Florida' |
| Filter by County : United States | Number of stores < total of stores<br><br>All rows column 'Country ' contains 'United States' |
| Filter by State : Hawaii | Number of stores < total of stores<br><br>All rows column 'State  ' contains 'Hawaii' |
| Filter by Phone = +220 23 022 100 | Number of stores < total of stores<br><br>All rows column 'Phone   ' +220 23 022 100' |
| Filter by Fax  = 74 500 600 | Number of stores < total of stores<br><br>All rows column  Fax  ' 74 500 600' |
| Filter list by name with latest name of created store | the store  is displayed in list |
| On the _*Enabled*_ column>Click on icon check to edit the status | the mark check green is changed to red cross and a successful message "_The status has been successfully updated_." is dipalyed |
| On the _*Enabled*_ column>Click on icon check to edit the status | the red cross mark is changed to check green and a successful message "_The status has been successfully updated_." is dipalyed |
