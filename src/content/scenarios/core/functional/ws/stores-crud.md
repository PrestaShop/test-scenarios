---
title: "Stores : CRUD"
weight: 4
---

# Stores : CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7447
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/WS/04_storesCRUD.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/stores?schema=blank|http://domain.tld/api/countries?schema=blank] | The response HTTP Code is 200.<br>The XML is valid.<br>The XML code has a *prestashop* root node<br>The root node has a *store* node<br>The *store* node has children nodes which are empty and without attributes |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/stores?schema=synopsis|http://domain.tld/api/countries?schema=synopsis] | The response HTTP Code is 200.<br>The XML is valid.<br>The XML code has a prestashop root node<br>The root node has a *store* node<br>The *store* node has children nodes which are empty and more than one attribute including one named format. |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/stores|http://domain.tld/api/countries] | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a *stores* node<br>The *stores* node has children nodes named country with not empty attributes id (numeric), and xlink:href (string) |
| Request with method POST and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/|http://domain.tld/api/countries]stores with body (next cell) | The response HTTP Code is 201<br>The XML code has a prestashop root node<br>The root node has a *store* node.<br>The *store* node has a children node named id with an integer |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/stores/|http://domain.tld/api/countries/]{fetchedId} | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a *store* node.<br>All nodes have same data like in post data |
| In BO, Go to Shop Parameters > Contacts | Contacts Page is displayed correctly. |
| Click on Stores Tab | Stores Page is displayed correctly |
| Filter the column “ID” with value \{fetchedId} and click on the button Search | The number of filtered rows is equal to 1. |
| Click on Edit button at the end of the row | Edit Store Page is displayed correctly |
| |Check the consistency of each following field on the form and the XML Value:<br> * Name<br> * Address <br> * Address (2)<br> * Zip/Postal code<br> * City<br> * Country<br> * State<br> * Latitude / Longitude<br> * Phone<br> * Fax<br> * Email address<br> * Note<br> * Active<br> * Picture<br> * Hours| | Alls values are consistent |
| Reset filters | Filters are reset |
| Request with method PUT and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/|http://domain.tld/api/countries]stores/\{fetchedId} with body (next cell) | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a *store* node.<br>The *store* node has a children node named id with an integer |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/stores/|http://domain.tld/api/countries/]{fetchedId} | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a *store* node.<br>All nodes have same data like in post data |
| Filter the column “ID” with value \{fetchedId} and click on the button Search | The number of filtered rows is equal to 1 |
| Click on Edit button at the end of the row | Edit Store Page is displayed correctly |
| Check the consistency of each following field on the form and the XML Value: <br> * Name<br> * Address <br> * Address (2)<br> * Zip/Postal code<br> * City<br> * Country<br> * State<br> * Latitude / Longitude<br> * Phone<br> * Fax<br> * Email address<br> * Note<br> * Active<br> * Picture<br> * Hours | Alls values are consistent |
| Reset filters | Filters are reset |
| Request with method DELETE and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/|http://domain.tld/api/countries]stores/\{fetchedId} | The response HTTP Code is 200 |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/stores/|http://domain.tld/api/countries/]{fetchedId} | The response HTTP Code is 404 |
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