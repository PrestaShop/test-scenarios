---
title: "BO - Advanced Parameters - Performance - Debug mode"
weight: 1
---

# BO - Advanced Parameters - Performance - Debug mode
## Details
* **Component** : Core
* **Status** : [TEST] IN PROGRESS
* **Automated on** : 8.1.x, 9.0.x, 9.1.x
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7823
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/02_performance/02_debugMode.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/configure/advanced-parameters/performance

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Got to BO>Configure>Advanced Parameters>Performance | The Performance page is displayed |
| Disabled debug mode<br><br>Click to save | Update successful<br><br>Debug mode logo is no longer visible in the header |
| Enabled debug mode<br><br>Click to save | Update successful<br><br>Debug mode logo is visible in the header |
| Enabled all overrides<br><br>Click to save | Update successful |
| Disabled all overrides<br><br>Click to save | Update successful |
