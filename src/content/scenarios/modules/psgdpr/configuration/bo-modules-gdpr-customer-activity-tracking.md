---
title: "BO - Modules - GDPR - Customer activity tracking"
weight: 4
---

# BO - Modules - GDPR - Customer activity tracking
## Details
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-7594
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/psgdpr/02_configuration/04_customerActivityTracking.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Modules manager > Search psgdpr > Configure | psgdpr module configuration page is displayed |
| Go to Tab 4 : Customer activity tracking | Customer activity list block is displayed<br>One customer is displayed in the table : John Doe - Erasure - The date<br>(Done in https://forge.prestashop.com/browse/TEST-7593) |
| Go to FO > Log into the customer created in https://forge.prestashop.com/browse/TEST-7593 > Go to our account > GDPR - Personal Data > Click on Get my data to PDF and Get my data to CSV > Sign out | 2 files are downloaded |
| Go back to psgdpr configuration page > Tab 4 | See 2 new lines appear : <br>Janet doe - Accessibility (pdf) - The date<br>Janet doe - Accessibility (csv) - The date |
| Go to FO > Click Sign In > No account? Create one here > Check all the checkboxes > Save | Customer account is created |
| Go back to psgdpr configuration page > Tab 4 | See 1 new line appear : <br>hello world - Consent confirmation - The date |
| In the table with all your customer activity > Click on Client name/ID | The table is sorted by non-alphabetical order for Client name |
| Click on "Type on request" | The table is sorted by alphabetical order for Type of requset |
| Click on "Submission date" | The table is sorted by Date ASC |
| Click on Copy | The information is copied to your clipboard |
| Click on Excel | An excel file is downloaded with the same info as in the table in BO |
| Click on CSV | A csv file is downloaded with the same info as in the table in BO |
| Click on PDF | A PDF file is displayed with the same info as in the table in BO |
