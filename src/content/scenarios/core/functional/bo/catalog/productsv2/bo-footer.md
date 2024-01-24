---
title: "BO - Footer"
weight: 12
---

# BO - Footer
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-5208
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/09_footer.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Edit a standard product | Product page is well displayed |
| In Footer > Click on Duplicate > Confirm Duplication in Popup | Duplication of product has succeeded : copy of _product_ is displayed<br><br>Successful duplication message is displayed |
| Click on Preview | Product page in FO is displayed<br><br>Message "This product is not visible to your customers." is displayed |
| Go back to the product in BO and click on edit | Message "Successful update" is displayed |
| In Footer > Click on Delete > Confirm deletion | Message "Successful deletion" is displayed<br><br>List of product is displayed |
| Click on Go to catalog | List of products is well displayed |
