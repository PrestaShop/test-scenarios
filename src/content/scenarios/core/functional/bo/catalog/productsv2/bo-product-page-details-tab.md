---
title: "BO - Product Page - Details Tab"
weight: 14
---

# BO - Product Page - Details Tab
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-5213
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/01_products/14_detailsTab.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/products

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > New product > Standard product > Add new product | Product creation page is well displayed |
| Add a title to your product > Switch to Online > Click Save | Successful update message is displayed |
| Go to Tab Details > Add References > Click Save and publish | Tab Details is red<br><br>For UPC barcode, GTIN (EAN, JA, ITF or UCC code), ISBN there's a error message:<br>"lorem ipsum" is invalid |
| Edit the References with new data > Click Save and publish | Successful update message is displayed |
| Edit the References with new data > Click Save and publish | Successful update message is displayed |
| In Features > Add 2 features > Save and publish | Successful update message is displayed<br><br>My 2 features are well updated.<br><br>My Customized Feature "Lorem Ipsum" is well displayed in FO > Product page > Product details |
| Click to "Manage Feature" button | Feature page is well displayed |
| Return to your details product page<br><br>BO > Catalog > Product > "Your Product" > Details | Details page is well displayed |
| In Features :<br> * Remove 1 feature<br> * Add 2 new features<br><br>Click on "Save and publish" | Successful update message is displayed<br><br>My 4 features are present.<br><br>In FO,  my features are well displayed in FO > Product page > Product details |
| Return to your details product page<br><br>BO > Catalog > Product > "Your Product" > Details | Details page is well displayed |
| Add a feature with customized value and click to "Add a feature" | Feature added to feature table |
| Click to "Save and publish" | Details tabs is written in red<br><br>Error message : "The field "Custom value" is required at least in your default language." |
| Delete both of the Features with trash icon > Delete > Save and publish | Successful update message is displayed<br><br>In FO > data sheet is empty in product page |
| In Attached files > Click on Manage all files | A new tab in opened for Catalog > Files page<br><br>No files exists |
| Search file "hello world" | No results found for "hello world" |
| Click Add new file > Fill fields > Click Save | The file was successfully added. alert is displayed<br><br>A new file is available in the product |
| Click the cross to delete the file > Confirm deletion | Message No files attached is displayed |
| Enable Display condition on product page > Choose Used in dropdown > Click Save and publish | Successful update message is displayed<br><br>In FO, in product page > Product Details > See Condition Used |
| In Customization > Click Add 4 customization fields > Save and publish | Successful update message is displayed<br><br>In FO, see 4 customization fields |
| Click the cross to delete the file > Confirm deletion |  |
