---
title: CUD criteria
weight: 12
---

## Preconditions

The module should be installed with the previous version
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on "Add new criteria" | Add new criteria page is displayed correctly |
| Fill all information :<br>Criterion name : Test<br>Application scope of the criterion : Restricted to some category and choose a category<br>Active : yes | Criteria is saved correctly<br>A message is displayed and we are redirected to the main page of the configuration module. |
| Go to FO to a product who isn't in the category selected in BO and try to add a comment | The new criteria shouldn't be displayed |
| Go to FO to a product who is in the category selected in BO and try to add a comment | The new criteria should be displayed |
| Go to BO click on "Edit" | Edit criteria page is displayed correctly |
| Change Application scope of the criterion to a product | Criteria is saved correctly<br>A message is displayed and we are redirected to the main page of the configuration module. |
| Go to FO to a product who isn't the product selected in BO and try to add a comment | The new criteria shouldn't be displayed |
| Go to FO to a product who is the product selected in BO and try to add a comment | The new criteria should be displayed |
| Go to BO click on "Delete" | The new criteria should be deleted |
| Go to FO to a product and try to add a new comment | The new criteria shouldn't be displayed |
