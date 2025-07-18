---
title: "Autoupgrade - Web Version - Update on local channel"
weight: 8
---

# Autoupgrade - Web Version - Update on local channel
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10739

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install A fresh last version of prestashop with php 8.1 | You should have the selection of where in your shop you want to go ( BO or FO ) |
| Go to the BO | You should have your dashboard showed |
| Go to the Module Manager " page" | Module Manager page is displayed correctly |
| * Search for the "update assistant" module.<br> * Install it | * Update assistant should have "The Update Assistant module helps you backup, update and restore your PrestaShop store. With just a few clicks, you can move to the latest version of PrestaShop with confidence." as description <br> * Module is correctly installed |
| Go to the Shop Parameters > General. | General > Preferences page is displayed on the "General" tab. |
| Click on the "Maintenance" tab. | "Maintenance" tab is displayed. |
| Click on the toggle "Enable store" | Toggle is in "No" status. |
| Click on the CTA "Add my IP". | IP address is filled. |
| Click on the CTA "Save". | Shop is in maintenance mode. |
| Go to "Update Assistant" module (side board). | "Update Assistant" module is displayed : <br> * Title : "Welcome to PrestaShop Update Assistant"<br> * Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> * CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.9 / Current PHP version: 7.1.xx<br> * Radio button : PrestaShop 1.7.8.xx [Patch version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| * Put a zip and xml from a new version in [yourshop]/[adminfolder]/autoupgrade/download | * It should have a zip, an xml and an index.php files in your folder |
| * Put another zip and xml from a new version in [yourshop]/[adminfolder]/autoupgrade/download | * It should have two zip, two xml and an index.php files in your folder |
| * Return on your prestashop and reload the page | * You shouldn't have the image but you still have a green notification "You're up to date" and "Current PrestaShop version: [yourLastPrestaVersion]<br>Current PHP version: [YourPHP] "<br> * You should have : "You are already using the latest PrestaShop version available but you can update to the version of your choice from a local archive. "<br> * You should have a Radio button with "Local archive" in title and "Save the archive file of the version you want to update to in the following directory: /your-admin-directory/autoupgrade/download/ " in description |
| * Clic on the Radio button next to "Local archive"<br> * Clic on the first drop list <br> * Select your zip folder <br> * Clic on the second drop list<br> * Select the secon xml folder | * You should have two drop list :<br> ** One with title : "Archive to use*" and in the drop list "Select an archive"<br> ** One with title : "XML file to use*" and in the drop list "Select a file"<br> * You still have "Select an archive" selected and you have the zip name that you drop on your foler <br> * In the drop list, you should have the name of your selected zip <br> * You still have "Select a file" selected and you have the xml name that you drop on your foler <br> * In the drop list, you should have the name of your selected xml and the checking requirement should be started |
| * The check is finished | * You should have a yellow advertising with "The PrestaShop version in your archive doesn't match the one in XML file. Please fix this issue and try again. "and the button "Next" should still be  disabled |
| * Clic on the first drop list <br> * Select your zip folder <br> * Clic on the second drop list<br> * Select your xml folder | * You still have "Select an archive" selected and you have the zip name that you drop on your foler <br> * In the drop list, you should have the name of your selected zip <br> * You still have "Select a file" selected and you have the xml name that you drop on your foler <br> * In the drop list, you should have the name of your selected xml and the checking requirement should be started |
| * The check is finished | * You should have some warning like "We were unable to check your PHP compatibility with PrestaShop [PrestashopVersionAimed] "and the button "Next" should be enabled |
| * Clic on the "Next" Button | * You should be on the "Update option" page with : <br> ** The stepper set on 2 : Update options <br> ** 3 checkbox named " Deactivate non-native modules ",  "Regenerate email templates" , " Disable all overrides "  with details about them under there name <br> ** "Next" Button enabled |
| Clic on the "Next" Button | * You should be on the "Back up your store" page with : <br> ** The stepper should be on 3 : Backup<br> ** sub title "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Checkboxe : "Include images in your backup"<br> ** 2 buttons : "Update without backup" and "launch backup" |
| Click on "Launch Backup" | You should have a modal with <br> * title : " Start backup? "<br> * Sub title : "Your files, database, and images will be backed up."<br> * 2 button : "Cancel" and " Start Backup |
| Click on the cross or elsewhere the module | The modal should be close and you 'll be on the page "Back up your store" |
| Click on "Update without backup" | You should have a modal with <br> * title : " Start update? "<br> * Sub title : "Before starting the update, make sure you have a complete and recent backup of your store (database, files, and images)."<br> * a Check box : "I have made my own backup and can restore it manually if a problem occur."<br> * 2 button : "Cancel" and " Start update", the last one is disabled |
| * Click on the checkbox "I have made my own backup (...)" <br> * Click on the cross or elsewhere the module | * The button "Start Update" should be enabled <br>* The modal should be close and you 'll be on the page "Back up your store" |
| Click on "Launch Backup" | You should have a modal with <br> * title : " Start backup? "<br> * Sub title : "Your files, database, and images will be backed up."<br> * 2 button : "Cancel" and " Start Backup" with a little icon on start backup |
| * Click on "Start Backup" | * You should be on the page "Backup" with : <br> ** The current process writted<br> ** a load bar<br> ** The details of the current process on a second tab |
| Wait until the end of the backup | You should have be on a new page with <br> * title : " Back up your store"<br> * A green notification : "Backup completed"<br> * A link : "Download backup logs"<br> * 1 button : "Start Update"" |
| Click on Download backup logs | The download of the backup on txt should be launched by your bowser |
| Click on "Start Update" | You should have a modal with <br> * title : " Start Update ? "<br> * Sub title : "You are about to launch the update, do you want to continue?"<br> * 2 button : "Cancel" and " Start Update " the last button should have a picture of a rocket on it |
| * Click on "Start Update" | * You should be on the page "Update" with : <br> ** The stepper should be on 4 : Update<br> ** The current process writted<br> ** a load bar<br> ** The details of the current process on a second tab |
| Wait until the end of the update | You should have be on a new page with <br> * title : " Post-update checklist "<br> * Stepper should be on "5 : Post-update"<br> * A green notification : "Your store has been updated to PrestaShop version [versionYouUseForUpgrade]"<br> * Sub title : "Next step" and Troubleshooting <br> * Two link : "Download update logs" and "Module Manager<br> * 2 button : "Exit" and " Open developer documentation" |
| * Click on "Download update logs" <br> * Click on "Open Developper Document"<br> * You can close the new tab showed | * The download of the update on txt should be launched by your bowser<br> * A new tab should be open with the name "Post-update checklist" <br> * You'll return on the post-update checklist |
| Click on "Module Manager" | A new modal should be displayed with : <br> * title : "Access to the Modue Manager?"<br> * Description "To reach the module manager,you will be logged out of your session and will have to log in again. Do you want to continue?"<br> * a cross<br> * Two button : "Cancel" and "Go to Module Manager" |
| Clic on "Go to the Module Manager" | You should be redirected to the log in page |
| * Set your connection information <br> * click on log in | * Your information should be set up <br> * You should be on the module manager with the new version number of prestashop in the top left, just after the word Prestashop |
| * Go to "https://eu.mixpanel.com/project/2828312/view/3362352/app/events#9ad5X2HJqJ7y"<br> * set on filter the parameters | You should see : <br> * [SUE] Module Manager clicked from post-update<br><br>With : <br> * autoupgrade_version<br> * bo_language<br> * bo_timezone<br> * Locale<br> * module<br> * php_version<br> * id<br> * segment_source_name<br> * ps_version<br> * source |
