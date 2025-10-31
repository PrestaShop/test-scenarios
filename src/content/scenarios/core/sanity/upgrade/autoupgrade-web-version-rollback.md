---
title: "Autoupgrade - Web Version - Rollback "
weight: 4
---

# Autoupgrade - Web Version - Rollback 
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-9679

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install a fresh 8.0.4 with php 8.1 | * The new shop is installed<br> * The selection to BO or FO is displayed |
| Go to the BO. | Log in page is displayed. |
| Log in with email and password set during installation. | * Connection successful<br> * Dashboard displayed |
| Go to Modules > Module manager. | Module manager page is displayed. |
| Click on the CTA "Upload a module". | Modal "Upload a module" is displayed. |
| Select or drag and drop the .zip. | * The module is installing<br> * The module is installed, the CTA "Configure" is displayed. |
| Close the modal. | * Modal is closed<br> * Module manager page is displayed |
| Refresh the page. | Page is refreshed. |
| Search for "Update". | Update Assistant is displayed. |
| Check for the version. | * The version is the latest in prod. <br><br> * The lastest version in prod is displayed because it is the version available on the marketplace. |
| Go to the Shop Parameters > General. | General > Preferences page is displayed on the "General" tab. |
| Click on the "Maintenance" tab. | "Maintenance" tab is displayed. |
| Click on the toggle "Enable store" | Toggle is in "No" status. |
| Click on the CTA "Add my IP". | IP address is filled. |
| Click on the CTA "Save". | Shop is in maintenance mode. |
| Go to "Update Assistant" module (side board). | * "Update Assistant" module is displayed : <br><br> ** Title : "Welcome to PrestaShop Update Assistant"<br> ** Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> ** CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: [your current version of prestashop]/ Current PHP version: [your current version of php]<br> ** Radio button : PrestaShop {test-param}last version recommended enabled{test-param} [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The recommended version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Radio button : PrestaShop {test-param}last version enabled{test-param} [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| * Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br><br> <br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Go to "Update Assistant" module (side board). | * "Update Assistant" module is displayed : <br><br> * <br> ** Title : "Welcome to PrestaShop Update Assistant"<br> ** Two radio buttons : "Update your store" and "Restore from a backup" <br> ** CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: [your current version of prestashop]/ Current PHP version: [your current version of php]<br> ** Radio button : PrestaShop {test-param}last version recommended enabled{test-param} [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The recommended version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Radio button : PrestaShop {test-param}last version enabled{test-param} [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| * Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br><br> <br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Go to "Update Assistant" module (side board). | * "Update Assistant" module is displayed : <br><br> * <br> ** Title : "Welcome to PrestaShop Update Assistant"<br> ** Two radio buttons : "Update your store" and "Restore from a backup" <br> ** CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: [your current version of prestashop]/ Current PHP version: [your current version of php]<br> ** Radio button : PrestaShop {test-param}last version recommended enabled{test-param} [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The recommended version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Radio button : PrestaShop {test-param}last version enabled{test-param} [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| * Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br><br> <br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Go to "Update Assistant" module (side board). | "Update Assistant" module is displayed : <br> * Title : "Welcome to PrestaShop Update Assistant"<br> * Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> * CTA "Get started" disabled |
| Select the radio button "Restore from a backup" | * "Restore from a backup" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Backup Selection" page is displayed : <br><br> ** Stepper on step one ("1 : Backup Selection")<br> ** Paragraph with "Select the backup you want to restore"<br> ** Droplist with selected " MM/DD/AA,HH/MM [AM/PM] - V8.0.3_AAAAMMDD-HHMMSS-[random number] <br> ** 2 CTA : "Delete selection" and "Restore" |
| Click on the CTA "Delete selection" with trash icon | Modal "Delete backup" is displayed with :<br> * a Trash icon with a background red <br> * a text description : You are about to delete the *[Prestashop_version]_AAAAMMDD-HHMMSS-[8_random_character]* backup made on *[MM/DD/AA HH/MM].* <br> * 2 CTA : "Cancel" and "Delete"(bg : red) |
| Click on :<br><br>* the CTA "Cancel"<br>* OR on the cross<br>* OR outside to the Modal<br>* OR do escape from the keyboard | The modal is closed. |
| Click on the drop list | There are three different backup |
| Click on the first backup of the list | The drop list is closed on the last backup |
| Click on the CTA "Delete selection" with trash icon | Modal "Delete backup" is displayed with :<br> * a Trash icon with a background red <br> * a text description : You are about to delete the *[Prestashop_version]_AAAAMMDD-HHMMSS-[8_random_character]* backup made on *[MM/DD/AA HH/MM].* <br> * 2 CTA : "Cancel" and "Delete"(bg : red) |
| Click on CTA Delete | The modal is closed |
| Click on the drop list | There are two different backup |
| Click on the drop list | the drop list is closed on the last backup |
| Go to folder [yourshop]/[adminDirectory]/autoupgrade/backup | There are 5 files : 2 zip, 2 folder and one index.php files |
| Delete the folder with the same name of the backup selected in the droplist | The folder is deleted |
| Return on web page and click on Restore button | Drop list is reloaded without the same backup selected on drop list :<br><br> * Error message : "Invalid configuration, backup [backupName] doesn't exist" |
| Do a right click on the drop list | There are the different option of a right click |
| Click on "inspect" | * There are all different specification of the page <br>* The droplist's part is highlighted |
| Change the value of the first option on the drop list | The value is changed |
| Click on CTA Restore | Drop list is reloaded with the same backup selected on drop list :<br><br>* Error message :"Invalid configuration, Backup [value] doesn't exist" |
| Click on CTA Restore | Modal "Restore from a backup?" is displayed with :<br> * a text description : You are about to restore *[PrestashopVersion]* using the backup from *[MM/DD/AA, HH/MM].*  <br> * 2 CTA : "Cancel" and "Restore"(bg:blue) |
| Click on blue CTA Restore | The page "Restore" is displayed :<br><br>* Stepper on step 2 ("Restore")<br>* Loading bar with the current process <br>* Details of the current process are listed |
| Wait until the end of the restore | The page "Post-restore checklist" is displayed : <br><br> * Stepper on step 3 ('Post-restore")<br> * Success Alert : "Your restoration is complete"<br> * Subtitle : "Next step" and Troubleshooting <br> * A link : "Download restore logs"<br> * 2 CTAs : "Exit" and " Open developer documentation" |
| Click on the link "Download restore logs" | The download of the YYYY-MM-DD-HHMMSS-restore.txt is launched by the browser. |
| Click on CTA "Open Developper Document" | A new tab is opened : "Post-restore checklist" |
| Close the tab | The module tab is displayed. |
| Click on the CTA "Exit" | Redirection to "[admin_folder]/index" |
| Go to "Update Assistant" module (side board). | "Update Assistant" module is displayed : <br> * Title : "Welcome to PrestaShop Update Assistant"<br> * Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> * CTA "Get started" disabled |
| Select the radio button "Restore from a backup" | * "Restore from a backup" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Backup Selection" page is displayed : <br><br> ** Stepper on step one ("1 : Backup Selection")<br> ** Paragraph with "Select the backup you want to restore"<br> ** Droplist with selected " MM/DD/AA,HH/MM [AM/PM] - V8.0.3_AAAAMMDD-HHMMSS-[random number] <br> ** 2 CTA : "Delete selection" and "Restore" |
| Click on the CTA "Delete selection" with trash icon | Modal "Delete backup" is displayed with :<br> * a Trash icon with a background red <br> * a text description : You are about to delete the *[Prestashop_version]_AAAAMMDD-HHMMSS-[8_random_character]* backup made on *[MM/DD/AA HH/MM].* <br> * 2 CTA : "Cancel" and "Delete"(bg : red) |
| Click on the CTA "Delete selection" with trash icon | Modal "Delete backup" is displayed with :<br> * a Trash icon with a background red <br> * a text description : You are about to delete the *[Prestashop_version]_AAAAMMDD-HHMMSS-[8_random_character]* backup made on *[MM/DD/AA HH/MM]*. As it's your only backup, you will be redirected to the module's home page.<br> * 2 CTA : "Cancel" and "Delete"(bg : red) |
| * Click on Delete button | "Update Assistant" module is displayed : <br><br>* Title : "Welcome to PrestaShop Update Assistant"<br>* Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br>* CTA "Get started" disabled |
| * Go to "https://eu.mixpanel.com/project/2828312/view/3362352/app/events#9ad5X2HJqJ7y" and set on filter the parameters | You should see : <br> * [SUE] Upgrade Launched<br> * [SUE] Upgrade succeeded<br> * [SUE] Restore launched<br> * [SUE] Restore succeeded <br><br>With the same User ID and php write like "X.X.XX" |
