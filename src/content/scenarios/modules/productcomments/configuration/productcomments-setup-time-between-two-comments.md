---
title: "productcomments - Setup time between two comments"
weight: 6
---

# productcomments - Setup time between two comments
## Details
* **Component** : productcomments
* **Status** : [TEST] IN PROGRESS
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7371

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Change the minimum time between 2 reviews from the same user to 15 seconds | Change should be apply in BO |
| In the front office, add a comment | Comment should be added |
| Try to add immediately a second comment | A message should indicate that you need to try after to add a comment |
| Wait 15 seconds and add a new comment | Comment should be added |
