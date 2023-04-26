---
title: "BO - Shop Parameters - Contacts - Stores - Filter, quick edit"
weight: 1
---

# BO - Shop Parameters - Contacts - Stores - Filter, quick edit
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
| Click on the pen to edit the store | Page title contains : Edit testname |
| Update the store | Message Successful update is displayed<br><br>Number of stores after creation = total of stores + 1<br><br>Filtered stores in list is still displayed with updated data |
