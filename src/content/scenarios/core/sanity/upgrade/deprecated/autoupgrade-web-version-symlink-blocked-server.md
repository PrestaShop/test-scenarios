---
title: "Autoupgrade - Web Version -  symlink - blocked server"
weight: 14
---

# Autoupgrade - Web Version -  symlink - blocked server
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-11754

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
| Go to "Update Assistant" module (side board). | "Update Assistant" module is displayed : <br> * Title : "Welcome to PrestaShop Update Assistant"<br> * Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> * CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: [your current version of prestashop]/ Current PHP version: [your current version of php]<br> ** Radio button : PrestaShop [last version enabled] [(Patch/minor or Major) version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| Clic on the Radio button next to "Prestashop [last version]" | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| Change the php.ini to block symlink, <br>replace : <br>*{color:#FF0000}; disable_functions=symlink{color}*<br>by<br>*{color:#00875a}disable_functions=symlink{color}* | Php is modified. |
| Restart your apache service | Your command is launched |
| Reload the page "Version choice" | * Checking requirement is launched then is finished :<br><br> * <br> ** "Once all the following conditions are met, you can continue with the update. Read more in the developer documentation. "<br> ** Error "The following PHP functions need to be allowed: symlink"<br> ** CTA "Next" is disabled |
| Put a zip and xml with a greater version of 9.x.x in [yourshop]/[adminfolder]/autoupgrade/download | There are a zip, an xml and an index.php files in your folder |
| Reload the page "Version choice". | * "Version choice" page is displayed with : <br><br> * <br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: [your current version of prestashop]/ Current PHP version: [your current version of php]<br> ** Radio button : "Local archive" with description "Save the archive file of the version you want to update to in the following directory: /your-admin-directory/autoupgrade/download/ "<br> ** CTA : "Next" disabled |
| Select the Radio button "Local archive" | * You should have two drop list :<br> ** One with title : "Archive to use*" and in the drop list "Select an archive"<br> ** One with title : "XML file to use*" and in the drop list "Select a file" |
| Clic on the first drop list | You still have "Select an archive" selected and "{color:#4c9aff}*[newzip1.zip]*{color}" don't selected |
| Select "*{color:#4c9aff}[newzip1.zip]{color}*" | In the drop list, "*{color:#4c9aff}[newzip1.zip{color}*]" is selected |
| Clic on the second drop list | * You still have "Select a file" selected and "{color:#4c9aff}*[newxml1.xml]*{color}" don't selected |
| Select "*{color:#4c9aff}[newxml1.xml]{color}*" | * In the drop list, "{color:#4c9aff}*[newxml1.xml]*{color}" is selected<br><br> * Checking requirement is launched then is finished :<br> ** "Please consider these warnings before continuing with the update. Read more in the [developer documentation|https://devdocs.prestashop-project.org/9/basics/keeping-up-to-date/update/update-from-the-back-office]. "<br> ** Warnings : "We were unable to check your PHP compatibility with PrestaShop *{color:#4c9aff}[versionOfYourZip]{color}*" and "Updates to this PrestaShop version are not officially supported by the Update Assistant module."{<br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Launch backup". | Modal "Start backup?" is displayed : <br> * Text : "Your files, database, and images will be backed up."<br> * 2 CTAs : "Cancel" and "Start backup" |
| Click on the CTA "Start Backup". | The "Backup" page is displayed :<br><br> <br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the backup | The title is modified : " Back up your store" : <br> * The success alert "Backup completed" is displayed<br> * CTA "Download backup logs"<br> * CTA : "Start update" |
| Click on the CTA "Start update". | The modal "Start Update?" is displayed : <br> * Text : "You are about to launch the update, do you want to continue?"<br> * 2 CTAs : "Cancel" and "{color:#0747A6}_cutest rocket_{color} Start Update " (both enabled) |
| Click on the CTA "{color:#0747a6}_cutest rocket_ {color}Start update". | The page "Update" is displayed :<br> * Stepper on step 4 ("Update")<br> * loading bar with the current process <br> * details of the current process are listed |
| Wait until the end of the update. | The page "Post-update checklist" is displayed : <br> * Stepper on step 5 ("Post-update")<br> * Success alert : "Your store has been updated to PrestaShop version 8.2.x"<br> * Subtitles : "Next step" and "Troubleshooting"<br> * Two links : "Download update logs" and "Module Manager"<br> * 2 CTAs : "Exit" and "Open developer documentation" |
| Click on the CTA "Exit". | Redirection to "[admin_folder]/index" (BO login page). |
| Log in with email and password set during installation. | * Connection successful<br> * Dashboard displayed |
