---
title: "Autoupgrade - Middleware on Backup Part"
weight: 18
---

# Autoupgrade - Middleware on Backup Part
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-11597

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
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: [your current version of prestashop]/ Current PHP version: [your current version of php]<br> ** Radio button : PrestaShop [last version enabled] [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| * Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br><br> <br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Go to "Update Assistant" module (side board). | * "Update Assistant" module is displayed : <br><br> * <br> ** Title : "Welcome to PrestaShop Update Assistant"<br> ** Two radio buttons : "Update your store" and "Restore from a backup" <br> ** CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: [your current version of prestashop]/ Current PHP version: [your current version of php]<br> ** Radio button : PrestaShop [last version enabled] [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| * Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br><br> <br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Go to "Update Assistant" module (side board). | "Update Assistant" module is displayed : <br> * Title : "Welcome to PrestaShop Update Assistant"<br> * Two radio buttons : "Update your store" and "Restore from a backup" <br> * CTA "Get started" disabled |
| Select the radio button "Restore from backup". | * "Restore rom backup" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Backup Selection" page is displayed : <br><br> * <br> ** Stepper on step one ("1 : Backup Selection")<br> ** Paragraph with "Select the backup you want to restore"<br> ** Droplist with selected " MM/DD/AA,HH/MM [AM/PM] - V8.0.4_AAAAMMDD-HHMMSS-[random number] <br> ** 2 CTA : "Delete selection" and "Restore" |
| Click on the drop list | There are two different backup |
| Click on the second backup of the list | The drop list is closed on the second backup |
| Reload the page"Backup selection" | "Backup selection" page is displayed with the second backup |
| Delete the "restore_config.var" files  from [yourshop]/[adminfolder]/autoupgrade | The file is deleted |
| Reload the page"Backup Selection" | "Backup selection" page is displayed with the first backup |
| in the link ,<br>replace "{color:#de350b}&route=restore-page-backup-selection{color}" <br>by <br>"{color:#00875a}&route=restore-page-restore{color}" | "Backup selection" page is displayed |
| Click on the drop list | There are two different backup |
| Click on the second backup of the list | The drop list is closed on the second backup |
| in the link ,<br>replace "{color:#de350b}&route=restore-page-backup-selection{color}" <br>by <br>"{color:#00875a}&route=restore-page-restore{color}" | "Restore" page is displayed |
| Wait until the end of the Restore | The page "Post-restore checklist" is displayed : <br><br>* Stepper on step 3 ('Post-restore")<br>* Success Alert : "Your restoration is complete"<br>* Subtitle : "Next step" and Troubleshooting <br>* A link : "Download restore logs"<br>* 2 CTAs : "Exit" and " Open developer documentation" |
| Reload the page"Post Restore checklist" | "Post Restore Checklist" page is displayed |
| Delete the last "[...]-restore.txt" files  from [yourshop]/[adminfolder]/autoupgrade/logs | The file is deleted |
| Reload the page"Post Restore checklist" | "Welcome" page is displayed |
| Select the radio button "Restore from backup". | * "Restore rom backup" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Backup Selection" page is displayed : <br><br> * <br> ** Stepper on step one ("1 : Backup Selection")<br> ** Paragraph with "Select the backup you want to restore"<br> ** Droplist with selected " MM/DD/AA,HH/MM [AM/PM] - V8.0.4_AAAAMMDD-HHMMSS-[random number] <br> ** 2 CTA : "Delete selection" and "Restore" |
| Delete the two different backup | You should have two different modal :<br> * One to inform you that you will delete the backup<br> * The other one to inform you that you will delete the backup and you'll be redirected to the welcome page<br><br>After the deletion, you'll be redirected to the "Welcome to PrestaShop Update Assistant" page |
| Click on the CTA "Delete selection" with trash icon | Modal "Delete backup" is displayed with :<br> * a Trash icon with a background red <br> * a text description : You are about to delete the *[Prestashop_version]_AAAAMMDD-HHMMSS-[8_random_character]* backup made on *[MM/DD/AA HH/MM].* <br> * 2 CTA : "Cancel" and "Delete"(bg : red) |
| Click on CTA Delete | The modal is closed |
| Click on the CTA "Delete selection" with trash icon | Modal "Delete backup" is displayed with :<br> * a Trash icon with a background red <br> * a text description : You are about to delete the *[Prestashop_version]_AAAAMMDD-HHMMSS-[8_random_character]* backup made on *[MM/DD/AA HH/MM]*. As it's your only backup, you will be redirected to the module's home page.<br> * 2 CTA : "Cancel" and "Delete"(bg : red) |
| * Click on Delete button | "Update Assistant" module is displayed : <br><br>* Title : "Welcome to PrestaShop Update Assistant"<br>* Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br>* CTA "Get started" disabled |
| in the link ,<br>replace "{color:#de350b}&route=home-page{color}" <br>by <br>"{color:#00875a}&route=restore-page-backup-selection{color}" | "Welcope page" is displayed |
