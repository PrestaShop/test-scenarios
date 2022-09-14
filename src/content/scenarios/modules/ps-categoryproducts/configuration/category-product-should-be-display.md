---
title: "Category product should be display "
weight: 1
---

# Category product should be display 
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Clic on a Product | The Product page should be displayed and if you scroll down, you can see "other products in the same category :" |
| Go to BO > Module Manager | The module Manager page should be displayed |
| Writte "category" on the search bar to find "Products in the same category" and clic on the down arrow on the right of "Products in the same category" | There is 4 different proposition : <br> * Disable mobile <br> * Disable <br> * Reset<br> * Uninstall |
| * Clic on "Disable"<br> * Clic on "Yes, disable it" | * You have a new modal named Disable module? with "Cancel", "Yes, disable it" and a cross button <br> * You have a green notice with "Disable action on module ps_facetedsearch succeeded." |
| Go to FO > Clic on a Product | The Product page should be displayed and if you scroll down, you didn't see "other products in the same category :" |
| Go to BO > Module Manager | The module Manager page should be displayed |
| Writte "category" on the search bar to find "Products in the same category" and clic on Enable | A green alert with "Enable action on module ps_categoryproducts succeeded" is displayed |
