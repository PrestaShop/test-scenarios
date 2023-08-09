---
title: "BO - Shop Parameters - Product Settings - Max size short description"
weight: 3
---

# BO - Shop Parameters - Product Settings - Max size short description
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1065

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Shop parameters > Product Settings' page | page title contains 'Product Settings' |
| Update max size of short description to 5 | Successful update message is displayed |
| Should go to products page | page title contains 'Products' |
| Try to create product with description > 5 | Error messages are displayed<br>1. 'Unable to update settings.'<br>2. 'This value is too long. It should have 5 characters or less.' |
| go to 'Shop parameters > Product Settings' page | page title contains 'Product Settings' |
| Update max size of short description to default value : 800 | Successful update message is displayed |
| Should go to products page | page title contains 'Products' |
| create product with description 800 | Successful update setting message is displayed |
| delete product | Product should be deleted |
