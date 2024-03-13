---
title: "POST /api/product"
weight: 1
---

# POST /api/product
## Details
* **Component** : Core
* **Status** : [TEST] Automation in progress
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-8648

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| Fill the form with following data (Client ID : "Client XYZ", Client Name: "ClientName ABC")<br>Click on "Generate client secret & Save" button | There is 1 application in the list<br>The message “The API access and Client secret has been generated sucessfully” is displayed<br>The message "Client secret: " is available<br>The button Copy put the client secret in the clipboard |
| Request with method POST the endpoint "https://[url of your shop]/admin-dev/index.php/api/product" with data | The HTTP code is 201.<br><br>The response is in JSON. |
| In BO, Go to Catalog > Products | Products Page is displayed correctly. |
| Reset all filters of Products table | All filters are reset.<br>All Products are displayed. |
| Filter on the product name for a specific product and fetch the product ID. | 1 record found.<br><br>Check field productId |
| Go to edit page | The Edit page will be displayed correctly<br>Check fields like type, active, names, descriptions |
| Return to the list | Products Page is displayed correctly.<br>1 record found. |
| On the second row, click on the button “Three points” | The dropdown is displayed. |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
