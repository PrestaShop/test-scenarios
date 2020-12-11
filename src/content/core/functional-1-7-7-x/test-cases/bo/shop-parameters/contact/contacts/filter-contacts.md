---
title: Filter Contacts
weight: 1
---

## Preconditions

PrestaShop installed\
Login with admin BO account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Shop parameters>Contact' page | title contains 'Contacts' |
| reset filter | Total of contacts > 0 |
| filter by 'id_contact' '2' | Number of contacts < total of contacts<br>all rows column 'id_contact' contains '2' |
| reset filter | Number of contacts after reset = total of contacts |
| filter by 'name' 'Customer service' | Number of contacts < total of contacts<br>all rows column 'name' contains 'Customer service' |
| reset filter | Number of contacts after reset = total of contacts |
| filter by 'email' 'demo@prestashop.com' | Number of contacts < total of contacts<br>all rows column 'email' contains 'demo@prestashop.com' |
| reset filter | Number of contacts after reset = total of contacts |
| filter by 'description' 'For any question about a product, an order' | Number of contacts < total of contacts<br>all rows column 'description' contains 'For any question about a product, an order' |
| reset filter | Number of contacts after reset = total of contacts |
