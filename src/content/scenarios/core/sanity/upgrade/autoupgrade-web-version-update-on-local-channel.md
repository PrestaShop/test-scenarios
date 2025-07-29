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
| Click on the CTA "Get started". | A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * An image of folder with "You're up to date", "Current PrestaShop version: [yourLastPrestaVersion]" and "Current PHP version: 8.1.xx"<br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Put a zip and xml with a greater version of 8.2.x in [yourshop]/[adminfolder]/autoupgrade/download | There are a zip, an xml and an index.php files in your folder |
| Put another zip and xml with a greater version of 8.2.x in [yourshop]/[adminfolder]/autoupgrade/download | There are two zip, two xml and an index.php files in your folder |
| Reload the page "Version choice". | * "Version choice" page is displayed with : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Info text :  "You're up to date", "Current PrestaShop version: [yourLastPrestaVersion]" and "Current PHP version: 8.1.xx"<br> ** Info text "You are already using the latest PrestaShop version available but you can update to the version of your choice from a local archive. "<br> ** Radio button : "Local archive" with description "Save the archive file of the version you want to update to in the following directory: /your-admin-directory/autoupgrade/download/ "<br> ** CTA : "Next" disabled |
| Select the Radio button "Local archive" | * You should have two drop list :<br> ** One with title : "Archive to use*" and in the drop list "Select an archive"<br> ** One with title : "XML file to use*" and in the drop list "Select a file" |
| Clic on the first drop list | You still have "Select an archive" selected and "{color:#4c9aff}*[newzip1.zip]*{color}","{color:#ffab00}*[newzip2.zip]*{color}" don't selected |
| Select "*{color:#4c9aff}[newzip1.zip]{color}*" | In the drop list, "*{color:#4c9aff}[newzip1.zip{color}*]" is selected |
| Clic on the second drop list | * You still have "Select a file" selected and "{color:#4c9aff}*[newxml1.xml]*{color}","{color:#ffab00}*[newxml2.xml]*{color}" don't selected |
| Select "*{color:#ffab00}[newxml2.xml]{color}*" | * In the drop list, "{color:#ffab00}*[newxml2.xml]*{color}" is selected<br><br><br> * Checking requirement is launched then is finished :<br> ** Alert info "The PrestaShop version in your archive doesn't match the one in XML file. Please fix this issue and try again."<br> ** CTA "Next" is still disabled |
| Clic on the first drop list | * You have "{color:#4c9aff}*[newzip1.zip]*{color}" selected and "Select an archive","{color:#ffab00}*[newzip2.zip]*{color}" don't selected |
| Select "*{color:#4c9aff}[newzip1.zip]{color}*" | In the drop list, "*{color:#4c9aff}[newzip1.zip{color}*]" is selected |
| Clic on the second drop list | * You still have "{color:#ffab00}*[newxml2.xml]*{color}" selected and "{color:#4c9aff}*[newxml1.xml]*{color}","Select a file" don't selected |
| Select "*{color:#4c9aff}[newxml1.xml]{color}*" | * In the drop list, "{color:#4c9aff}*[newxml1.xml]*{color}" is selected<br><br> * Checking requirement is launched then is finished :<br> ** "Please consider these warnings before continuing with the update. Read more in the [developer documentation|https://devdocs.prestashop-project.org/9/basics/keeping-up-to-date/update/update-from-the-back-office]. "<br> ** Warning "We were unable to check your PHP compatibility with PrestaShop *{color:#4c9aff}[versionOfYourZip]{color}*{color:#4c9aff} {color}<br> ** CTA "Next" enabled |
| Click on the CTA "Next". | "Update options" page is displayed :  <br> * Stepper on step 2 ("Update options")<br> * 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> * CTA "Next" enabled |
| Click on the CTA "Next". | "Back up your store" page is displayed :  <br> * Stepper on step 3 ("Backup")<br> * Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> * Toggle : "Include images in your backup" on Yes status<br> * 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup. | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Click on the CTA "Start update". | The modal "Start Update?" is displayed : <br> * Text : "You are about to launch the update, do you want to continue?"<br> * 2 CTAs : "Cancel" and "{color:#0747A6}_cutest rocket_{color} Start Update " (both enabled) |
| Click on the CTA "{color:#0747a6}_cutest rocket_ {color}Start update". | The page "Update" is displayed :<br> * Stepper on step 4 ("Update")<br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the update. | The page "Post-update checklist" is displayed : <br> * Stepper on step 5 ("Post-update")<br> * Success alert : "Your store has been updated to PrestaShop version 9.x.x"<br> * Subtitles : "Next step" and "Troubleshooting"<br> * Two links : "Download update logs" and "Module Manager"<br> * 2 CTAs : "Exit" and "Open developer documentation" |
| Click on the link "Module Manager". | The modal "Access to the Module Manager?" is displayed :<br> * Text : "To reach the module manager, you will be logged out of your session and will have to log in again. Do you want to continue?"<br> * Two CTAs : "Cancel" and "Go to Module Manager" |
| Clic on CTA "Go to the Module Manager" | Redirection to "[admin_folder]/index" (BO login page). |
| Log in with email and password set during installation. | * Connection successful<br> * module manager displayed |
| * Go to "https://eu.mixpanel.com/project/2828312/view/3362352/app/events#9ad5X2HJqJ7y" | You should see : <br> * [SUE] Module Manager clicked from post-update<br><br>With : <br> * autoupgrade_version<br> * bo_language<br> * bo_timezone<br> * Locale<br> * module<br> * php_version<br> * id<br> * segment_source_name<br> * ps_version<br> * source |
