---
title: "BO - Shop Parameters - Product Settings - Update number of product displayed on FO"
weight: 1
---

# BO - Shop Parameters - Product Settings - Update number of product displayed on FO
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1081

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On BO > Configure > Shop Paramaters > Product Settings | The page should display correctly |
| Change Products per page<br><br> <br><br>Click to Save | "Update successful" notification |
| On FO | The page should display correctly |
| Click to "All products" | The page should display correctly<br><br>Only 3 products should be visible on this page |
| Click to "All products" | The page should display correctly<br><br>Only 3 products should be visible on this page |
| On BO > Configure > Shop Paramaters > Product Settings | The page should display correctly |
| Change Products per page<br><br> <br><br>Click to Save | "Update successful" notification |
| On FO | The page should display correctly |
| Click to "All products" | The page should display correctly<br><br>Only 12 products should be visible on this page |
