---
title: "Autoupgrade - CLI - Check/Upgrade/Rollback "
weight: 19
---

# Autoupgrade - CLI - Check/Upgrade/Rollback 
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-12196

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh 1.7.7.8 on php 7.1 | A selection between BO and FO is displayed |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Catalog" page" | Module Catalog page is displayed correctly |
| Search for the update assistant module and Install it | Module is correctly installed |
| Go to your folder [yourshopname_folder] > module > Autoupgrade | You should have many files and folder, one files named README.md can help you |
| *CLI Check Version of module* <br><br>Open a terminal on this folder | Terminal is open on the folder modules/autoupgrade |
| Launch "php bin/console" | Terminal show you available command with bin/console |
| Launch "php bin/console --version" | Terminal reply : "Update assistant {test-param}Version_Autoupgrade{test-param} " |
| *CLI Check Version Available* <br><br>Launch"php bin/console update:check-new-version admin-dev" | Terminal display a tab : <br>||Version||Channel||Type||Information||<br>|{test-param}Last_version_178{test-param} |online_recommended|minor|release's link| |
| Change your PHP to 7.4 | Php is set to php 7.4 |
| Launch "php bin/console update:check-new-version admin-dev" | Terminal display a tab : <br>||Version||Channel||Type||Information||<br>|{test-param}Last_version_8{test-param} |online_recommended|major|release's link| |
| Add a zip and xml of {test-param}Last_version_9{test-param}  on [yourshop]/[admin_folder]/autoupgrade/download | Folder contain : <br> * Index. php <br> * {test-param}Last_version_9{test-param} .zip<br> * {test-param}Last_version_9{test-param} .xml |
| Launch "php bin/console update:check-new-version admin-dev" | Terminal display a tab : <br>||Version||Channel||Type||Information||<br>|{test-param}Last_version_8{test-param} |online_recommended|major|release's link|<br>|{test-param}Last_version_9{test-param} |local| major|ZIP:  {test-param}Last_version_9{test-param} .zip|<br>| | | major|XML:  {test-param}Last_version_9{test-param} .xml| |
| *CLI Check Requirement* <br><br>Modify any files from the folder of prestashop | The file is modified |
| Launch "php bin/console update:check-requirements [admin_folder]" | Terminal display: " Result of prerequisite checks: : Some core files have been altered or removed." and list the different files modified |
| *CLI Create Rollback*<br><br>Launch "php bin/console backup:create admin-dev" | Terminal display at :<br> * start :"INFO - Starting backup..." <br> * end  "INFO - Backup completed successfully." |
| Launch "php bin/console backup:create admin-dev" twice | Terminal display at :<br> * start :"INFO - Starting backup..." <br> * end  "INFO - Backup completed successfully."<br><br>Twice |
| *CLI List Rollback* <br><br>Launch " php bin/console backup:list admin-dev" | Terminal display a tab: <br>|Date |Version|File name|<br>|[date and time] |1.7.7.8|V1.7.7.8_ID|<br>|[date and time]|1.7.7.8|V1.7.7.8_ID|<br>|[date and time]|1.7.7.8|V1.7.7.8_ID| |
| *CLI Delete Rollback*  <br><br>Launch " php bin/console backup:delete admin-dev" | Terminal display a choice of backup between 0 and 2, the number 3 is to exit the process |
| Launch "3" | Terminal ask for a new command |
| Launch " php bin/console backup:delete admin-dev" | Terminal display a choice of backup between 0 and 2, the number 3 is to exit the process |
| Launch "2" | Terminal display "INFO - The backup file has been successfully deleted" |
| Launch "php bin/console backup:delete --backup=V1.7.7.8_ID admin-dev" | Terminal display "INFO - The backup file has been successfully deleted" |
| *CLI Upgrade*<br><br>Launch "php bin/console update:start " | Terminal display " Not enough arguments (missing: "admin-dir")." |
| Launch "php bin/console update:start --xml=prestashop_{test-param}Last_version_9{test-param}.xml admin-dev" | Terminal display "ERROR - Both 'xml' and 'zip' files attributes must be provided to use the local channel." |
| Launch "php bin/console update:start --zip=prestashop_{test-param}Last_version_9{test-param} .zip admin-dev" | Terminal display "ERROR - Both 'xml' and 'zip' files attributes must be provided to use the local channel." |
| Launch "php bin/console update:start --xml=pr2.xml --zip=pr2.zip admin-dev" | Terminal display "ERROR - File pr2.zip does not exist. Unable to select that channel." |
| Add a zip on [yourshop]/[admin_folder]/autoupgrade/download | Two different zip and xml are in the folder |
| Launch "php bin/console update:start --xml=prestashop_{test-param}Last_version_9{test-param} .xml --zip=prestashop_{test-param}Last_version_8{test-param} .zip admin-dev" | Terminal display "ERROR - The PrestaShop version in your archive doesn't match the one in XML file. " |
| Launch "php bin/console update:start  admin-dev" | Terminal display at : <br> * Start : <br>" INFO - Starting update...<br>INFO - Destination version: {test-param}Last_version_8{test-param} "<br> * End :<br>"INFO - The database has been cleaned.<br>INFO - Shop updated to {test-param}Last_version_8{test-param} . Congratulations! You can now reactivate your shop." |
| Change your PHP to 8.1 | Php is set to php 8.1 |
| Launch "php bin/console backup:create admin-dev" | Terminal display at :<br> * start :"INFO - Starting backup..." <br> * end  "INFO - Backup completed successfully." |
| Launch "touch config.json" | New files named "config.json" is displayed on the folder autoupgrade |
| Open the files "config.json" in modules/autoupgrade | New file with nothing on it is displayed |
| Put the information on it and Save it | File is set up |
| Return on terminal and launch "php bin/console update:start --config-file-path=config.json admin-dev" | Terminal display :<br>"INFO - Update process will use archive.<br>INFO - Configuration successfully updated.<br>INFO - Starting update...<br>INFO - Destination version: {test-param}Last_version_9{test-param}" |
| *CLI Start Rollback*  <br><br>Launch " php bin/console backup:restore admin-dev" | Terminal ask to select a backup between 0 and 1, the number 2 is to exit the process |
| Launch "2" | Terminal ask for a new command |
| Launch " php bin/console backup:restore admin-dev" | Terminal ask to select a backup between 0 and 1, the number 2 is to exit the process |
| Launch command "0" | Terminal display at :<br> * start :"INFO - Restoring files ..." <br> * end  "INFO - Restoration process done. Congratulations! You can now reactivate your store." |
| Launch command "php bin/console update:start --xml=prestashop_{test-param}Last_version_9{test-param} .xml --zip=prestashop_{test-param}Last_version_9{test-param} .zip admin-dev" | Terminal display :<br>"INFO - Update process will use archive.<br>INFO - Configuration successfully updated.<br>INFO - Starting update...<br>INFO - Destination version: {test-param}Last_version_9{test-param} " |
| Launch command "php bin/console backup:restore --backup=1.7.7.8_ID admin-dev" | Terminal display at :<br> * start :"INFO - Restoring files ..." <br> * end  "INFO - Restoration process done. Congratulations! You can now reactivate your store.." |
