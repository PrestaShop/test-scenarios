---
title: "BO - Payments - Payment methods - Configure module"
weight: 1
---

# BO - Payments - Payment methods - Configure module
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-980
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/10_payment/01_paymentMethods/01_configureModuleLink.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/payment/payment-methods

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Payment > Payment Methods | Payment Methods page is displayed |
| In list of Active payment > Click Configure on Bank Transfer | Bank Transfer configuration page is displayed |
| Fill the required fields > Click Save | Alert Settings updated is displayed |
| Go Payment > Payment Methods > In list of Active payment > Click Configure on Payment by check | Payment by check configuration page is displayed |
| Fill the required fields > Click Save | Alert Settings updated is displayed |
| Go to Payment > Payment Methods | See Cash on delivery Payment method displayed but not configurable |
