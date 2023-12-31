---
title: "FO - Checkout - Shipping method - Add gift message"
weight: 5
---

# FO - Checkout - Shipping method - Add gift message
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1311

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go and login to the prestashop BO | the BO dasboard is displayed |
| go to the shop parameters / order settings page | the order settings page is displayed |
| enable the "gift wrap" option and click on "save" button | the option is enabled and a success message is displayed |
| logout from BO | logged out from BO |
| Go to FO and login | Logged in |
| place an order and follow the process up to the stage of selection of the delivery method | the delivery method selection step is displayed |
| check the "I would like my order to be gift wrapped" and add gift message | the checkbox is checked and the message is added |
| finish the checkout process | the checkout process is finished and the order confirmation page is displayed |
| logout from FO | logged out |
| go to BO and login | The BO dashboard page is displayed |
| go to the order list page | the order list page is displayed |
| select the previously made order and go to the order detail page | the order detail page is displayed |
| check the order carriers tab | a "wrapping label" is visible and the gift message is visble to and the text is correct |
