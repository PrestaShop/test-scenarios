---
title: "BO - Catalog - Suppliers - CRUD"
weight: 1
---

# BO - Catalog - Suppliers - CRUD
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-823
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/05_brandsAndSuppliers/suppliers/01_CRUDSupplier.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/brands-and-suppliers/edit-add-supplier

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go BO > Catalog > Brands & Suppliers > Suppliers page | The Suppliers page is well displayed |
| Click on "Add new Supplier" button | Add new supplier page is displayed <br>Title contains 'Add new' |
| Set the form fields with the following Data > Save | An alert "Successful creation." is displayed<br><br>See that the column Number of products = 0 |
| Filter by Name (Created Supplier) | Number suppliers < Total suppliers & the list contains the searched Name |
| Click on "View" supplier created | View page is displayed <br>Title = name of supplier created |
| Return to suppliers page | Suppliers page is displayed <br>Title contains Suppliers |
| Edit the searched supplier | Edit page is displayed <br>Title contains 'Edit:' |
| Set the form fields with the following Data > Save | The supplier is updated and the green alert "Successful update." is displayed<br><br>See that the column Number of products = 0 |
| Reset Filter | Number of suppliers = Total suppliers |
| Filter by Name (Edited Supplier) | Number of suppliers < Total suppliers<br><br>The list contains the searched name |
| View edited supplier | View page is displayed <br>Title = Name of edited supplier |
| Return to suppliers page | Suppliers page is displayed <br>Title contains suppliers |
| Delete supplier created > confirm the deletion | The successful message "Successful deletion." is displayed |
| Reset Filter | Number Suppliers = Total Suppliers |
