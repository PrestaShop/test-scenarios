---
title: "BO - International - Localization - Currencies - Edit official and unofficial currency"
weight: 4
---

# BO - International - Localization - Currencies - Edit official and unofficial currency
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1002

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to International > Localization page | Localization page is displayed<br>title contains : Localization |
| Go to Currencies tab | Currencies page is displayed<br>title contains : Currencies |
| Filter by ISO code of currency > click on *Search* button | number of currencies = 1<br>Value in table contains EUR<br><br>Search button is disabled<br><br>Reset button is enabled |
| Click on *Edit* icon | A new currencies page is displayed<br>Two sections in this new page : *Currencies* and *Language* |
| Go to *Currencies* section >  Edit values on the form > Click *Save* button | This message is displayed : "Successful update"<br>The Currency name is updated : New name + "(Edited)" |
| Click on *Edit* icon | A new currencies page is displayed<br>Two sections in this new page : *Currencies* and *Language* |
| Go to *Language* section > Click on *Edit* symbol button in front of English language | A modal is displayed with title: "Customize symbol and format + English(English)" |
| Add new values > Click on *Apply* button | The modal disappears<br><br>The values in Language section for English language are updated |
| Click on *Save* button | New currency page is displayed<br><br>This message is displayed : "Successful update"<br><br>The Symbol in currencies table is updated |
| Go to *FO* > click on currency dropdown menu | The Euro symbol is updated (£) |