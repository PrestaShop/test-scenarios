---
title: "BO - Catalog price Rules - CRUD - Reduction type"
weight: 9
---

# BO - Catalog price Rules - CRUD - Reduction type
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-10336

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts > Catalog Price Rules tab | Catalog Price Rules page is well displayed |
| Click on "Add new catalog price rule" button | The Add new Catalog Price Rules page is displayed |
| Set the fields > Click on "Save" | The catalog price rule is well created and a green alert "Successful creation" is displayed |
| Go to FO and check out the catalog | Where we have a €20 discount on products. |
| Go back to BO > Discount > Catalog Price Rules> Edit Catalog Price Rules > Tax included | We have a message :" Successful update" |
| Go to FO and check out the catalog | Where we have a 20€ discount on products. |
| Go back to BO > Discount > Catalog Price Rules> Edit Catalog Price Rules | We have a message :" Successful update" |
| Go to FO and check out the catalog | Where we have a 20% discount on products. |
| Go back to BO > Discount > Catalog Price Rules> Edit Catalog Price Rules > Tax included | We have a message :" Successful update" |
| Go to FO and check out the catalog | Where we have a 20% discount on products. |
| Go back to BO > Delete your catalog price rule > Yes | The catalog price rule is well deleted and a green alert "Successful deletion" is displayed |
