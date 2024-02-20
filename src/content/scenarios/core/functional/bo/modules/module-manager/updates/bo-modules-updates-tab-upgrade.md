---
title: "BO - Modules - Updates tab - Upgrade"
weight: 2
---

# BO - Modules - Updates tab - Upgrade
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-902

## Steps
| Step Description | Expected result |
| ----- | ----- |
| On Bo > Modules > Modules Manager > Updates | Module notifications Updates page displayed |
| If module can be upgraded --> Click on "Upgrade" | h4. A new modal is displayed  :<br><br>*"Are you sure you want to upgrade this module?*<br><br>We strongly advise you to upgrade the modules on maintenance mode to avoid any cache issues." |
| Clic on Cancel | The modal should disapear |
| Click on "Upgrade" next to test module | h4. A new modal is displayed  :<br><br>*"Are you sure you want to upgrade this module?*<br><br>We strongly advise you to upgrade the modules on maintenance mode to avoid any cache issues." |
| Clic on Go to maintenance page | The maintenance page should be displayed |
| Return to  Modules > Modules Manager > Updates | Module notifications Updates page displayed |
| Click on "Upgrade" next to test module | h4. A new modal is displayed  :<br><br>*"Are you sure you want to upgrade this module?*<br><br>We strongly advise you to upgrade the modules on maintenance mode to avoid any cache issues." |
| Click on "Upgrade anyway" | Upgrade action on "Module_Test" succeeded.<br><br>You can now see the "Configure" or "Disable Module" button |
| Refresh the page | Module Test isn't displayed on this page |
| _If there is more than one modules to upgrade,_<br><br>Clic on "upgrade All" button | h4. A new modal is displayed  :<br><br>*"Are you sure you want to upgrade this module?*<br><br>We strongly advise you to upgrade the modules on maintenance mode to avoid any cache issues." |
| Click on "Upgrade anyway" | Upgrade action on all modules should succeeded.<br><br>You can now see the "Configure " or "Disable Module" button of all this module |
