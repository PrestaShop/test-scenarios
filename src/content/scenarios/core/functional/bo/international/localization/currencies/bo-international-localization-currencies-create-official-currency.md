---
title: "BO - International - Localization - Currencies - Create Official Currency"
weight: 1
---

# BO - International - Localization - Currencies - Create Official Currency
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-999
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/01_localization/03_currencies/01_createOfficialCurrency.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International > Localization page | Localization page is displayed<br>Title contains : Localization |
| Go to Currencies Tab | Currencies page is displayed<br>Title contains : Currencies |
| Click on *Add new currency* button | New currency page is displayed<br>Title contains 'Currencies •'<br>A form is displayed |
| Click on Select a currency dropdown menu | A dropdown menu is well displayed<br><br>An input field inside the dropdown menu is displayed |
| Type data in the input field | The dropdown list contain one result : Moroccan Dirham (MAD) |
| Click on value in the dropdownlist | All field in Currencies page form are automatically filled:<br> * Select a currency : Moroccan Dirham(MAD)<br> * Currency name : Moroccan Dirham<br> * ISO code : MAD<br> * Exchange rate : 11.06<br> * Decimals : 2<br> * Status: Yes |
| Click on *Save* button | Message displayed : "Successful creation"<br>New Currencies page is displayed<br>A new line is added in Currencies table contains *MAD* |
| Go to FO and click on currency dropdown menu | The added currency is well displayed in the list |
| Go back to Bo > Type value in *ISO code* field | Search button is enabled |
| Click on *Search* button | First row column name contains 'MAD'<br>The table title containes the number of items : Currencies (1) |
| Switch the toggle switch button to off | First currency in row is disabled<br>Message is displayed : "The status has been successfully updated." |
| Go to FO and click on currency dropdown menu | The MAD currency is not found |
| Go back to BO > click  *Reset* button | All currencies available are well displayed |
| Filter currencies by ISO code > click *Search* button | First row column name contains 'MAD' |
| Click on the three dots > Click on *Delete* button | A modal is displayed with title : Delete selection<br>Two buttons in the modal : Cancel and Delete |
| Click on *Delete* button in the modal | Message displayed :"Successful deletion"<br>Table Curruncies displays : "No records found" |
| Click on *Reset* button | All available currincies are displayed |
