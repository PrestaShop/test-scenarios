---
title: "BO - International - Localization - Currencies - Filter & sort & pagination"
weight: 5
---

# BO - International - Localization - Currencies - Filter & sort & pagination
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1004
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/01_localization/03_currencies/05_filterSortAndPagination.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/localization/currencies

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization | Localization page is displayed<br>title contains : Localization |
| Go to Currencies tab | Currencies page is displayed<br>title contains : Currencies |
| *Filter by ID*  <br>Type the data in *Search ID* field  > click on *Search* button | number of currencies = 1<br>Value in table contains EUR<br><br>Search button is disabled<br><br>Reset button is enabled |
| Click on *Reset* button | number of currencies is back to initial value<br><br>All available currencies are well displayed <br>Reset button disappears<br><br>Search button is displayed and disabled |
| *Filter by Currency*<br>Type the data in *Currency* field  > click on *Search* button | number of currencies = 1<br>Value in table contains EUR<br><br>Search button is disabled<br><br>Reset button is enabled |
| Click on *Reset* button | number of currencies is back to initial value<br><br>All available currencies are well displayed <br>Reset button disappears<br><br>Search button is displayed and disabled |
| *Filter by Symbol*<br>Type the data in *Symbol* field  > click on *Search* button | number of currencies = 1<br>Value in table contains EUR<br><br>Search button is disabled<br><br>Reset button is enabled |
| Click on *Reset* button | number of currencies is back to initial value<br><br>All available currencies are well displayed <br>Reset button disappears<br><br>Search button is displayed and disabled |
| *Filter by ISO code*<br>Type the data in *ISO code* field  > click on *Search* button | number of currencies = 1<br>Value in table contains EUR<br><br>Search button is disabled<br><br>Reset button is enabled |
| Click on *Reset* button | number of currencies is back to initial value<br><br>All available currencies are well displayed <br>Reset button disappears<br><br>Search button is displayed and disabled |
| *Filter by Enabled*<br>Click on dropdown list under Enabled tab | A drop down list is displayed with three values :<br> * All (default)<br> * Yes<br> * No |
| Select value in dropdown list > click on *Search* button | All enabled currencies are well displayed |
| Click on *Reset* button | number of currencies is back to initial value<br><br>All available currencies are well displayed <br>Reset button disappears<br><br>Search button is displayed and disabled<br>*Enabled Field* = All |
| Select value in dropdown list > click on *Search* button | All disabled currencies are well displayed |
| Click on *Reset* button | number of currencies is back to initial value<br><br>All available currencies are well displayed <br>Reset button disappears<br><br>Search button is displayed and disabled<br>*Enabled Field* = All |
| Click on Add a new currency button > Choose "Mozambican Metical (MZN)" > Save | Successful creation message is displayed |
| Sort by ID DESC | List is displayed in descending order |
| Sort by ID ASC | List is displayed in ascending order |
| Sort by ISO Code ASC | List is displayed in ascending order by ISO Code |
| Sort by ISO Code DESC | List is displayed in descending order by ISO Code |
| Sort by Exchange rate ASC | List is displayed in ascending order by Exchange rate |
| Sort by Exchange rate DESC | List is displayed in descending order by Exchange rate |
| Disable Mozambican Metical | The status has been successfully updated. message is displayed |
| Sort by Enable DESC | List is displayed in descending order by Enable |
| Sort by Enable ASC | List is displayed in ascending order by Enable |
| Add 10 more currencies | Successful creation<br>Pagination is displayed |
| Choose Items per page : 10 | 2 pages are available |
| Go to page 2 | See 2 currencies are displayed |
| Choose Items per page : 100 | All currencies are displayed on 1 page |
