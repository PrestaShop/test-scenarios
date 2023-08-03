---
title: "BO - Catalog - Attributes - Change position Attributes & Values"
weight: 5
---

# BO - Catalog - Attributes - Change position Attributes & Values
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-807

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Attributes & Features > Attributes page | The Attributes page is well displayed |
| Reset filter | Number attributes = Total Attibutes |
| Sort by Position asc | The list is well sorted by position ( 1 -> 2 -> 3) |
| Drag & drop first attribute from the first position to the third position | The alert "Successful update" is displayed, the position of attributes are updated |
| Reset the position (Drag & drop the first attribute to the first position) | The positions are updated and a green alert "Successful update" is displayed |
| View the first attribute | Page title = Size<br>The values page is well displayed |
| Reset filter | Number values = Total values |
| Sort by Position asc | The list is well sorted by position ( 1 -> 2 -> 3) |
| Drag & drop first attribute from the first position to the third position | The alert "Successful update" is displayed, the position of attributes is updated |
| Reset the position (Drag & drop the first attribute to the first position) | The positions are updated and a green alert "Successful update" is displayed |
