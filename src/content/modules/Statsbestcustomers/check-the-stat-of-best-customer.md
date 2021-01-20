---
title: Check the stat of best customer
weight: 1
---

## Preconditions

The shop should have at least 2/3 customers with order in payment accepted\
Module should be upgraded to the last version
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to admin -> statistic -> best customers tab | Best customers tab should be display |
| Compare the data in this page with the order page | Should be correct |
| Delete the ps_connection table in database | Information is still in tab best customer |
