---
title: "CRUD Seo page"
weight: 2
---

# CRUD Seo page
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Shop parameters > SEO and Urls' page | Title contains 'SEO & URLs' |
| reset filters | Total of Seo pages > 0 |
| Go to new Seo URL page | Title contains 'SEO & URLs •' |
| Create new Seo URL <br>Criteria : <br>page: 'order-return'<br>title: 'Order return'<br>Fr title: same as title<br>metaDescription: lorem.sentence from faker<br>frMetaDescription: same as description<br>metaKeywords: 2 lorem.word from faker<br>frMetaKeywords: same as metaKeywords<br>friendlyUrl: 'order-return'<br>frFriendlyUrl: same as friendlyUrl | Successful message is displayed <br>number of Seo pages = Total of Seo pages + 1 |
| filter by seo page name | At least one Seo Page is displayed<br>first row column page name contain 'order-return' |
| Click on edit first seo page in table | title contains 'SEO & URLs' |
| Edit SEO URL <br>Criteria : <br>page: 'pdf-order-return'<br>title: 'Pdf Order return'<br>Fr title: same as title<br>metaDescription: lorem.sentence from faker<br>frMetaDescription: same as description<br>metaKeywords: 2 lorem.word from faker<br>frMetaKeywords: same as metaKeywords<br>friendlyUrl: 'pdf-order-return'<br>frFriendlyUrl: same as friendlyUrl | Successful message is displayed |
| reset filter | number of Seo pages = Total of Seo pages + 1 |
| filter by seo page name | At least one Seo Page is displayed<br>first row column page name contain 'pdf-order-return' |
| Click on delete first row in table | Successful message is displayed |
| reset filter | number of Seo pages = Total of Seo pages |
