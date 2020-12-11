---
title: Display remaining quantities
weight: 2
---

## Preconditions

prestashop installed\
Login with admin BO account
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to 'Catalog > Products' page | page title contains 'Products' |
| Create a product | product is created |
| go to 'Shop parameters > Product Settings' page | page title contains 'Product Settings' |
| update Display remaining quantities to 0 | Successful update message is displayed |
| View my shop and go to created product page | product availability is not displayed in product page |
| update Display remaining quantities to the default value | Successful update message is displayed |
| View my shop and go to created product page | product availability is displayed in product page |
