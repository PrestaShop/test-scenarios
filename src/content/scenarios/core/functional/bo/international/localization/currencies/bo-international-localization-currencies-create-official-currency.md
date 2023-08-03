---
title: "BO - International - Localization - Currencies - Create Official Currency"
weight: 1
---

# BO - International - Localization - Currencies - Create Official Currency
## Details
* **Component** : Core
* **Status** : Sandbox
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-999

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to localization page | Localization page is displayed<br>title contains : Localization * |
| go to currencies page | Currencies page is displayed<br>title contains : Currencies * |
| reset all filters | Total of currencies > 0 |
| go to create new currency page | new currency page is displayed<br>title contains 'Currencies •' |
| Create new currency<br>Criteria :<br>mad: {<br>      name: 'Moroccan Dirham',<br>      frName: 'dirham marocain',<br>      symbol: 'MAD',<br>      isoCode: 'MAD',<br>      decimals: 2,<br>      enabled: true,<br>    } | currency is created<br>Successful message is displayed<br>number of currencies = total of currencies + 1 |
| filter by iso code of currency<br>Criteria : 'MAD' | number of currencies < total of currencies + 1<br>Value in table contains value of created currency |
| Go to FO and change currency to 'MAD' | No error found |
| Go back to Bo and reset filter | number of currencies = total of currencies + 1 |
| filter by iso code of currency <br>Criteria 'MAD' | number of currencies > total of currencies + 1<br>first row column name contains 'MAD' |
| disable currency | first currency in row is disabled |
| Go to FO and change currency to 'MAD' | Error found 'MAD MAD was not found as option of select' |
| Go back to BO and reset filter | number of currencies = total of currencies + 1 |
| filter by iso code of currency <br>Criteria 'MAD' | number of currencies > total of currencies + 1<br>first row column name contains 'MAD' |
| delete currency | Successful message is displayed |
| reset filter | number of currencies = total of currencies + 1 |
