---
title: "BO - Shop Parameters - Contacts - Filter"
weight: 1
---

# BO - Shop Parameters - Contacts - Filter
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1095

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Contact > Contact tab | Contacts page is well displayed |
| Filter by id_contact = 2 > Click Search | Number of contacts < total of contacts<br><br>All rows column 'id_contact' contains '2' |
| Click on Reset | Filter is reset<br><br>Number of contacts after reset = total of contacts |
| Filter by Title = Customer service | Number of contacts < total of contacts<br><br>All rows column 'Title' contains 'Customer service' |
| Click on Reset | Filter is reset<br><br>Number of contacts after reset = total of contacts |
| Filter by email = demo@prestashop.com | Number of contacts < total of contacts<br><br>All rows column 'email' contains 'demo@prestashop.com' |
| Click on Reset | Filter is reset<br><br>Number of contacts after reset = total of contacts |
| Filter by description = For any question about a product, an order | Number of contacts < total of contacts<br><br>All rows column 'description' contains 'For any question about a product, an order' |
| Click on Reset | Filter is reset<br><br>Number of contacts after reset = total of contacts |
