---
title: Filter Brand Addresses
weight: 2
---

## Preconditions

Prestashop Installed\
Login Into BO \
Go to Brands Page \
Reset All filters And get Number of Addresses in list\
Having this element in list : 
- demo Address: { id: '4', brand: 'Studio Design', firstName: 'manufacturer', lastName: 'manufacturer', postalCode: '10154', city: 'New York', country: 'United States'}
## Steps
| Step Description | Expected result |
| ----- | ----- |
| filter by demo Address id | filter is successful <br>number of Addresses after filter < Total of brands<br>first row column id in table contain 4 |
| reset filter | number of Addresses after reset = Total of Addresses |
| filter by demo Address brand name | filter is successful <br>number of Addresses after filter < Total of brands<br>first row column brand name in table contain 'Studio Design' |
| reset filter | number of Addresses after reset = Total of Addresses |
| filter by demo Address manufacturer firstname | filter is successful <br>number of Addresses after filter < Total of brands<br>first row column firstname in table contain 'manufacturer' |
| reset filter | number of Addresses after reset = Total of Addresses |
| filter by demo Address manufacturer lastname | filter is successful <br>number of Addresses after filter < Total of brands<br>first row column lastname in table contain 'manufacturer' |
| reset filter | number of Addresses after reset = Total of Addresses |
| filter by demo Address manufacturer postalCode | filter is successful <br>number of Addresses after filter < Total of brands<br>first row column postalCode in table contain '10154' |
| reset filter | number of Addresses after reset = Total of Addresses |
| filter by demo Address manufacturer city | filter is successful <br>number of Addresses after filter < Total of brands<br>first row column city in table contain 'New York' |
| reset filter | number of Addresses after reset = Total of Addresses |
| filter by demo Address manufacturer country | filter is successful <br>number of Addresses after filter < Total of brands<br>first row column country in table contain 'United States' |
| reset filter | number of Addresses after reset = Total of Addresses |
