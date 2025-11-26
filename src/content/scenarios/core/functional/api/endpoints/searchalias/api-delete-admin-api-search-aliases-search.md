---
title: "API : DELETE /admin-api/search-aliases/{search}"
weight: 1
---

# API : DELETE /admin-api/search-aliases/{search}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12293
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/09_searchAlias/01_deleteSearchAliasesSearch.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| In BO, Go to Shop Parameters > Search | Search Page is displayed correctly. |
| Click on the Aliases page | Aliases Page is displayed correctly.<br><br>One record is displayed (the default). |
| Click on the button "Add new alias" | New API alias Page is displayed correctly |
| * Fill the form with fake data<br> * Click on "Save" button | The message “Successful creation.” is displayed<br><br>There is 2 records in the table. |
| Request with method DELETE the endpoint "https://[url of your shop]/admin-api/search-aliases/\{search}" with \{search} as search term of the created search alias | The HTTP code is 204. |
| Reload the page | Aliases Page is displayed correctly.<br><br>One record is displayed (the default). |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
