---
title: "BO - Advanced parameters - Import - Import categories"
weight: 1
---

# BO - Advanced parameters - Import - Import categories
## Details
* **Component** : Core
* **Status** : À faire
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8570
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/05_import/03_importCategories.ts.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/import-1

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Advanced Parameters > Import | |The Import page is displayed| |
| Select entity "Categories" and upload the categories CSV | The file is accepted and its name is shown |
| Click "Next step" | The "Match your data" (step 2) panel is displayed |
| Click "Import" | The import progress modal opens |
| |Wait for the import to finish| | The modal shows "Data imported!" |
| |Close the progress modal| | The modal closes |
| Go to Catalog > Categories and filter by each imported category name | Each imported category is present exactly once |
