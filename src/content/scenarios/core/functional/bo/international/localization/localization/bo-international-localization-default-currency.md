---
title: "BO - International - Localization - Default currency"
weight: 7
---

# BO - International - Localization - Default currency
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-991

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> International> Localization | Localization page is well displayed |
| Go to Configuration part -> Default currency | The default currency used in the shop is Euro (EUR). |
| Go to International > Localization page | Localization page is displayed<br>Title contains : Localization |
| Go to Currencies Tab | Currencies page is displayed<br>Title contains : Currencies |
| Click on *Add new currency* button | New currency page is displayed<br>Title contains 'Currencies •'<br>A form is displayed |
| Click on Select a currency dropdown menu | A dropdown menu is well displayed<br><br>An input field inside the dropdown menu is displayed |
| Type data in the input field | The dropdown list contain one result : Moroccan Dirham (MAD) |
| Click on value in the dropdownlist | All field in Currencies page form are automatically filled:<br> * Select a currency : Moroccan Dirham(MAD)<br> * Currency name : Moroccan Dirham<br> * ISO code : MAD<br> * Exchange rate : 10.9<br> * Decimals : 2<br> * Status: Yes |
| Click on *Save* button | Message displayed : "Successful creation"<br>New Currencies page is displayed<br>A new line is added in Currencies table contains *MAD* |
| Go back to tab Default currency and click on dropdown | The new currency is added |
| Choose the new currency | An alert is displayed : _Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.**_ |
| Click on OK and save | Update successful message is displayed. |
| Go to FO and click on currency dropdown menu | The new currency is well added. |
