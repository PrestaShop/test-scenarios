---
title: "BO - Shop Parameters - SEO & URLs - CRUD SEO page"
weight: 2
---

# BO - Shop Parameters - SEO & URLs - CRUD SEO page
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1106

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Shop parameters > SEO and Urls' page | Title contains 'SEO & URLs' |
| reset filters | Total of Seo pages > 0 |
| Clic to Set up a new page button | Title contains 'New page configuration' |
| Fill the form and save | Successful message is displayed <br>number of Seo pages = Total of Seo pages + 1 |
| filter by seo page name = "order-return" | At least one Seo Page is displayed<br>first row column page name contain 'order-return' |
| Click on edit first seo page in table | title contains 'Editing configuration for order-return' |
| Edit SEO URL | Successful message is displayed |
| reset filter | number of Seo pages = Total of Seo pages + 1 |
| filter by seo page name ='pdf-order-return' | At least one Seo Page is displayed<br>first row column page name contain 'pdf-order-return' |
| Click on delete first row in table | Are you sure you want to delete the selected item(s)? Modale |
| Click on delete | Successful deletion message is displayed |
| reset filter | number of Seo pages = Total of Seo pages |
