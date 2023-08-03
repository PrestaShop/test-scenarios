---
title: "BO - Customers - Addresses - Filter"
weight: 2
---

# BO - Customers - Addresses - Filter
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-858

## Steps
| Step Description | Expected result |
| ----- | ----- |
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
