---
title: "productcomments - Add a comment"
weight: 1
---

# productcomments - Add a comment
## Details
* **Component** : productcomments
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-593

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Add a comment in a product page and validate<br>(Try to add comment with specific character) | A message should appear<br>If the configuration enable the validation of the comment the comment shouldn't appear.<br>If it's disabled the comment appear |
| Check that the rate is correctly calculated | The total rate should be the average of all comment rate |