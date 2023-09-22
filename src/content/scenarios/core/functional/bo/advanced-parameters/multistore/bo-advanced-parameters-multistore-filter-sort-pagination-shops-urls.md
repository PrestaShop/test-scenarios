---
title: "BO - Advanced Parameters - Multistore - Filter sort pagination shops URLs"
weight: 5
---

# BO - Advanced Parameters - Multistore - Filter sort pagination shops URLs
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1186

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Advanced Parameters >Multistore | Multistore page opens with 3 blocks : <br> * Multistore tree <br> * Multistore list <br> * Multistore options |
| Create 3 shops | * the content is updated .<br> * the three shops are well displayed in the list |
| Click on " Click here to set a URL for this shop " for the shop 1 | a new page is well displayed with 3 blocks : <br> * Multistore tree <br> * URL options <br> * Store URL |
| fill the virtual URL of the shop | Succesfull massage =" Successful creation "<br><br>the page of the shop is displayed with this contents :<br> * Store URL ID =1<br> * Store name :shop1<br> *  URL :" domaine/shop1/ "<br> * Is it the main URL? :YES <br> * Enabled : YES |
| Click on " Click here to set a URL for this shop " for the shop 2 | a new page is well displayed with 3 blocks : <br> * Multistore tree <br> * URL options <br> * Store URL |
| fill the virtual URL of the shop | Succesfull massage =" Successful creation "<br><br>the page of the shop is displayed with this contents :<br> * Store URL ID =2<br> * Store name :shop2<br> *  URL :" domaine/shop2/ "<br> * Is it the main URL? :YES <br> * Enabled : YES |
| Click on " Click here to set a URL for this shop " for the shop 3 | a new page is well displayed with 3 blocks : <br> * Multistore tree <br> * URL options <br> * Store URL |
| fill the virtual URL of the shop | Succesfull massage =" Successful creation "<br><br>the page of the shop is displayed with this contents :<br> * Store URL ID =3<br> * Store name :shop3<br> *  URL :" domaine/shop3/ "<br> * Is it the main URL? :YES <br> * Enabled : YES |
| Create   18 shops | * the content is updated .<br> * there are 21 shops |
| reset all filters | Number of Shops =21 |
| filter by  Main URL for this shop  : shop2 | Number of Store< Total of Store<br>The Main URL for this shop result is equal to the searched Main URL for this shop = "  domaine/shop2/ " |
| reset all filters | Number of Shops =21 |
| filter by store group : Default | Number of Store< Total of Store<br>The  store group name  result is equal to the searched store group name. |
| reset all filters | Number of Shops =21 |
| Sort by Main URL for this shop ASC | The Stores  are sorted by Main URL for this shop ASC |
| Sort by Main URL for this shop  DESC | The Stores are sorted by Main URL for this shop  DESC |
| reset all filters and get the number of all Shop  created | Number of Store  =21 |
| Change "items per page" to 20 | Page reloads with 20 items on the first page<br><br>there is only one page 1/2<br><br>The number of pages is correct |
| Click on the next button | The next page is well displayed and check (page 2 / *2*) is correct |
| Click on Previous button | The first page is well displayed |
| Change "items per page" to 50 | Page reloads with 50 items on the first page<br><br>there is only one page 1/1<br><br>The number of pages is correct |
