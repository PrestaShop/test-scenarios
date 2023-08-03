---
title: "BO - SEO Tab"
weight: 21
---

# BO - SEO Tab
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-5217

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > New product > Standard product > Add new product | Product creation page is well displayed |
| Add a title to your product > Switch to Online > Click Save | Successful update message is displayed |
| Click on SEO tab  > Fill all fields > Click on Save and publish | * SEO tab is red<br> * Friendly URL field is red<br> * Error message : "lorem ipsum" is invalid - Language: English (English) is displayed |
| Edit Friendly URL > Save and publish | Successful update message is displayed |
| Click on button Reset URL > Save and publish | Successful update message is displayed<br><br>The URL is reset to the original one |
| Switch product status to Offline > Save and publish | Successful update message is displayed |
| In block Redirection page > Use dropdown to choose "Permanent redirection to a category (301)" > Choose "Home accessories" for Target category > Save and publish > Preview | In BO, Successful update message is displayed<br><br>In FO, Category Home accessories is displayed |
| Go back to BO > In block Redirection page > Use dropdown to choose "Permanent redirection to a product (301)" > Choose "Hummingbird printed t-shirt" for Target category > Save and publish > Preview | In BO, Successful update message is displayed<br><br>In FO, Product Hummingbird printed t-shirt is displayed |
| In block Tags > Save and publish > Preview | Product page in FO is open > Click on related category in breadcrumb > See Tag in left column |
