---
title: "Categories - CRUD"
weight: 5
---

# Categories - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8555
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/WS/05_categoriesCRUD.ts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request with method *GET* and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/categories?schema=*blank*|http://domain.tld/api/countries?schema=blank] | The response HTTP Code is 200.<br>The XML is valid.<br>The XML code has a *prestashop* root node<br>The root node has a *category* node<br>The *category* node has children nodes which are empty and without attributes |
| Request with method *GET* and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/categories?schema=*synopsis*|http://domain.tld/api/countries?schema=synopsis] | The response HTTP Code is 200.<br>The XML is valid.<br>The XML code has a prestashop root node<br>The root node has a *category* node<br>The *category* node has children nodes which are empty and more than last attribute including  (<br><br>'format', 'readOnly', 'read_only', 'notFilterable', 'required') |
| Request with method *GET* and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/categories|http://domain.tld/api/countries] | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a *category* node<br>The *categories* node has children nodes named country with not empty attributes id (numeric), and xlink:href (string) |
| Request with method *POST* and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/categories|http://domain.tld/api/countries] with body (next cell) | The response HTTP Code is 201<br>The XML code has a prestashop root node<br>The root node has a *category* node.<br>The *category* node has a children node named id with an integer |
| Request with method *GET* and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/categories/\|http://domain.tld/api/countries/]<br><br>{fetchedId} | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a *category* node.<br>All nodes have same data like in post data |
| Go to  BO > Catalog > Categories page | Categories page is displayed correctly |
| Filter the colum ID with the value \{fetchedid} and click on search button | The number of filtered row = 1 |
| Click on edit button | The category page is displayed correctly |
| Check the value of each field on the form and the XML value in english and french<br>name<br><br>description<br><br>meta title<br><br> <br><br>meta description | All values are consistent |
| Go back to categories page and reset filters |  |
| Request with method *PUT* and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/categories|http://domain.tld/api/countries]/\{fetchedId} with body (next cell) | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a country node.<br>The country node has a children node named id with an integer |
| Request with method *GET* and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/categories/\|http://domain.tld/api/countries/]<br><br>{fetchedId} | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a category node.<br>All nodes have same data like in post data |
| in Categories page > Filter the column “ID” with value \{fetchedId} and click on the button Search | The number of filtered rows is equal to 1 |
| Click on Edit button at the end of the row | Edit Category Page is displayed correctly |
| Check the consistency of each following field on the form and the XML Value: <br> * Name in English<br> * Name in French <br> * Description in English <br> * Description in Frensh<br> * Meta title in Englich<br> * Meta title in Frensh<br> * Active<br> * Meta description in English<br> * Meta description in French | Alls values are consistent |
| Go back to categories page and reset filters | Filters are reset |
| Request with method *DELETE* and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/c|http://domain.tld/api/countries]ategories/\{fetchedId} | The response HTTP Code is 200 |
| Request with method *GET* and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/categories/\|http://domain.tld/api/countries/]<br><br>{fetchedId} | The response HTTP Code is 404 |
| Filter the column “ID” with value \{fetchedId} and click on the button Search | The number of filtered rows is equal to 0. |
| Reset filters | Filters are reset |
| In BO, Go to Advanced Parameters > Webservice | Webservice Page is displayed correctly |
| Filter the field "Key" with value XXXX and click on the button Search | The number of filtered rows is equal to 1 |
| On the first row, click on the button "Three points" | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Delete Button in the modal | The message "Successful deletion" is displayed<br>The number of filtered rows is equal to 0. |
| Reset filters | No record founds is displayed |
| In BO, Go to Advanced Parameters > Webservice | Webservice Page is displayed correctly |
| Set unchecked the checkbox “Enable PrestaShop's webservice” | The checkbox “Enable PrestaShop's webservice” is not checked |
| Click on Save button | The message “Update successful” is displayed |
