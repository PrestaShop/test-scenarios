---
title: "productcomments - Enable/disable the authorization for guest user to comment"
weight: 1
---

# productcomments - Enable/disable the authorization for guest user to comment
## Details
* **Component** : productcomments
* **Status** : [TEST] IN PROGRESS
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7368

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Click on the switch button to enable the authorization for guest user to comment | The switch button should be green |
| Click on Save | An alert "Settings updated" is well displayed |
| Go to the front office -> click on a product to open the page | The button comment should be displayed |
| Go to the back office on the configuration module and Click on the switch button to disable the authorization for guest user to comment | The switch button should be disabled |
| Click on Save | An alert "Settings updated" is well displayed |
| Go to the front office -> click on a product to open the page | The button comment shouldn't be displayed |
