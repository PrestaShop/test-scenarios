---
title: Filter And Quick Edit Brands
weight: 1
---

## Preconditions

Prestashop Installed\
Login Into BO \
Go to Brands Page \
Reset All filters And get Number of brands in list\
Having this element in list : 
- demo Brand : { id: '1', name: 'Studio Design', addresses: 1, products: 9, enabled: true}
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Scenario 1 : Filter brands |  |
| filter by demo brand id | filter is successful <br>number of brands after filter < Total of brands<br>first row column id in table contain 1 |
| reset filter | number of brands after reset = Total of brands |
| filter by demo brand name | filter is successful <br>number of brands after filter < Total of brands<br>first row column name in table contain 'Studio Design' |
| reset filter | number of brands after reset = Total of brands |
| filter by demo brand enabled (true = Yes) | filter is successful <br>number of brands after filter < Total of brands<br>first row column active in table contain 'check' |
| reset filter | number of brands after reset = Total of brands |
| Scenario 2 : Quick Edit Brands |  |
| filter by demo brand name | filter is successful <br>number of brands after filter < Total of brands<br>first row column name in table contain 'Studio Design' |
| disable first brand | first row column active in table contain 'clear' |
| enable first brand | first row column active in table contain 'check' |
| reset filter | number of brands after reset = Total of brands |
