---
title: "Search a currency by enable/disable"
weight: 5
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization > Currencies > Add a new currency : USD > Save | USD currency is created<br><br>Message "Successful creation." |
| Disable currency USD by switching the toggle button | USD is disabled<br><br>Message "The status has been successfully updated." |
| Search by Enabled : YES > Click Search | Currency Euro should be the only currency available |
| Search by Enabled : NO > Click Search | Currency USD Should be the only currency available |
| Add a new currency > Choose GBP > Save | Message "Successful creation."<br><br>GBP will not appear |
| Search by Enable : YES > Click Search | GBP and EUR will be displayed |
| Reset your search | All 3 currencies should be displayed |
