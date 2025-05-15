---
title: "BO - International - Localization - Currencies - Create Unofficial Currency"
weight: 2
---

# BO - International - Localization - Currencies - Create Unofficial Currency
## Details
* **Component** : Core
* **Status** : To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1000

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization > Go to Currencies tab | Currencies page is displayed<br>title contains : Currencies |
| Click on *Add new currency* button | New currency page is displayed with form to  fill |
| Fill the form with specified data > Click on *Save* button | Oops... it looks like this ISO code already exists. If you are:<br> * trying to create an alternative currency, you must type a different ISO code<br> * trying to modify the currency with ISO code TMM, make sure you did not check the creation box |
| Fill the form with specified data > Click on *Save* button | Currency is created and displayed in Currencies List<br>"Successful creation" message is displayed<br>number of currencies = total of currencies + 1 |
| Filter by ISO code of currency > click on *Search* button | number of currencies < total of currencies + 1<br>Value in table contains value of created currency<br><br>Search button is disabled<br><br>Reset button is enabled |
| Go to FO and change currency to 'TMN' | No error found<br>All products prices are updated to TMN |
| Go back to BO > click on *Reset* button | number of currencies = total of currencies + 1<br>All currencies are well displayed |
| Filter by ISO code of currency > click on *Search* button | number of currencies < total of currencies + 1<br>Value in table contains value of created currency<br><br>Search button is disabled<br><br>Reset button is enabled |
| Switch the toggle swith button to disable currency | First currency in row is disabled<br>This message is displayed : "The status has been successfully updated." |
| Go to FO and click on currency dropdown menu | The disabled currency is unavailable in dropdown list |
| Go back to BO and click on *Reset* button | number of currencies = total of currencies + 1 |
| Filter by ISO code of currency > click on *Search* button | Number of currencies < total of currencies + 1<br>First row column name contains 'TMN'<br><br>Search button is disabled<br><br>Reset button is enabled |
| Click to Edit button | currency page is displayed with form to  fill<br>title contains 'Currencies ' |
| Change the name and save | "Successful update" notification displayed<br><br>the name of this currency is now "To delete" |
| Click on three dots > click on *Delete* button | A modal appears with title "Delete selection"<br>Two buttons displayed in the modal : *Cancel* and *Delete* |
| Click on *Delete* button on the modal | This message is displayed : "Successful deletion"<br>The currencies list is empty |
| Click *Reset* button | number of currencies = total of currencies - 1 |
