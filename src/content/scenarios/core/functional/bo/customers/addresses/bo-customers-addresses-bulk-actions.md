---
title: "BO - Customers - Addresses - Bulk Actions"
weight: 4
---

# BO - Customers - Addresses - Bulk Actions
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
