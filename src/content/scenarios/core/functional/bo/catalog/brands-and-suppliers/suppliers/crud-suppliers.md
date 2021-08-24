---
title: "CRUD Suppliers"
weight: 1
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go BO > Catalog > Brands & Suppliers >Suppliers page | The Suppliers page is well displayed |
| Click on "Add new Supplier" button | new supplier page is displayed <br>title contains 'add new' |
| Set these fields<br> # Name : random company name from faker<br> # description : random lorem sentence from faker<br> # homePhone : random phone from faker with format 01########<br> # mobilePhone : random phone from faker with format 06########<br> # address : random address from faker<br> # secondaryAddress : random secondaryAddress from faker<br> # postalCode : random zip code from faker<br> # city : random city from faker<br> # country : random country between ['France', 'Netherlands', 'United Kingdom', 'Germany'] (united states must be added to test bug with state input)<br> # logo : generated in test<br> # metatitle : name of supplier<br> # metadescription : random lorem sentence drom faker<br> # metaKewords : array of 2 lorem word from faker<br> # enabled : true by default<br> # products : number = 0 and click on Save | An alert "Successful creation." is displayed |
| Filter by Name (Created Supplier) | Number suppliers < Total suppliers & the list contains the searched Name |
| Click on "View" supplier created | View page is displayed <br>title = name of supplier created |
| return to suppliers page | suppliers page is displayed <br>title contains suppliers |
| Edit the searched supplier | edit page is displayed <br>title contains 'edit:' |
| Set these fields:<br> # Name : random company name from faker<br> # description : random lorem sentence from faker<br> # homePhone : random phone from faker with format 01########<br> # mobilePhone : random phone from faker with format 06########<br> # address : random address from faker<br> # secondaryAddress : random secondaryAddress from faker<br> # postalCode : random zip code from faker<br> # city : random city from faker<br> # country : random country between ['France', 'Netherlands', 'United Kingdom', 'Germany'] (united states must be added to test bug with state input)<br> # logo : generated in test<br> # metatitle : name of supplier<br> # metadescription : random lorem sentence from faker<br> # metaKewords : array of 2 lorem word from faker<br> # enabled : true by default<br> # products : number = 0 and click on Save | The supplier is updated and the green alert "Successful update." is displayed |
| Reset Filter | Number of suppliers = Total suppliers |
| Filter by Name (Edited Supplier) | Number of suppliers < Total suppliers and the list contains the searched name |
| view edited supplier | view page is displayed <br>title = name of edited supplier |
| return to suppliers page | suppliers page is displayed <br>title contains suppliers |
| delete supplier created and confirm the deletion | The successful message "Successful deletion." is displayed |
| Rest Filter | Number Suppliers = Total Suppliers |
