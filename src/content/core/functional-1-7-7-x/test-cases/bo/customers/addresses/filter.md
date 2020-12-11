---
title: Filter
weight: 3
---

## Preconditions

Having a shop installed locally\
Go to the BO and connect with an admin account
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
