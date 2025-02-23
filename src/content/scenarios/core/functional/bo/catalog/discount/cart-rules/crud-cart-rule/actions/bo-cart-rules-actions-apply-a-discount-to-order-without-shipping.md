---
title: "BO - Cart rules - Actions - Apply a discount to Order (without shipping)"
weight: 6
---

# BO - Cart rules - Actions - Apply a discount to Order (without shipping)
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10322

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for information >Click on save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Conditions" | See Total available : 1<br><br>See Total available for each user : 1 |
| Click on Tab "Actions" | Succes Message is displayed: "Successful creation" |
| Apply a percentage discount with an ‘apply discount to order without shipping | Succes Message is displayed: "Successful creation" |
| Click on  "View my store" <br><br>Add a product to the basket with the discount code | The discount applies to the product in the basket with the percentage |
| Apply an amount reduction with a ‘apply discount to order without shipping ’ including tax | Succes Message is displayed: "Successful creation" |
| Click on  "View my store" <br><br>Add a product to the basket with the discount code | The discount applies to the product in the basket with the amount |
| Apply an amount reduction with a ‘apply discount to order without shipping ’ excluding tax | Succes Message is displayed: "Successful creation" |
| Click on  "View my store" <br><br>Add a product to the basket with the discount code | The discount applies to the product in the basket with the amount and taxe |
