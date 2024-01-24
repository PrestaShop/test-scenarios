---
title: "BO - Catalog - Features - CRUD features and values"
weight: 4
---

# BO - Catalog - Features - CRUD features and values
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-812
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/03_catalog/04_attributesAndFeatures/02_features/01_CRUDFeaturesAndValues.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/sell/catalog/attributes-and-features/features/edit-add-feature-page

## Steps
| Step Description | Expected result |
| ----- | ----- |
| *Create:*<br><br>Go to BO > Catalog > Attributes & Features > Features tab > Click Add new feature | Add New Feature page opens |
| Add a name to your feature > Save | Message "Successful creation" is displayed |
| Click on view on your newly created feature | See that your new feature has 0 value |
| Click Add new feature value | New feature value page is displayed |
| Add a new value > Click on Save and add another value | Message "Successful creation" is displayed<br>New feature value page is displayed |
| Add another value > Click on Save | Successful creation message is displayed |
| *Read:*<br>Click on View button for Texture Feature | See that you have 2 new Values (Smooth and Rough) |
| *Update:*<br>Click on Edit Feature value: Smooth > Add a meta title > Save | Successful update message is displayed |
| Click on "Back to the list" button | You are redirected to the Features list |
| Click on Edit for Texture feature > Add a meta title > Enable Indexable > Save | "Successful update" message is displayed |
| *Delete:*<br>Click on View for Texture Feature > Delete value: Smooth > Popup appears > Click on YES | "Successful deletion" message is displayed |
| Click on Back to the lis button | You are redirected to Features page |
| Click on Delete for Feature: Texture > Popup appears > Click on YES | "Successful deletion" message is displayed<br>The last value: Rough has also been deleted |
