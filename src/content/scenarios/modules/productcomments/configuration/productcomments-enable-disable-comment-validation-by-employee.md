---
title: "productcomments - Enable/disable comment validation by employee"
weight: 1
---

# productcomments - Enable/disable comment validation by employee
## Details
* **Component** : productcomments
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-584

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on the switch button to disable the validation of comment by employee | The switch button should be red |
| Go to the front office -> click on a product to open the page | The product should appear with a button to write a comment |
| Click on the button to write a comment | a pop up should appear |
| Write a comment and send it | The message should be display without any request to the employee |
| Go to the back office on the configuration module and Click on the switch button to enable the validation of comment by employee | The switch button should be blue |
| Go to the front office -> click on a product to open the page | The product should appear with a button to write a comment |
| Click on the button to write a comment | a pop up should appear |
| Write a comment and send it | a message should appear to indicate that an employee will review the message |