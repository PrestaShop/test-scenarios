---
title: "BO - Customers - Addresses - Sort and pagination"
weight: 5
---

# BO - Customers - Addresses - Sort and pagination
## Details
* **Component** : Core
* **Status** : Deprecated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-861

## Steps
| Step Description | Expected result |
| ----- | ----- |
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
