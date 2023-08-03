---
title: "BO - Modules - Disable / Enable desktop and mobile"
weight: 4
---

# BO - Modules - Disable / Enable desktop and mobile
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-877

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Login in BO | Dashboarb page should be displayed |
| Go to modules manager page | The page title should contains 'Module manager' |
| Set the name of a module in the search bar > click on the search button | The searched module should be displayed  ( only one result should be exist contains the searched module name  ) |
| If the searched module is already *Enabled* > click on the button Disable > confirm the displayed pop-up | A success message contains "Disable action"  should be appear |
| If the searched module is  already *Disabled* > click on the button Enable | A success message contains "Enable action"  should be appear |
| Click on the drop-down button | A list of action should be available |
| Choose the action Disable Mobile | A success message contain "Disable mobile"  should be appear |
| Click on the drop-down button > click on the action Enable mobile | A success message contains "Enable mobile"  should be appear |
