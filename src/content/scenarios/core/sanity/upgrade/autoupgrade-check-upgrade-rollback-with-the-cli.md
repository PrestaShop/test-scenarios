---
title: "Autoupgrade - Check/Upgrade/Rollback with the CLI"
weight: 14
---

# Autoupgrade - Check/Upgrade/Rollback with the CLI
## Details
* **Component** : Core
* **Status** : Sandbox
* **Scenario** : https://forge.prestashop.com/browse/TEST-9848

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 8.1.5 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the 1-click Install" module. Install it" | Module is correctly installed |
| Go to your folder [yourshopname_folder] > module > Autoupgrade | You should have many files and folder, one files named README.md can help you |
| *CLI Check* <br> * Open a terminal on this folder<br> * Launch the command "php bin/console "<br> * Launch the command "php bin/console update:check admin-dev" | * You should be on the folder modules/autoupgrade<br> * The Terminal should show you some available commands, etc <br> * The terminal should say : " Result of prerequisite cheks: [...]" |
| *CLI Upgrade*<br> * Launch the command "touch config.json"<br> * Open the files "config.json" in modules/autoupgrade<br> * Put the information on it and Save it<br> * Return on the terminal and launch the command "php bin/console update:start --config-file-path=config.json admin-dev" | * A new files named "config.json" should be displayed on the files autoupgrade<br> * You should have a file entirely blank <br> * Your file should be completed <br> * Upgrade should be launched |
| *Rollback CLI* <br> * Launch the command "php bin/console backup:restore --backup=[backup-name] admin-dev" | * The rollback should be launched |
