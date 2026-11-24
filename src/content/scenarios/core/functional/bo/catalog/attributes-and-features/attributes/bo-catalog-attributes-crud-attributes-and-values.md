---
title: "BO - Catalog - Attributes - CRUD Attributes and Values"
weight: 6
---

# BO - Catalog - Attributes - CRUD Attributes and Values
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.7.x, 1.7.8.x, 8.0.x, 8.1.x, 9.0.x, 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7572
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/04_attributesAndFeatures/01_attributes/01_CRUDAttributesAndValues.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/attributes-and-features/attributes/edit-add-new-attribute-value

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Attributes page | The Attributes page is well displayed |
| Click on "Add new Attribute" button | The Add new attribute page is displayed |
| Set the fields > Click on "Save" | The attribute is well created and a green alert "Successful creation" is displayed |
| Click on "View" button of the last attribute created | The page title = Attribute Name |
| Click on "Add new value" button | The Values page is displayed and the "Attribute group = Attribute name" |
| Set the field "Value" > Click on "Save then add another value" | The "Add new value" page is displayed and the green alert "Successful creation" is displayed |
| Set the field Value > Click on "Save" | The Attributes page is displayed and the alert "Successful creation" is displayed |
| Edit the last attribute created | The title page = "Edit: Attribute name"<br><br>The page is well displayed |
| Update these fields > Click on "Save" | The Attributes page is displayed and the green alert "Successful update" is displayed |
| Click on the line of the last attribute updated | The page title = Attribute Name updated |
| Update Value field > Click "Save" | The green alert "Successful update" is dislayed |
| Delete the Value and confirm the deletion | The value is well deleted and the alert "Successful deletion" is displayed |
| Go to the Attributes page > delete the last attribute created > Confirm the deletion | The alert "Successful deletion." is displayed |
