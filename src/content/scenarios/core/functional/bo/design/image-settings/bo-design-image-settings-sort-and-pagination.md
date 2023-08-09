---
title: "BO - Design - Image Settings - Sort and Pagination"
weight: 5
---

# BO - Design - Image Settings - Sort and Pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-964

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Design > Image Settings | the image settings page is well displayed |
| create 21 new image type | image settings  page is well displayed<br><br>Image Settings  table  = 21 |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings   by ID desc | Images settings  are sorted by ID (4 -> 3 -> ...) |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings   by ID asc | Images settings  are sorted by ID (1 -> 2 ->3 ...) |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings   by image type  name desc | images settings are sorted by image type name  ( z-> y -> ...) |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings   by image type  name asc | images settings are sorted by image type name  ( a-> b ->y ...) |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by Width asc | images settings are sorted by Width (exp : 0>50>100) |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by Width desc | images settings are sorted by Width (exp :100>50>0 ) |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort imaages settings by Height asc | images settings are sorted by Height (exp : 0>50>100) |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort imaages settings by Height desc | images settings are sorted by Height (exp : 100>50>0) |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by product status 'YES' | images settings are sorted by status 'Yes ' |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by product status 'NO' | images settings are sorted by status 'NO ' |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by categories status 'YES' | images settings are sorted by status o categories  'YES  ' |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by categories status 'NO' | images settings are sorted by status o categories  'NO  ' |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by brands status 'YES ' | images settings are sorted by status o brands    'YES   ' |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by brands status 'NO ' | images settings are sorted by status o brands    'NO   ' |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by Suppliers status 'YES ' | images settings are sorted by status o Suppliers    'YES   ' |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by Suppliers status 'NO ' | images settings are sorted by status o Suppliers    'NO   ' |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by Stores status 'YES ' | images settings are sorted by status of Stores    'YES   ' |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Sort image settings by Stores status 'NO ' | images settings are sorted by status of Stores    'NO   ' |
| Reset all filters | All filters are reset , the image settings are  displayed |
| Change the items number to 20 per page | 2 pages are displayed (page 1/2) |
| Go to page 2 | 2 pages are displayed (page 2/2) |
| Change the items number to 100 per page | Only one page is displayed  _(page 1 / 1)_ |
