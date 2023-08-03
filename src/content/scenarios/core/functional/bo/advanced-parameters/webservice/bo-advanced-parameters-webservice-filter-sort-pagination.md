---
title: "BO - Advanced Parameters - Webservice - Filter sort pagination"
weight: 1
---

# BO - Advanced Parameters - Webservice - Filter sort pagination
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1176

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Advanced Parameters >Webservice | Webservice  page is well displayed<br><br>the Webservice  table is empty  = 0 |
| Go to Advanced Parameters >Webservice | Webservice  page is well displayed<br><br>the Webservice  table is empty  = 0 |
| Click on "Add new webservice key " | new page "webservice Accounts will display |
| fill the blanks with the data > click on save | Webservice  page is well displayed<br><br>Successful message is displayed .<br><br>the Webservice  table  +1 |
| click on the pencil icon > Edit> change some data >Save | succesful message is displayed "Successful update"<br><br>the informations of the webservice created  are updated |
| Click on the dropdown -toggle > Delete | Modale confirmation displayed :<br><br> <br>h4. Delete selection<br>Are you sure you want to delete the selected item(s)?<br><br>Two buttons : "Cancel" and "Delete" |
| Click on Delete | successful message is displayed "Successful deletion"<br><br>the Webservice  table =0 |
| create 20 new Webservice | Webservice page is well displayed<br><br>the webservice table  = 20 |
| Reset all filters | All filters are reset , all the webservice are  displayed |
| Filter by key | list is filtered by  key = JYGPBFGYHXAP3J6BV42C27ABLW7XJC1P |
| Reset all filters | All filters are reset , all the webservice are  displayed |
| Filter by  Key description | list is filtered by  key description  = "it's just allowed for admin" |
| Reset all filters | All filters are reset , all the webservice are  displayed |
| Filter by status YES | list is filtred by status  enabled ' YES ' |
| Reset all filters | All filters are reset , all the webservice are  displayed |
| Filter by status 'NO' | list is filtred by status 'NO ' |
| Reset all filters | All filters are reset , all the webservice are  displayed |
| Sort webservice by key 'ASC ' | the webservices are sorted by KEY (1 -> 2 -> 3...)   / (A -> B -> C... ) |
| Sort webservice by key 'DESC ' | the webservices are sorted by KEY (3-> 2 -> 1...)   / (C -> B -> A... ) |
| Sort webservice by status 'ASC' | the webservices are sorted by status [ 'yes'....'no'] |
| Sort  webervice by status 'DESC' | the webservices are sorted by status [ 'no'....'yes'] |
| Change the items number to 10 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 1)_ |
