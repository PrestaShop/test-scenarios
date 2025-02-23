---
title: "BO - Cart rules - Actions - Free shipping"
weight: 2
---

# BO - Cart rules - Actions - Free shipping
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10318

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Discounts | Cart rules page is displayed |
| Click on "Add new cart rule" | Cart rule page is displayed<br><br>Information tab is displayed |
| Entering data for information >Click on save | Warning is message is displayed: "An action is required for this cart rule." |
| Click on Tab "Actions" activate the button free shipping | Succes Message is displayed: "Successful creation" |
| FO> add a product to the basket | Shipping should be free |
| Click on Tab "Actions" disable the button free shipping | Succes Message is displayed: "Successful creation" |
| FO> add a product to the basket | The price of delivery must be displayed and must not be free of charge. |
