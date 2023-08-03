---
title: "DeleteProductWithBulkActions"
weight: 5
---

# DeleteProductWithBulkActions
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1339
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/03_productsBO/05_deleteProductsWithBulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the Catalog > Products" page" | Products page is displayed correctly |
| Reset all filters. Save number of products in a variable | All products are listed in the page |
| Click on New product". Create a simple product (check C4 step 5). Click on "Save" | Product is created correctly |
| Go to the Catalog > Products" page" | Products page is displayed correctly |
| Click on New product". Create a simple product (check C4 step 5). Give it a name with a part shared with the first product. Click on "Save" | Product is created correctly |
| Go to the Catalog > Products" page" | Products page is displayed correctly |
| Filter with reference. Criteria: parts of the name shared by the two products | Only two products are listed |
| Check both products. Click on Bulk Action > Delete | Both products are deleted |
| Reset all filters | All products are listed in the page. Total of products is lowered by two |
