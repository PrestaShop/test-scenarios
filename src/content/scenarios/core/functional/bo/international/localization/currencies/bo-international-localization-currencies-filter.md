---
title: "BO - International - Localization - Currencies - Filter"
weight: 6
---

# BO - International - Localization - Currencies - Filter
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1004

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