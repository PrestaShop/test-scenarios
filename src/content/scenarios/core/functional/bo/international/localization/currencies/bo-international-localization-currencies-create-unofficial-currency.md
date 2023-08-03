---
title: "BO - International - Localization - Currencies - Create Unofficial Currency"
weight: 2
---

# BO - International - Localization - Currencies - Create Unofficial Currency
## Details
* **Component** : Core
* **Status** : Sandbox
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1000

## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to localization page | Localization page is displayed<br>title contains : Localization * |
| go to currencies page | Currencies page is displayed<br>title contains : Currencies * |
| reset all filters | Total of currencies > 0 |
| go to create new currency page | new currency page is displayed<br>title contains 'Currencies •' |
| Create new currency<br>Criteria :<br>toman: {<br>      name: 'Iranian toman',<br>      frName: 'Toman iranien',<br>      symbol: 'TMN',<br>      isoCode: 'TMN',<br>      exchangeRate: 4666.539,<br>      decimals: 2,<br>      enabled: true,<br>    } | currency is created<br>Successful message is displayed<br>number of currencies = total of currencies + 1 |
| filter by iso code of currency<br>Criteria : 'TMN' | number of currencies < total of currencies + 1<br>Value in table contains value of created currency |
| Go to FO and change currency to 'TMN' | No error found |
| Go back to Bo and reset filter | number of currencies = total of currencies + 1 |
| filter by iso code of currency <br>Criteria 'TMN' | number of currencies > total of currencies + 1<br>first row column name contains 'TMN' |
| disable currency | first currency in row is disabled |
| Go to FO and change currency to 'TMN' | Error found 'MAD MAD was not found as option of select' |
| Go back to BO and reset filter | number of currencies = total of currencies + 1 |
| filter by iso code of currency <br>Criteria 'TMN' | number of currencies > total of currencies + 1<br>first row column name contains 'TMN' |
| delete currency | Successful message is displayed |
| reset filter | number of currencies = total of currencies + 1 |
