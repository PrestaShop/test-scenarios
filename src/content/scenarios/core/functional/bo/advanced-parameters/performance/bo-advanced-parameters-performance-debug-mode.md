---
title: "BO - Advanced Parameters - Performance - Debug mode"
weight: 2
---

# BO - Advanced Parameters - Performance - Debug mode
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1135
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/14_advancedParameters/02_performance/02_debugMode.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Got to BO>Configure>Advanced Parameters>Performance | The Performance page is displayed |
| Disabled debug mode<br><br>Click to save | Update successful<br><br>Debug mode logo is no longer visible in the header |
| Enabled debug mode<br><br>Click to save | Update successful<br><br>Debug mode logo is visible in the header |
| Enabled all overrides<br><br>Click to save | Update successful |
| Disabled all overrides<br><br>Click to save | Update successful |
