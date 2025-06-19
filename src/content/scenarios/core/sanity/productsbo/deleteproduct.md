---
title: "DeleteProduct"
weight: 4
---

# DeleteProduct
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1338
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/03_productsBO/05_deleteProduct.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Catalog > Products" page" | Products page is displayed correctly |
| Reset all filters. Save number of products in a variable | All products are listed in the page |
| Click on New product". Create a simple product (check [C4] step 5). Click on "Save" | Product is created correctly |
| Go to the Catalog > Products" page" | Products page is displayed correctly |
| Filter with reference. Criteria: reference of the product created earlier | Only one product is listed |
| Delete the product by using the dropdown. Confirm | Product is deleted correctly |
| Reset all filters | All products are listed in the page. Total of products is lowered by one |
