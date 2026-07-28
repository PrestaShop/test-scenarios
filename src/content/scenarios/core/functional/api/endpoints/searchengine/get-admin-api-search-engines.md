---
title: "GET /admin-api/search-engines"
weight: 1
---

# GET /admin-api/search-engines
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.2.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12908
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/searchEngine/05_getSearchEngines.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Return to BO > Advanced Parameters > Authorization Server and get the ID of the first row | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| Request with method GET the endpoint "https://[url of your shop]/admin-api/search-engines" | The return value is in JSON.<br><br>The return data has multiples keys : "totalItems", "orderBy", "sortOrder", "limit", "filters","items"<br><br>The key "items" has multiples values.<br><br>Each value has multiples keys : "queryKey", "searchEngineId", "server" |
| Login in BO with default customer | The dashboard page is displayed |
| Go to 'Shop Parameters > Traffic & SEO' page | Traffic & SEO page is displayed correctly |
| Click on the Search Engines tab | Search Engines page is displayed correctly |
| Reset all filters and get the number of search engines | All filters are reset. <br>All search engines are displayed.<br>Fetch the ID of the first row. |
| Filter each search engine in the list by the search engine ID from the jsonResponse | 1 record found.<br><br>Check that the JSON Response has the same data in the BackOffice :<br> * searchEngineId<br> * queryKey<br> * server |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
