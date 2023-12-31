---
title: "BO - Modules - Filter by category"
weight: 2
---

# BO - Modules - Filter by category
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-875
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/07_modules/01_moduleManager/01_modules/02_filterModulesByCategories.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Login in BO | Dashboarb page should be displayed |
| Go to modules page > Module manager | The displayed page title should contains 'Module manager' |
| Click on the section *Category* and select the filter modules by Categoty : *Administration* | The block title of The displayed result  should be  *Administration* |
| Check that the number of the displayed modules after filter is equal to the displayed number besides the filter name<br><br> <br>*Example* (Administration 28) <br>the total of the displayed modules = 28 ) |  |
| Click on the section *Category* and select the filter modules by Categoty : *Design & Navigation* | The block title of The displayed result  should be  *Design & Navigation* |
| Check that the number of the displayed modules after filter is equal to the displayed number besides the filter name |  |
| Click on the section *Category* and select the filter modules by Categoty :*Payment* | The block title of The displayed result  should be  *Payment* |
| Check that the number of the displayed modules after filter is equal to the displayed number besides the filter name |  |
| Click on the section *Category* and select the filter modules by Categoty : *Traffic & Marketplaces* | The block title of The displayed result  should be  *Traffic & Marketplaces* |
| Check that the number of the displayed modules after filter is equal to the displayed number besides the filter name |  |
| Click on the section *Category* and select the filter modules by Categoty :  *Theme modules* | The block title of The displayed result  should be   *Theme modules* |
| Check that the number of the displayed modules after filter is equal to the displayed number besides the filter name |  |
| Click on the section *Category* and select the filter modules by Categoty :  *Other* | The block title of The displayed result  should be   *Other* |
| Check that the number of the displayed modules after filter is equal to the displayed number besides the filter name |  |
| Click on the section *Category* and select the filter modules by Categoty :  *All categories* | The displayed page should contain different module search title : Administration / Design & Navigation / Promotions & Marketing / Payment / Traffic & Marketplaces / Theme modules / Other |