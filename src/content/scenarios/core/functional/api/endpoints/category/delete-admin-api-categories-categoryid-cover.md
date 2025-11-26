---
title: "DELETE /admin-api/categories/{categoryId}/cover"
weight: 2
---

# DELETE /admin-api/categories/{categoryId}/cover
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12173
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/03_category/02_deleteCategoriesIdCover.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| In BO, Go to Catalog > Categories page | Categories Page is displayed correctly.<br>Default records found in the table |
| Reset all filters | Filters are reset<br>Total categories = Number of Categories |
| Click on "Add new Categories" button | The "New category" page is displayed |
| Fill the fields > Click on "Save" | The category is well created and a green alert "Successful creation" is displayed |
| Filter by name of the created category & Fetch its ID as \{categoryId} | 1 record found |
| Click on the Edit button | The Edit Category page is displayed<br><br>The cover image is present |
| Request with method DELETE the endpoint "https://[url of your shop]/admin-api/categories/\{categoryId}/cover" | The HTTP code is 204. |
| Reload the Edit Category page | The Edit Category page is displayed<br><br>The cover image is not present |
| In BO, Go to Catalog > Categories page | Categories Page is displayed correctly.<br>Default records found in the table |
| Filter by name of the created category & Fetch its ID as \{categoryId} | 1 record found |
| Click on the three dots on the first row <br><br>Click on the delete button<br><br>Confirm the deletion | The message "Successful deletion" is displayed.<br><br>0 record found |
| Reset all filters | Filters are reset<br>Total categories = Number of Categories |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
