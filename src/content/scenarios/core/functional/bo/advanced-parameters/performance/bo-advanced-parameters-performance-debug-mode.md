---
title: "BO - Advanced Parameters - Performance - Debug mode"
weight: 2
---

# BO - Advanced Parameters - Performance - Debug mode
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1135

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Got to BO>Configure>Advanced Parameters>Performance | The Performance page is displayed |
| Disabled debug mode<br><br>Click to save | Update successful<br><br>Debug mode logo is no longer visible in the header |
| Enabled debug mode<br><br>Click to save | Update successful<br><br>Debug mode logo is visible in the header |
| Enabled all overrides<br><br>Click to save | Update successful |
| Disabled all overrides<br><br>Click to save | Update successful |
