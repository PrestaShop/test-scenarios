---
title: "BO - Catalog - Brands - Filter and Quick Edit"
weight: 1
---

# BO - Catalog - Brands - Filter and Quick Edit
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Brands page | The Brands page is well displayed |
| Rest all filters | Number of Brands = Total of Brands |
| filter by demo brand id | filter is successful <br>number of brands after filter < Total of brands<br>first row column id in table contain 1 |
| reset filter | number of brands after reset = Total of brands |
| filter by demo brand name | filter is successful <br>number of brands after filter < Total of brands<br>first row column name in table contain 'Studio Design' |
| reset filter | number of brands after reset = Total of brands |
| filter by demo brand enabled (true = Yes) | filter is successful <br>number of brands after filter < Total of brands<br>first row column active in table contain 'check' |
| reset filter | number of brands after reset = Total of brands |
| filter by demo brand name | filter is successful <br>number of brands after filter < Total of brands<br>first row column name in table contain 'Studio Design' |
| disable first brand | The alert "The status has been successfully updated."  is displayed and the first row column active in the table contain 'clear' |
| enable first brand | The alert "The status has been successfully updated." and the first row column active in table contain 'check' |
| reset filter | number of brands after reset = Total of brands |
