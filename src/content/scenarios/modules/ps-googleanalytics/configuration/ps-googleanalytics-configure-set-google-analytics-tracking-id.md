---
title: "ps_googleanalytics - Configure (set Google Analytics Tracking ID)"
weight: 1
---

# ps_googleanalytics - Configure (set Google Analytics Tracking ID)
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module Manager page & search the module ps_googleanalytics | The module manager is well displayed and the module is displayed as a result |
| Click on Configure | The configuration page is well displayed |
| Without setting the Google Analytics save | A red alert is displayed<br><br>blocked by this issue https://github.com/PrestaShop/PrestaShop/issues/28005 |
| Set an invalid Google Analytics Tracking ID and save | A green alert "Account ID updated successfully" is displayed |
| Go to FO, Click on Enable on the Tag Assistant Legacy (by Google) and refresh the page | A red message is displayed  "Invalid or missing web property ID"  !image-2022-03-22-18-09-18-657.png! |
| Go back to the module configuration page & set a valid Google Analytics Tracking ID and save | A green alert "Account ID updated successfully" is displayed |
| Go to FO, Click on Enable on the Tag Assistant Legacy (by Google) and refresh the page | The red message is not displayed<br><br>!image-2022-03-22-18-11-49-877.png! |
