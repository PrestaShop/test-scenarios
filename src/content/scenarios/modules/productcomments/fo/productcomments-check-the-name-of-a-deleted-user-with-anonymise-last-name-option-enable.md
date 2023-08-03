---
title: "productcomments - Check the name of a deleted user with anonymise last name option enable"
weight: 4
---

# productcomments - Check the name of a deleted user with anonymise last name option enable
## Details
* **Component** : productcomments
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-596

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In the back office, go to customer settings and delete the account of an user who added a comment | The customer should be deleted |
| Go to front office in a product page with a comment of the user we deleted previously | The name of the customer shouldn't appear |
