---
title: "BO - International - Locations - Countries - CRUD"
weight: 2
---

# BO - International - Locations - Countries - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1014
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/02_locations/02_countries/02_CRUDCountry.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/locations/add-new-or-edit-country

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Locations > Tab Countries | The Countries page is displayed correctly |
| Click on Add new country | Add new Country Page is displayed correctly |
| Fill the required information with following data > Click on Save | See this warning :<br>There are 2 errors.<br> # This ISO code already exists.You cannot create two countries with the same ISO code.<br> # The call_prefix field is invalid. |
| Edit the required info > Click on Save | Message Successful creation is displayed<br><br>"my country" is displayed in the Countries list |
| Check the country number on top of the list | It is now : total country + 1 = 242 |
| Click on Edit on the latest Country created > Fill with the following info > Click on Save | Message Successful update is displayed |
| Filter by ISO code = "ZE" | Filter has succeeded<br><br>My country is displayed<br><br>The total country number on top of the list is now : 1 |
| *Pre-condition* : Create a Customer<br><br>In FO > Log into Customer account > In Homepage Customer account > Click on Add first Address > Fill all fields > Save | See in field Country : "my country" is available<br><br>Message Address successfully added. is displayed |
| Go back to BO > Check the Country > Bulk action > Disable selection | Message The status has been successfully updated. is displayed |
| In FO > Customer account > Addresses > Click on Update > Save | Can't save : the Country "my country" is not available |
| Select France > Save | Message Address successfully updated. is displayed |
| Go back to BO > Check again the Country > Bulk action > Delete selected > OK | Message The selection has been successfully deleted is displayed<br><br>No records found |
| Reset the filter | List of countries is displayed |
| Check the country number on top of the list | It is now : total country - 1 = 241 |
