---
title: CRUD Suppliers
weight: 1
---

## Preconditions

Prestashop Installed\
Login Into BO\
Go to Brands Page\
Go to Supplier Page
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Scenario 1 : Create Supplier |  |
| Go to new supplier page | new supplier page is displayed <br>title contains 'add new' |
| Create Supplier <br>Criteria  : <br>Name : random company name from faker<br>description : random lorem sentence from faker<br>homePhone : random phone from faker with format 01########<br>mobilePhone : random phone from faker with format 06########<br>address : random address from faker<br>secondaryAddress : random secondaryAddress from faker<br>postalCode : random zip code from faker<br>city : random city from faker<br>country : random country between ['France', 'Netherlands', 'United Kingdom', 'Germany'] (united states must be added to test bug with state input)<br>logo : generated in test<br>metatitle : name of supplier<br>metadescription : <br>random lorem sentence drom faker<br>metaKewords : array of 2 lorem word from faker<br>enabled : true by default<br>products : number = 0 | Successful message is displayed |
| Scenario 2 : View Supplier |  |
| view supplier created | View page is displayed <br>title = name of supplier created |
| return to suppliers page | suppliers page is displayed <br>title contains suppliers |
| Scenario 3: Update supplier |  |
| go to edit first supplier page | edit page is displayed <br>title contains 'edit:' |
| edit supplier<br>Criteria : <br>Name : random company name from faker<br>description : random lorem sentence from faker<br>homePhone : random phone from faker with format 01########<br>mobilePhone : random phone from faker with format 06########<br>address : random address from faker<br>secondaryAddress : random secondaryAddress from faker<br>postalCode : random zip code from faker<br>city : random city from faker<br>country : random country between ['France', 'Netherlands', 'United Kingdom', 'Germany'] (united states must be added to test bug with state input)<br>logo : generated in test<br>metatitle : name of supplier<br>metadescription : <br>random lorem sentence from faker<br>metaKewords : array of 2 lorem word from faker<br>enabled : true by default<br>products : number = 0 | supplier is updated <br>successful message is displayed |
| Scenario 4: View supplier |  |
| view edited supplier | view page is displayed <br>title = name of edited supplier |
| return to suppliers page | suppliers page is displayed <br>title contains suppliers |
| Scenario 5: Delete supplier |  |
| delete supplier created | successful message is displayed |
