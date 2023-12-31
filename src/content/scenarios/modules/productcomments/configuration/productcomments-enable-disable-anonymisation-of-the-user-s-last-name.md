---
title: "productcomments - Enable/disable anonymisation of the user\'s last name"
weight: 4
---

# productcomments - Enable/disable anonymisation of the user\'s last name
## Details
* **Component** : productcomments
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-587

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on the switch button to enable the anonymization of the last name user | The switch button should be blue |
| Go to the front office -> click on a product to open the page<br>the product should already have comment | The product should appear.<br>In the comment part the last name of the user should be displayed |
| Go to the back office on the configuration module and Click on the switch button to disable the anonymization of the last name user | The switch button should be red |
| Go to the front office -> click on a product to open the page<br>the product should already have comment | The product should appear.<br>In the comment part the first letter of the last name user should be displayed |