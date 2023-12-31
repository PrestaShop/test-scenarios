---
title: "Products : CRUD"
weight: 2
---

# Products : CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7446
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/WS/03_productsCRUD.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/products?schema=blank|http://domain.tld/api/countries?schema=blank] | The response HTTP Code is 200.<br>The XML is valid.<br>The XML code has a *prestashop* root node<br>The root node has a *product* node<br>The *product* node has children nodes which are empty and without attributes |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/products?schema=synopsis|http://domain.tld/api/countries?schema=synopsis] | The response HTTP Code is 200.<br>The XML is valid.<br>The XML code has a prestashop root node<br>The root node has a *product* node<br>The *product* node has children nodes which are empty and more than one attribute including one named format. |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/products|http://domain.tld/api/countries] | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a *products* node<br>The *products* node has children nodes named *product* with not empty attributes id (numeric), and xlink:href (string) |
| Request with method POST and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/|http://domain.tld/api/countries]products with body (next cell) | The response HTTP Code is 201<br>The XML code has a prestashop root node<br>The root node has a country node.<br>The *product* node has a children node named id with an integer |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/products/|http://domain.tld/api/countries/]{fetchedId} | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a *product* node.<br>All nodes have same data like in post data |
| In BO, Go to Catalog > Products | Products Page is displayed correctly |
| Filter the column “ID” with value \{fetchedId} (for Min & Max) and click on the button Search | The number of filtered rows is equal to 1. |
| Click on Edit button at the end of the row | Edit Product Page is displayed correctly. |
| Check the consistency of each following field on the form and the XML Value: <br> * active<br> * product_type<br> * name (EN)<br> * name (FR)<br> * description_short (EN)<br> * description_short (FR)<br> * description (EN)<br> * description (FR)<br> * id_category_default<br> * id_manufacturer<br> * reference<br> * mpn<br> * upc<br> * ean13<br> * isbn<br> * show_condition<br> * condition<br> * minimal_quantity<br> * low_stock_threshold_enabled<br> * low_stock_threshold<br> * available_now (EN)<br> * available_now (FR)<br> * available_later (EN)<br> * available_later (FR)<br> * available_date<br> * width<br> * height<br> * depth<br> * weight<br> * additional_delivery_times<br> * delivery_in_stock (EN)<br> * delivery_in_stock (FR)<br> * delivery_out_stock (EN)<br> * delivery_out_stock (FR)<br> * additional_shipping_cost<br> * price<br> * id_tax_rules_group<br> * ecotax<br> * wholesale_price<br> * unit_price<br> * unity<br> * on_sale<br> * meta_title (EN)<br> * meta_title (FR)<br> * meta_description (EN)<br> * meta_description (FR)<br> * link_rewrite (EN)<br> * link_rewrite (FR)<br> * redirect_type<br> * id_type_redirected<br> * visibility<br> * available_for_order<br> * show_price<br> * online_only | Alls values are consistent |
| Reset filters | Filters are reset |
| Request with method PUT and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/|http://domain.tld/api/countries]products/\{fetchedId} with body (next cell) | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a *product* node.<br>The *product* node has a children node named id with an integer |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/products/|http://domain.tld/api/countries/]{fetchedId} | The response HTTP Code is 200<br>The XML code has a prestashop root node<br>The root node has a *product* node.<br>All nodes have same data like in post data |
| Filter the column “ID” with value \{fetchedId} (for Min & Max) and click on the button Search | The number of filtered rows is equal to 1 |
| Click on Edit button at the end of the row | Edit Page Page is displayed correctly. |
| Check the consistency of each following field on the form and the XML Value: <br> * active<br> * product_type<br> * name (EN)<br> * name (FR)<br> * description_short (EN)<br> * description_short (FR)<br> * description (EN)<br> * description (FR)<br> * id_category_default<br> * id_manufacturer<br> * reference<br> * mpn<br> * upc<br> * ean13<br> * isbn<br> * show_condition<br> * condition<br> * minimal_quantity<br> * low_stock_threshold_enabled<br> * low_stock_threshold<br> * available_now (EN)<br> * available_now (FR)<br> * available_later (EN)<br> * available_later (FR)<br> * available_date<br> * width<br> * height<br> * depth<br> * weight<br> * additional_delivery_times<br> * delivery_in_stock (EN)<br> * delivery_in_stock (FR)<br> * delivery_out_stock (EN)<br> * delivery_out_stock (FR)<br> * additional_shipping_cost<br> * price<br> * id_tax_rules_group<br> * ecotax<br> * wholesale_price<br> * unit_price<br> * unity<br> * on_sale<br> * meta_title (EN)<br> * meta_title (FR)<br> * meta_description (EN)<br> * meta_description (FR)<br> * link_rewrite (EN)<br> * link_rewrite (FR)<br> * redirect_type<br> * id_type_redirected<br> * visibility<br> * available_for_order<br> * show_price<br> * online_only | Alls values are consistent |
| Reset filters | Filters are reset |
| Request with method DELETE and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/|http://domain.tld/api/countries]products/\{fetchedId} | The response HTTP Code is 200 |
| Request with method GET and Basic Auth AAA_WSKEY_AAA the endpoint [http://domain.tld/api/products/|http://domain.tld/api/countries/]{fetchedId} | The response HTTP Code is 404 |
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
