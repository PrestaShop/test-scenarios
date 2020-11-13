---
title: Enable/Disable email copy to merchant
weight: 2
---

## Preconditions

Go to back office -> Modules -> Module manager<br />
Search contactform<br />
The module should be installed and upgraded to the last version<br />
Click on Configure<br />
<br />
SMTP Should be configure
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on the switch button to enable the first bloc | The switch button should be blue and a message should appear |
| Go to the front office and make an order | The front office and order should be displayed |
| Go to the contact us form | The form should be displayed |
| Send a message  | An email should be sent to merchant |
| Go to back office click on the switch button to disable the first bloc | The switch button should be red and a message should appear |
| Go to the front office and make an order | The front office and order should be displayed |
| Go to the contact us form | The form should be displayed |
| Send a message  | An email shouldn't be sent to merchant |
