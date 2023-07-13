---
title: "Countries : CRUD"
weight: 1
---

# Countries : CRUD
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint http://domain.tld/api/countries?schema=blank | The response HTTP Code is 200.<br>The XML is valid.<br>The XML code has a *prestashop* root node<br>The root node has a *country* node<br>The *country* node has children nodes which are empty and without attributes |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint http://domain.tld/api/countries?schema=synopsis | The response HTTP Code is 200.<br>The XML is valid.<br>The XML code has a prestashop root node<br>The root node has a country node<br>The country node has children nodes which are empty and more than one attribute including one named format. |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint http://domain.tld/api/countries | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a countries node<br>The countries node has children nodes named country with not empty attributes id (numeric), and xlink:href (string) |
| Request with method POST and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/countries] with body (next cell) | The response HTTP Code is 201<br>The XML code has a prestashop root node<br>The root node has a country node.<br>The country node has a children node named id with an integer |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint http://domain.tld/api/countries/\{fetchedId} | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a country node.<br>All nodes have same data like in post data |
| In BO, Go to International > Locations | Locations Page is displayed correctly. |
| Click on Countries Tab | Countries Page is displayed correctly |
| Filter the column “ID” with value \{fetchedId} and click on the button Search | The number of filtered rows is equal to 1. |
| Click on Edit button at the end of the row | Edit Country Page is displayed correctly |
| |Check the consistency of each following field on the form and the XML Value:  * Name in English<br> * Name in French <br> * Zone <br> * Currency<br> * Call Prefix<br> * ISO Code<br> * Active<br> * Contains States<br> * Do you need a tax identification number?<br> * ZIP/Postal code format<br> * Display tax label (e.g. "Tax incl.")| | Alls values are consistent |
| Reset filters | Filters are reset |
| Request with method PUT and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/countries]/\{fetchedId} with body (next cell) | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a country node.<br>The country node has a children node named id with an integer |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint http://domain.tld/api/countries/\{fetchedId} | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a country node.<br>All nodes have same data like in post data |
| Filter the column “ID” with value \{fetchedId} and click on the button Search | The number of filtered rows is equal to 1 |
| Click on Edit button at the end of the row | Edit Country Page is displayed correctly |
| Check the consistency of each following field on the form and the XML Value: <br> * Name in English<br> * Name in French <br> * Zone <br> * Currency<br> * Call Prefix<br> * ISO Code<br> * Active<br> * Contains States<br> * Do you need a tax identification number?<br> * ZIP/Postal code format<br> * Display tax label (e.g. "Tax incl.") | Alls values are consistent |
| Reset filters | Filters are reset |
| Request with method DELETE and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/countries]/\{fetchedId} | The response HTTP Code is 200 |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint http://domain.tld/api/countries/\{fetchedId} | The response HTTP Code is 404 |
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
