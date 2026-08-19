---
title: "BO - Shop Parameters - General - Disable / Enable Front office security"
weight: 1
---

# BO - Shop Parameters - General - Disable / Enable Front office security
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7749
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/shop-paramaters/general/general

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > General | Preferences page is displayed<br><br>General tab is selected by default |
| Switch *Increase front office security* toggle to *Yes* > Click *Save* button | Message displayed "Successful update" |
| Click on View my store > Add items to Cart > Click Proceed to checkout | Shopping cart is displayed |
| Inspect the page > Search for "token" in html (Elements tab) | See 4 occurrences of token |
| Go back to BO > Advanced parameters > Switch *Increase front office security* toggle to *No* > Click Save button | Message displayed "Successful update" |
| Refresh your cart page > Inspect the page > Search for "token" in html (Elements tab) | See 3 occurrences of token |
