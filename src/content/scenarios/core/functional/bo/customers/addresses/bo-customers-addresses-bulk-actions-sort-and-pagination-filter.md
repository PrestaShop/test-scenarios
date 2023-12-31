---
title: "BO - Customers - Addresses - Bulk Actions/Sort and pagination/Filter"
weight: 4
---

# BO - Customers - Addresses - Bulk Actions/Sort and pagination/Filter
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-860
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/04_customers/02_addresses/03_addressesBulkActions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to customers > addresses page | Page title contains 'Addresses' |
| reset all filters | Number of addresses > 0 |
| go to add new address page | page title contains 'Add new' |
| Create first address <br>address: 'todelete' | Successful message is displayed<br>number of addresses = total of addresses + 1 |
| go to add new address page | page title contains 'Add new' |
| Create second address <br>address: 'todelete' | Successful message is displayed<br>number of addresses = total of addresses + 2 |
| filter by address: 'todelete' | 2 addresses are displayed in grid |
| delete addresses by bulk actions | Successful multi delete message is displayed |
| reset filters | number of addresses = total of addresses |
| go to customer > addresses page | page title contains 'Addresses' |
| reset filters | Number of addresses > 0 |
| Sort Addresses by id desc | Addresses are sorted by id (3 -> 2 -> 1) |
| Sort Addresses by Firstname asc | Addresses are sorted by Firstname (x -> y -> z) |
| Sort Addresses by Firstname desc | Addresses are sorted by Firstname (z -> y -> x) |
| Sort Addresses by lastname asc | Addresses are sorted by lastname (x -> y -> z) |
| Sort Addresses by lastname desc | Addresses are sorted by lastname (z -> y -> x) |
| Sort Addresses by post code asc | Addresses are sorted by post code (1 -> 2 -> 3) |
| Sort Addresses by post code desc | Addresses are sorted by post code (3 -> 2 -> 1) |
| Sort Addresses by city asc | Addresses are sorted by city (x -> y -> z) |
| Sort Addresses by city desc | Addresses are sorted by city (z -> y -> x) |
| Sort Addresses by country asc | Addresses are sorted by country (x -> y -> z) |
| Sort Addresses by country desc | Addresses are sorted by country (z -> y -> x) |
| Sort Addresses by id asc | Addresses are sorted by id (1 -> 2 -> 3) |
| Go to customers > addresses page | Page title contains 'Addresses' |
| reset all filters | Number of products > 0 |
| filter by id : 2 | At least one address is displayed<br>First row column id = 2 |
| reset all filters | Number of products after reset = total of addresses |
| filter by firstname 'John' | At least one address is displayed<br>First row column firstname = John |
| reset all filters | Number of products after reset = total of addresses |
| filter by lastName 'DOE' | At least one address is displayed<br>First row column lastName = DOE |
| reset all filters | Number of products after reset = total of addresses |
| filter by address '16, Main street' | At least one address is displayed<br>First row column address = 16, Main street |
| reset all filters | Number of products after reset = total of addresses |
| filter by post code '75002' | At least one address is displayed<br>First row column post code = 75002 |
| reset all filters | Number of products after reset = total of addresses |
| filter by city 'Paris' | At least one address is displayed<br>First row column city = Paris |
| reset all filters | Number of products after reset = total of addresses |
| filter by country 'France' | At least one address is displayed<br>First row column country = France |
| reset all filters | Number of products after reset = total of addresses |