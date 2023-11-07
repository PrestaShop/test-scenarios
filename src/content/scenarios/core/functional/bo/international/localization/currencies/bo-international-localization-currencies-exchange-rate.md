---
title: "BO - International - Localization - Currencies - Exchange rate"
weight: 3
---

# BO - International - Localization - Currencies - Exchange rate
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1001
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/01_localization/03_currencies/04_updateExchangeRate.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International > Localization page | Localization page is displayed<br>title contains : Localization |
| Go to Currencies tab | Currencies page is displayed<br>title contains : Currencies |
| Click on *Add new currency* button | New currency page is displayed<br>Title contains 'Currencies •'<br>A form is displayed |
| Click on Select a currency dropdown menu | A dropdown menu is well displayed<br><br>An input field inside the dropdown menu is displayed |
| Type data in the input field | The dropdown list contain one result : Tunisian Dinar (TND) |
| Click on value in the dropdownlist | All field in Currencies page form are automatically filled:<br> * Select a currency : Tunisian Dinar (TND)<br> * Currency name : Tunisian Dinar <br> * ISO code : TND<br> * Exchange rate : 3.33<br> * Decimals : 3<br> * Status: Yes |
| Click on *Save* button | Message displayed : "Successful creation"<br>New Currencies page is displayed<br>A new line is added in Currencies table contains *TND* |
| Go to FO > Select TND (in currency dropdown menu) | All items prices are displayed in TND<br>The price of  Hummingbird Printed T-Shirt : 76.40 |
| Filter currencies by ISO code > click *Search* button | First row column name contains 'TND' |
| Click on Edit button | A new currencies page is displayed<br>All form fields are automatically filled |
| Go to *Exchange rate* field > Edit value > Click *Save* button | Message displayed : "Successful update" |
| Go to FO > Select TND (in currency dropdown menu) | All items prices are displayed in TND<br>The price of  Hummingbird Printed T-Shirt : 68.83 |
| Filter currencies by ISO code > click *Search* button | First row column name contains 'TND' |
| Click on Edit button | A new currencies page is displayed<br>All form fields are automatically filled |
| Click on *Restore default settings* button | A modal Titled : Loading currency data is displayed and disappears once the values are updated.<br><br>The exchange rate value is back to default : 3.33 |
| Click on the three dots > Click on *Delete* button | A modal is displayed with title : Delete selection<br>Two buttons in the modal : Cancel and Delete |
| Click on *Delete* button in the modal | Message displayed :"Successful deletion"<br>Table Curruncies displays : "No records found" |
| Click on *Reset* button | All available currincies are displayed |
