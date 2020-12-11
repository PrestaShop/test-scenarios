---
title: Filter Seo Pages
weight: 1
---

## Preconditions

PrestaShop installed\
Login with admin BO account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to 'Shop parameters > SEO and Urls' page | Page title contains 'SEO & URLs' |
| reset all filters and get number of SEO pages in BO | Total of Seo pages > 0 |
| Filter table by id '3' | Number of Seo Pages after filter < Total of Seo pages<br>All rows column 'id' contains '3' |
| reset filters | Number of Seo pages after reset = total of seo pages |
| Filter table by page 'contact' | Number of Seo Pages after filter < Total of Seo pages<br>All rows column 'page' contains 'contact' |
|  | Number of Seo pages after reset = total of seo pages |
| Filter table by title 'Contact us' | Number of Seo Pages after fiContact uslter < Total of Seo pages<br>All rows column 'title' contains '' |
|  | Number of Seo pages after reset = total of seo pages |
| Filter table by url rewrite 'contact-us' | Number of Seo Pages after filter < Total of Seo pages<br>All rows column 'url rewrite' contains 'contact-us' |
|  | Number of Seo pages after reset = total of seo pages |
