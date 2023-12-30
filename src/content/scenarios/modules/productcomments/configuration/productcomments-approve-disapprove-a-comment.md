---
title: "productcomments - Approve/Disapprove a comment"
weight: 7
---

# productcomments - Approve/Disapprove a comment
## Details
* **Component** : productcomments
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-590

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In the tab Reviews waiting for approval click on approve the first comment | The line should be disappear from the tab Reviews waiting for approval and appear in the tab Approved reviews |
| Go to the front office in the product page of this comment | The comment should be displayed |
| On the back office in the tab Reviews waiting for approval click on delete the second comment | A popup appear |
| Validate the suppression of the comment | The comment shouldn't be appear anymore |
| Go to the front office in the product page of this comment | The comment shouldn't be displayed |