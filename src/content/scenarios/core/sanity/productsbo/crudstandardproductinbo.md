---
title: "CRUDStandardProductInBO"
weight: 2
---

# CRUDStandardProductInBO
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1336
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/03_productsBO/02_CRUDStandardProduct.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Catalog > Products" page" | The Products page is displayed correctly |
| Reset all filters | All filters are reset. All products are displayed |
| Save the numbers of products in a variable | Number of products is saved |
| Click on New product" | New product page is displayed correctly |
| Fill all the informations: - name random - description random - reference random - quantity random between 1 and 9 - quantity wanted 1 - price random between 10 and 20 - product online Click on Save" | Data is filled properly. Product is saved correctly |
| Click on Preview". Check all data is correct on the preview" | New tab is opened to show the product in FO. Product is displayed correctly. Data is correct on the preview in FO |
| Edit the product by changing every data. Click on Save" | Data is filled properly. Product is saved correctly |
| Click on Preview". Check all data is correct on the preview" | New tab is opened to show the product in FO. Product is displayed correctly. Data is correct on the preview in FO |
| Click on the delete button. Confirm action on the modal | Product is deleted correctly. Products page is displayed correctly. Number of products listed is equal to the value saved earlier |