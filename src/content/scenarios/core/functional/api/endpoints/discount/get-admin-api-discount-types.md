---
title: "GET /admin-api/discount-types"
weight: 1
---

# GET /admin-api/discount-types
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.2.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-12878
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/10_discount/01_getDiscountTypes.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| Request :<br> * Authentifed : Yes<br> * Method:  GET<br> * URL : "https://[url of your shop]/admin-api/discount-types" | The return value is in JSON.<br><br>The return data has multiples values<br><br>Each value has multiples keys :<br> * "core"<br> * "descriptions"<br> * "discountTypeId"<br> * "enabled"<br> * "names"<br> * "type" |
| In BO, Go to Catalog > Discounts page | Catalog > Discounts Page is displayed correctly.<br>Default records found in the table |
| Click on the "Create discount" button | Discount types are displayed.<br><br>Check all values of the JSON data |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
