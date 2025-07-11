---
title: "Autoupgrade - CLI - Check/Upgrade/Rollback "
weight: 7
---

# Autoupgrade - CLI - Check/Upgrade/Rollback 
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-9848

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 1.7.7.8 on php 7.1 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the update assistant module. Install it | Module is correctly installed |
| Go to your folder [yourshopname_folder] > module > Autoupgrade | You should have many files and folder, one files named README.md can help you |
| *CLI Check Version of module* <br> * Open a terminal on this folder<br> * Launch the command "php bin/console "<br> * Launch the command "php bin/console --version" | * You should be on the folder modules/autoupgrade<br> * The Terminal should show you some available commands, etc <br> * The terminal answer : "Update assistant 7.0.0" |
| *CLI Check Version Available* <br> * Launch the command "php bin/console update:check-new-version admin-dev" | * The terminal should show a tab with : <br> ** Version | Channel | Type | Information<br> ** 1.7.8.11 | online | minor | the link of the release |
| * Change your PHP to 7.4<br> * Launch the command "php bin/console update:check-new-version admin-dev" | * You should be on php 7.4 thank to the app you used for <br> * The terminal should show a tab with : <br> ** Version | Channel | Type | Information<br> ** 8.2.1 | online | major | the link of the release |
| * Add a zip and xml of a new version on [yourshop]/[admin_folder]/autoupgrade/download<br> * Launch the command "php bin/console update:check-new-version admin-dev" | * You should have your folder set with an index.php file and the two other that you add<br> * The terminal should show a tab with : <br> ** Version | Channel | Type | Information<br> ** 8.2.1 | online | major | the link of the release<br> ** 9.0.0 | local | major | zip : [name of your zip]<br>          |            |              | xml : [name of your xml] |
| *CLI Check Requirement* <br> * Modify any files from the folder of prestashop<br> * Launch the command "php bin/console update:check-requirements admin-dev" | * The file should be modified<br> * The terminal should say : " Result of prerequisite cheks: : Some core files have been altered or removed." and will list the different things different |
| *CLI Create Rollback*<br> * Launch the command "php bin/console backup:create admin-dev" | * The terminal should start with :"INFO - Starting backup..." and end with "INFO - Backup completed successfully." |
| * Launch the command "php bin/console backup:create admin-dev" twice | * The terminal should start with :"INFO - Starting backup..." and end with "INFO - Backup completed successfully." twice |
| *CLI List Rollback* <br> * Launch the command " php bin/console backup:list admin-dev" | * The terminal should show you a tab like that : <br>| Date  | Version | File name |<br>| [date and time] | 1.7.7.8 | V1.7.7.8_ID|<br>| [date and time] | 1.7.7.8 | V1.7.7.8_ID |<br>| [date and time] | 1.7.7.8 | V1.7.7.8_ID | |
| *CLI Delete Rollback*  <br> * Launch the command " php bin/console backup:delete admin-dev"<br> * Launch the command "3" | * The terminal should ask you to select a backup between 0 and 2, the number 3 is to exit the process<br> * Your terminal should act like there is none command launch |
| * Launch the command " php bin/console backup:delete admin-dev"<br> * Launch the command "2" | * The terminal should ask you to select a backup between 0 and 2, the number 3 is to exit the process<br> * Your terminal should say "INFO - The backup file has been successfully deleted" |
| * Launch the command " php bin/console backup:delete --backup=V1.7.7.8_ID admin-dev" | * Your terminal should say "INFO - The backup file has been successfully deleted" |
| *CLI Upgrade*<br> * Launch the command "php bin/console update:start "<br> * Launch the command "php bin/console update:start --xml=prestashop_9.0.0.xml admin-dev"<br> * Launch the command "php bin/console update:start --zip=prestashop_9.0.0.zip admin-dev"<br> * Launch the command "php bin/console update:start --xml=pr2.xml --zip=pr2.zip admin-dev" | * Your terminal should say " Not enough arguments (missing: "admin-dir")."<br> * Your terminal should say "ERROR - Both 'xml' and 'zip' files attributes must be provided to use the local channel."<br> * Your terminal should say "ERROR - Both 'xml' and 'zip' files attributes must be provided to use the local channel."<br> * Your terminal should say "ERROR - File pr2.zip does not exist. Unable to select that channel." |
| * Add another zip of another version on [yourshop]/[admin_folder]/autoupgrade/download<br> * Launch the command "php bin/console update:start --xml=prestashop_9.0.0.xml --zip=prestashop_8.0.3.zip admin-dev" | * You should have two different zip and one xml on the folder<br> * Your terminal should say "ERROR - The PrestaShop version in your archive doesn't match the one in XML file. " |
| * Launch the command "php bin/console update:start  admin-dev" | * The terminal should start with <br>" INFO - Starting update...<br>INFO - Destination version: 8.2.1"<br>and end with : <br>"INFO - The database has been cleaned.<br>INFO - Shop updated to 8.2.1. Congratulations! You can now reactivate your shop." |
| * Change your PHP to 8.1<br> * Launch the command "php bin/console backup:create admin-dev" | * You should be on php 8.1 thank to the app you used for <br> * The terminal should start with :"INFO - Starting backup..." and end with "INFO - Backup completed successfully." |
| * Launch the command "touch config.json"<br> * Open the files "config.json" in modules/autoupgrade<br> * Put the information on it and Save it<br> * Return on the terminal and launch the command "php bin/console update:start --config-file-path=config.json admin-dev" | * A new files named "config.json" should be displayed on the files autoupgrade<br> * You should have a file entirely blank <br> * Your file should be completed <br> * The terminal should say :<br>"INFO - Update process will use archive.<br>INFO - Configuration successfully updated.<br>INFO - Starting update...<br>INFO - Destination version: 9.0.0" |
| *CLI Start Rollback*  <br> * Launch the command " php bin/console backup:restore admin-dev"<br> * Launch the command "2" | * The terminal should ask you to select a backup between 0 and 1, the number 2 is to exit the process<br> * Your terminal should act like there is none command launch |
| * Launch the command " php bin/console backup:delete admin-dev"<br> * Launch the command "0" | * The terminal should ask you to select a backup between 0 and 1, the number 2 is to exit the process<br> * Your terminal should say at start "INFO - Restoring files ..." and end with "INFO - Restoration process done. Congratulations! You can now reactivate your store." |
| * Launch the command "php bin/console update:start --xml=prestashop_9.0.0.xml --zip=prestashop_9.0.0.zip admin-dev" | * The terminal should say :<br>"INFO - Update process will use archive.<br>INFO - Configuration successfully updated.<br>INFO - Starting update...<br>INFO - Destination version: 9.0.0" |
| * Launch the command "php bin/console backup:restore --backup=1.7.7.9_ID admin-dev" | * Your terminal should say at start "INFO - Restoring files ..." and end with "INFO - Restoration process done. Congratulations! You can now reactivate your store." |
