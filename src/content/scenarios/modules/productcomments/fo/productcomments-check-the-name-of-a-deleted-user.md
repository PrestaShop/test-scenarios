---
title: "productcomments - Check the name of a deleted user"
weight: 5
---

# productcomments - Check the name of a deleted user
## Details
* **Component** : productcomments
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-597

## Steps
| Step Description | Expected result |
| ----- | ----- |
| In the back office, go to customer settings and delete the account of an user who added a comment | The customer should be deleted |
| Go to front office in a product page with a comment of the user we deleted previously | The name of the customer shouldn't appear |
