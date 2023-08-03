---
title: "BO - Shop Parameters - SEO & URLs - CRUD SEO page"
weight: 2
---

# BO - Shop Parameters - SEO & URLs - CRUD SEO page
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1106

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Shop parameters > SEO and Urls' page | Title contains 'SEO & URLs' |
| reset filters | Total of Seo pages > 0 |
| Go to new Seo URL page | Title contains 'SEO & URLs •' |
| Create new Seo URL | Successful message is displayed <br>number of Seo pages = Total of Seo pages + 1 |
| filter by seo page name = "order-return" | At least one Seo Page is displayed<br>first row column page name contain 'order-return' |
| Click on edit first seo page in table | title contains 'SEO & URLs' |
| Edit SEO URL | Successful message is displayed |
| reset filter | number of Seo pages = Total of Seo pages + 1 |
| filter by seo page name ='pdf-order-return' | At least one Seo Page is displayed<br>first row column page name contain 'pdf-order-return' |
| Click on delete first row in table | Successful message is displayed |
| reset filter | number of Seo pages = Total of Seo pages |
