---
title: "BO - SEO Tab"
weight: 18
---

# BO - SEO Tab
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-5217
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/18_seoTab.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > New product > Standard product > Add new product | Product creation page is well displayed |
| Add a title to your product > Switch to Online > Click Save | Successful update message is displayed |
| Click on SEO tab  > Fill all fields > Click on Save and publish | * SEO tab is red<br> * Friendly URL field is red<br> * Error message : "lorem ipsum" is invalid - Language: English (English) is displayed |
| Edit Friendly URL > Save and publish | Successful update message is displayed |
| Click on button Generate URL from name > Save and publish | Successful update message is displayed<br><br>The URL is reset to the original one |
| Switch product status to Offline > Save and publish | Successful update message is displayed |
| Go back to BO > In block Redirection page > Use dropdown to choose "Permanent redirection to a product (301)" > Choose "Hummingbird printed t-shirt" for Target product > Save and publish > Preview | In BO, Successful update message is displayed<br><br>In FO, The new product is displayed (because it is disabled) |
| In block Redirection page > Use dropdown to choose "Permanent redirection to a category (301)" > Choose "Home accessories" for Target category > Save and publish > Preview | In BO, Successful update message is displayed<br><br>In FO, see the banner "This product is not visible to your customers." on top of the product page |
| Go back to BO > In block Redirection page > Use dropdown to choose "Permanent redirection to a product (301)" > Choose "Hummingbird printed t-shirt" for Target product > Save and publish > Preview | In BO, Successful update message is displayed<br><br>In FO, Product Hummingbird printed t-shirt is displayed |
| In block Tags > Add a tag "hello" > Save and publish > View my store > Search "hello" in searchbar | All the products are displayed |
| Switch product status to Online > Save and publish | Successful update message is displayed |
| In block Tags > Add a tag "hello" > Save and publish > View my store > Search "hello" in searchbar | Only the product you created with Tag:hello is displayed in the search results |
