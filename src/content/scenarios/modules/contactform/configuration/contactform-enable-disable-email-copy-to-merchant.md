---
title: "contactform - Enable/Disable email copy to merchant"
weight: 2
---

# contactform - Enable/Disable email copy to merchant
## Details
* **Component** : contactform
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-566

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on the switch button to enable the first bloc | The switch button should be blue and a message should appear |
| Go to the front office and make an order | The front office and order should be displayed |
| Go to the contact us form | The form should be displayed |
| Send a message | An email should be sent to merchant |
| Go to back office click on the switch button to disable the first bloc | The switch button should be red and a message should appear |
| Go to the front office and make an order | The front office and order should be displayed |
| Go to the contact us form | The form should be displayed |
| Send a message | An email shouldn't be sent to merchant |
