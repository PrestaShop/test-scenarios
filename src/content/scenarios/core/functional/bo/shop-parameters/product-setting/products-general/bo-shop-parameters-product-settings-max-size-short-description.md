---
title: "BO - Shop Parameters - Product Settings - Max size short description"
weight: 3
---

# BO - Shop Parameters - Product Settings - Max size short description
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
