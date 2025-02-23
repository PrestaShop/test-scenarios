---
title: "BO - Cart rules - Actions - Apply a discount percent(%)"
weight: 3
---

# BO - Cart rules - Actions - Apply a discount percent(%)
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10319

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for information >Click on save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Actions" and Click on Save | Succes Message is displayed: "Successful creation" |
| Click on  "View my store" <br><br>Add a product to the basket with the discount code | The discount applies to the product in the basket with the percentage |
| Set 100% for a discount | Sucess Message is displayed: "Sucessful creation" |
| Click on  "View my store" <br><br>Add a product to the basket | At basket level we will have 0 as the total to pay |
| Set a negative percentage | Error message : <br>There are 2 errors.<br> # Reduction percentage must be between 0% and 100%<br> # The reduction_percent field is invalid. |
| Set a percentage with special characters | Error Message "The reduction_percent field is invalid." |
| Set a percentage with letters | Error Message "The reduction_percent field is invalid." |
