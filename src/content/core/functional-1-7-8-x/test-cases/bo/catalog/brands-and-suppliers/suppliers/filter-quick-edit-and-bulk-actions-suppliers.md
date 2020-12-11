---
title: filter, Quick Edit And Bulk Actions Suppliers
weight: 2
---

## Preconditions

Prestashop Installed\
Login Into BO\
Go to Brands Page\
Go to Supplier Page
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Scenario 1: Create 2 suppliers |  |
| go to new supplier page | new supplier page is displayed<br>title contains 'add new' |
| Create new supplier <br>criteria : <br>Name : random company name from faker<br>description : random lorem sentence from faker<br>homePhone : random phone from faker with format 01########<br>mobilePhone : random phone from faker with format 06########<br>address : random address from faker<br>secondaryAddress : random secondaryAddress from faker<br>postalCode : random zip code from faker<br>city : random city from faker<br>country : random country between ['France', 'Netherlands', 'United Kingdom', 'Germany'] (united states must be added to test bug with state input)<br>logo : generated in test<br>metatitle : name of supplier<br>metadescription :<br>random lorem sentence drom faker<br>metaKewords : array of 2 lorem word from faker<br>enabled : true<br>products : number = 0 | Successful message is displayed |
| go to new supplier page | new supplier page is displayed<br>title contains 'add new' |
| Create new supplier <br>criteria : <br>Name : random company name from faker<br>description : random lorem sentence from faker<br>homePhone : random phone from faker with format 01########<br>mobilePhone : random phone from faker with format 06########<br>address : random address from faker<br>secondaryAddress : random secondaryAddress from faker<br>postalCode : random zip code from faker<br>city : random city from faker<br>country : random country between ['France', 'Netherlands', 'United Kingdom', 'Germany'] (united states must be added to test bug with state input)<br>logo : generated in test<br>metatitle : name of supplier<br>metadescription :<br>random lorem sentence drom faker<br>metaKewords : array of 2 lorem word from faker<br>enabled : false<br>products : number = 0 | Successful message is displayed |
| reset all filters and get number of suppliers | number of suppliers must be at least 2 |
| Scenario 2 : Filter Suppliers |  |
| filter supplier by name of first supplier created | number of suppliers after filter <= total of suppliers<br>all suppliers in list contains value of filter |
| reset filter | number of suppliers after reset = total of suppliers |
| filter supplier by number of products = 0 | number of suppliers after filter <= total of suppliers<br>all suppliers in list contains value of filter |
| reset filter | number of suppliers after reset = total of suppliers |
| filter supplier by enabled value = 'Yes' | number of suppliers after filter <= total of suppliers<br>all suppliers in list contains value of filter 'check' |
| reset filter | number of suppliers after reset = total of suppliers |
| Scenario 3 : Quick edit Supplier |  |
| filter supplier by name of first supplier created | number of suppliers after filter <= total of suppliers<br>all suppliers in list contains value of filter |
| disable first supplier in list | check value of column enabled 'clear' |
| enable first supplier in list | check value of column enabled 'check' |
| reset filter | number of suppliers after reset = total of suppliers |
| Scenario 4: Enable, disable and delete with bulk actions |  |
| disable all suppliers with bulk actions | all suppliers are disabled<br>check value of column enabled of all rows 'clear' |
| enable all suppliers with bulk actions | all suppliers are enabled<br>check value of column enabled of all rows 'check' |
| delete all suppliers with bulk actions | successful multi deletion message is displayed<br>supplier grid is not displayed |
