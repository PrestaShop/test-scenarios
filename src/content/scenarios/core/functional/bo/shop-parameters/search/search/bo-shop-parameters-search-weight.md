---
title: "BO - Shop Parameters - Search - Weight"
weight: 5
---

# BO - Shop Parameters - Search - Weight
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1129
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/07_search/01_search/05_weight.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/search

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Scroll down to block Weight | See the weight of all elements are already set.<br><br>Product name weight: 6<br>Reference weight: 10<br>Short description weight: 1<br>Description weight: 1<br>Category weight: 3<br>Brand weight: 3<br>Tags weight: 4<br>Attributes weight: 2<br>Features weight: 2 |
| Go to BO > Catalog > Categories > Click Add new category > Add Name = preston > Save | Successful creation message is displayed |
| Go to BO > Catalog > Brands & Suppliers >. Click Add new brand > Add Name = preston > Save | Successful creation message is displayed |
| Go to BO > Catalog > Attributes & Features > Click Add new attribute > Add Name = preston > Add Public name = Preston > Save | Successful creation message is displayed |
| View preston attribute > Add new value > Name = preston > Save | Successful creation message is displayed |
| Go to BO > Catalog > Attributes & Features > Go to tab Features > Click Add new feature > Add Name = preston > Save | Successful creation message is displayed |
| Created this step because of : https://github.com/PrestaShop/PrestaShop/issues/37285<br><br>Add a new feature value > Feature = preston > Value : preston > Save | Successful creation message is displayed |
| Create 9 standard products using the pre-condition | All 9 products are created with "preston" at different places |
| Go to BO > Shop Parameters > Search > Click on Re-build the entire index | Successful update message displayed |
| Go to FO > Search "preston" | There are 9 products. |
| Go to BO > Shop parameters > Scroll down to block Weight > Set the Weight for all elements > Save | The settings have been successfully updated. |
| Click on Re-build the entire index | Successful update message displayed |
| View my store > Hard refresh and clear cache from shop > Search for "preston" | There are 9 products. |
| Open the first product | See in Product Details block : Datasheet -> preston/preston<br>It matches with the Feature weight : 9 |
| Open the 5th product | See in the breadcrumb : Home > Preston > my_product<br>It matches with the Category weight : 5 |
| Open the last product | See the name of the product is "preston"<br>It matches wit the Product name weight : 1 |
| Go to BO > Shop parameters > Scroll down to block Weight > Set the Weight for all elements > Save | The settings have been successfully updated. |
| Click on Re-build the entire index | Successful update message displayed |
| View my store > Hard refresh and clear cache from shop > Search for "preston" | There are 9 products. |
| Open the first product | See the name of the product is "preston"<br>It matches wit the Product name weight : 9 |
| Open the 2nd product | See in Product Details block : Reference -> preston<br>It matches with the Reference weight : 8 |
| Open the 8th product | See that it is a combination product with Attribute preston<br>it matches with the Attributes weight : 2 |
| Go to BO > Shop parameters > Scroll down to block Weight > Edit the Weight for Product name weight > Save | Successful update message is displayed |
| Click on Re-build the entire index | Successful update message displayed |
| View my store > Hard refresh and clear cache from shop > Search for "preston" | There are 8 products.<br>None of the product have "preston" in their name |
| Go to BO > Catalog > Products > Delete all 9 products created for the test | All 9 products are deleted |
| Go to BO > Shop parameters > Scroll down to block Weight > Edit the weight of all elements > Save | The settings have been successfully updated. |
