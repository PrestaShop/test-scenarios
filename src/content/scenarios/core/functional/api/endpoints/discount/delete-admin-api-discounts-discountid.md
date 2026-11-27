---
title: "DELETE /admin-api/discounts/{discountId}"
weight: 1
---

# DELETE /admin-api/discounts/{discountId}
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.2.x, 9.3.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-8556
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/API/02_endpoints/discount/02_postDiscounts.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features is displayed correctly |
| Enable Experimental Feature "Discount" | Experimental Feature "Discount" is enabled |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>No records found in the table |
| Click on the button "Add new API access" | New API access Page is displayed correctly |
| * Fill the form with following data<br> * Click on "Generate client secret & Save" button | * The message “The API access and Client secret has been generated sucessfully” is displayed<br> * The message "Client secret: " is displayed |
| In BO, Go to Catalog > Discounts | Discounts Page is displayed correctly.<br>No records in the list. |
| Reset all filters of Discounts table | All filters are reset. All Discounts are displayed |
| * Click on the Create Discount button<br> * Choose the discount Type | The "Create Discount" page is displayed |
| * Fill all discount fields<br> * Click on the "Save" button | The alert "Successful creation" is displayed. |
| In BO, Go to Catalog > Discounts | Discounts Page is displayed correctly.<br>1 record in the list. |
| Fetch the ID of the first row as discountId | 1 record found |
| Request with method DELETE the endpoint "https://[url of your shop]/admin-api/discounts/\{discountId}" | The HTTP code is 204. |
| Reload the discounts page | Discounts Page is displayed correctly.<br>No records in the list. |
| In BO, Go to Advanced Parameters > New & Experimental Features | New & Experimental Features is displayed correctly |
| Disable Experimental Feature "Discount" | Experimental Feature "Discount" is disabled |
| In BO, Go to Advanced Parameters > Authorization Server | Authorization Server Page is displayed correctly.<br>1 record found in the table |
| On the first row, click on the button “Three points” | The dropdown is displayed |
| Click on the Delete Button in the dropdown | A modal appeared |
| Click on the Confirm Button in the modal | The message “Successful deletion” is displayed<br>No records found in the table |
