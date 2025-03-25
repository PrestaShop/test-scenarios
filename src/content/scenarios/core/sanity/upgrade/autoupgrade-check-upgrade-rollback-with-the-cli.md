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
| Install A fresh 1.7.7.8 with php 7.1 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the 1-click Install" module. Install it" | Module is correctly installed |
| Go to your folder [yourshopname_folder] > module > Autoupgrade | You should have many files and folder, one files named README.md can help you |
| *CLI Check Version of module* <br> * Open a terminal on this folder<br> * Launch the command "php bin/console "<br> * Launch the command "php bin/console --version" | * You should be on the folder modules/autoupgrade<br> * The Terminal should show you some available commands, etc <br> * The terminal answer : "Update assistant 7.0.0" |
| *CLI Check Version Available* <br> * Launch the command "php bin/console update:check-new-version admin-dev" | * The terminal should show a tab with : <br> ** Version | Channel | Type | Information<br> ** 1.7.8.11 | online | minor | the link of the release |
| * Change your PHP to 7.4<br> * Launch the command "php bin/console update:check-new-version admin-dev" | * You should be on php 7.4 thank to the app you used for <br> * The terminal should show a tab with : <br> ** Version | Channel | Type | Information<br> ** 8.2.1 | online | major | the link of the release |
| * Change your PHP to 7.4<br> * Launch the command "php bin/console update:check-new-version admin-dev" | * You should be on php 7.4 thank to the app you used for <br> * The terminal should show a tab with : <br> ** Version | Channel | Type | Information<br> ** 8.2.1 | online | major | the link of the release |
| *CLI Check Requirement* <br> * Launch the command "php bin/console update:check-requirements admin-dev" | * The terminal should say : " Result of prerequisite cheks: [...]" |
| *CLI Upgrade*<br> * Launch the command "touch config.json"<br> * Open the files "config.json" in modules/autoupgrade<br> * Put the information on it and Save it<br> * Return on the terminal and launch the command "php bin/console update:start --config-file-path=config.json admin-dev" | * A new files named "config.json" should be displayed on the files autoupgrade<br> * You should have a file entirely blank <br> * Your file should be completed <br> * Upgrade should be launched |
| *Rollback CLI* <br> * Launch the command "php bin/console backup:restore --backup=[backup-name] admin-dev" | * The rollback should be launched |
