---
title: "BO - Catalog - Brands - Filter and Quick Edit"
weight: 1
---

# BO - Catalog - Brands - Filter and Quick Edit
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-815

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Brands & Suppliers > Brands page | The Brands page is well displayed |
| Filter by ID = 1 | Number of brands after filter < Total of brands<br><br>Brands list is well filtered on ID = 1 |
| Reset filter | Number of brands after reset = Total of brands |
| Filter by Name : Studio Design | Number of brands after filter < Total of brands<br><br>Brands list is well filtered on Name = Studio Design |
| Reset filter | Number of brands after reset = Total of brands |
| Filter by Enabled : Yes | Number of brands after filter < Total of brands<br><br>Brands list is well filtered on Enabled = Yes |
| Reset filter | Number of brands after reset = Total of brands |
| Filter by Name = Studio Design | Number of brands after filter < Total of brands<br><br>Brands list is well filtered on Name = Studio Design |
| Disable Studio Design | The alert "The status has been successfully updated."  is displayed<br><br>See that Studio Design is now disabled in the list |
| Enable Studio Design | The alert "The status has been successfully updated." is displayed<br><br>See that Studio Design is now enabled in the list |
| Reset filter | Number of brands after reset = Total of brands |
