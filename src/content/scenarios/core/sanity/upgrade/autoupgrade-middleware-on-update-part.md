---
title: "Autoupgrade - Middleware on update Part"
weight: 9
---

# Autoupgrade - Middleware on update Part
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-10778

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
| Click on the CTA "Get started". | A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4 / Current PHP version: 8.1.xx<br> * Radio button : PrestaShop 9.0.xx [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Put a zip and xml with a greater version of 8.2.x in [yourshop]/[adminfolder]/autoupgrade/download | There are a zip, an xml and an index.php files in your folder |
| Put another zip and xml with a greater version of 8.2.x in [yourshop]/[adminfolder]/autoupgrade/download | There are two zip, two xml and an index.php files in your folder |
| Reload the page "Version choice". | "Version choice" page is displayed with : <br><br> <br><br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4 / Current PHP version: 8.1.xx<br> * 2 Radio button : <br>  ** PrestaShop 9.0.xx [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br>  ** "Local archive" with description "Save the archive file of the version you want to update to in the following directory: /your-admin-directory/autoupgrade/download/ "<br> * CTA : "Next" disabled |
| in the link ,<br>replace "{color:#DE350B}&route=update-page-version-choice{color}" <br>by <br>"{color:#00875A}&route=update-page-update-options{color}" | "Version choice" page is displayed |
| Select the radio button "PrestaShop [last version]". | Checking requirement is launched then is finished :<br><br>"The requirements check is complete, you can update your store to this version of PrestaShop."<br>Or warnings <br>CTA "Next" is enabled |
| in the link ,<br>replace "{color:#DE350B}&route=update-page-version-choice{color}" <br>by <br>"{color:#00875A}&route=update-page-update-options{color}" | "Update option" page is displayed |
| Click on the previous button on bowser | "Version choice" page is displayed |
| Select the Radio button "Local archive" | You should have two drop list :<br> * One with title : "Archive to use*" and in the drop list "Select an archive"<br> * One with title : "XML file to use*" and in the drop list "Select a file" |
| Clic on the first drop list | You still have "Select an archive" selected and "{color:#4c9aff}*[newzip1.zip]*{color}","{color:#ffab00}*[newzip2.zip]*{color}" don't selected |
| Select "*{color:#4c9aff}[newzip1.zip]{color}*" | In the drop list, "*{color:#4c9aff}[newzip1.zip{color}*]" is selected |
| Clic on the second drop list | * You still have "Select a file" selected and "{color:#4c9aff}*[newxml1.xml]*{color}","{color:#ffab00}*[newxml2.xml]*{color}" don't selected |
| Select "*{color:#4c9aff}[newxml1.xml]{color}*" | * In the drop list, "{color:#4c9aff}*[newxml1.xml]*{color}" is selected<br><br> * Checking requirement is launched then is finished :<br> ** "Please consider these warnings before continuing with the update. Read more in the [developer documentation|https://devdocs.prestashop-project.org/9/basics/keeping-up-to-date/update/update-from-the-back-office]. "<br> ** Warning "We were unable to check your PHP compatibility with PrestaShop *{color:#4c9aff}[versionOfYourZip]{color}*{color:#4c9aff} {color}<br> ** CTA "Next" enabled |
| in the link ,<br>replace "{color:#DE350B}&route=update-page-version-choice{color}" <br>by <br>"{color:#00875A}&route=update-page-update-options{color}" | "Update option" page is displayed |
| Delete "*{color:#4c9aff}[newzip1.zip]{color}*" from [yourshop]/[adminfolder]/autoupgrade/download | "*{color:#4c9aff}[newzip1.zip]{color}*" is deleted |
| Reload the page "Version option". | "Version choice" page is displayed with two drop list :<br> * One with title : "Archive to use*" and in the drop list "Select an archive"<br> * One with title : "XML file to use*" and in the drop list "Select a file" |
| Delete "update_config.var" files  from [yourshop]/[adminfolder]/autoupgrade | The file is deleted |
| Reload the page "Version option". | "Version choice" page is displayed with : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4 / Current PHP version: 8.1.xx<br> * 2 Radio button, none of them selected : <br> ** PrestaShop 9.0.xx [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** "Local archive" with description "Save the archive file of the version you want to update to in the following directory: /your-admin-directory/autoupgrade/download/ "<br> * CTA : "Next" disabled |
| in the link ,<br>replace "{color:#DE350B}&route=update-page-version-choice{color}" <br>by <br>"{color:#00875A}&route=update-page-backup-options{color}" | "Version Choice" page is displayed |
| Select the radio button "PrestaShop [last version]". | Checking requirement is launched then is finished :<br> * "The requirements check is complete, you can update your store to this version of PrestaShop."<br> * Or warnings <br> * CTA "Next" is enabled |
| in the link ,<br>replace "{color:#DE350B}&route=update-page-version-choice{color}" <br>by <br>"{color:#00875A}&route=update-page-backup-options{color}" | "Backup your shop" page is displayed |
| Click on the previous button on bowser twice | "Version choice" page is displayed |
| Select the Radio button "Local archive" | You should have two drop list :<br> * One with title : "Archive to use*" and in the drop list "Select an archive"<br> * One with title : "XML file to use*" and in the drop list "Select a file" |
| Clic on the first drop list | You still have "Select an archive" selected and "{color:#ffab00}*[newzip2.zip]*{color}" don't selected |
| Select "{color:#ffab00}*[newzip2.zip]*{color}" | In the drop list, "{color:#ffab00}*[newzip2.zip]*{color}" is selected |
| Clic on the second drop list | * You still have "Select a file" selected and "{color:#ffab00}*[newxml2.xml]*{color}" don't selected |
| Select "{color:#ffab00}*[newxml2.xml]*{color}" | * In the drop list, "{color:#ffab00}*[newxml2.xml]*{color}" is selected<br><br> * Checking requirement is launched then is finished :<br> ** "Please consider these warnings before continuing with the update. Read more in the [developer documentation|https://devdocs.prestashop-project.org/9/basics/keeping-up-to-date/update/update-from-the-back-office]. "<br> ** Warning "We were unable to check your PHP compatibility with PrestaShop *{color:#ffab00}[versionOfYourZip]{color}*<br> ** CTA "Next" enabled |
| in the link ,<br>replace "{color:#DE350B}&route=update-page-version-choice{color}" <br>by <br>"{color:#00875A}&route=update-page-backup-options{color}" | "Backup your shop" page is displayed |
| Delete "update_config.var" files  from [yourshop]/[adminfolder]/autoupgrade | The file is deleted |
| Reload the page "Backup Option". | "Version choice" page is displayed with : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4 / Current PHP version: 8.1.xx<br> * 2 Radio button, none of them selected : <br> ** PrestaShop 9.0.xx [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** "Local archive" with description "Save the archive file of the version you want to update to in the following directory: /your-admin-directory/autoupgrade/download/ "<br> * CTA : "Next" disabled |
| Select the Radio button "Local archive" | You should have two drop list :<br> * One with title : "Archive to use*" and in the drop list "Select an archive"<br> * One with title : "XML file to use*" and in the drop list "Select a file" |
| Clic on the first drop list | You still have "Select an archive" selected and "{color:#ffab00}*[newzip2.zip]*{color}" don't selected |
| Select "{color:#ffab00}*[newzip2.zip]*{color}" | In the drop list, "{color:#ffab00}*[newzip2.zip]*{color}" is selected |
| Clic on the second drop list | * You still have "Select a file" selected and "{color:#ffab00}*[newxml2.xml]*{color}" don't selected |
| Select "{color:#ffab00}*[newxml2.xml]*{color}" | * In the drop list, "{color:#ffab00}*[newxml2.xml]*{color}" is selected<br><br> * Checking requirement is launched then is finished :<br> ** "Please consider these warnings before continuing with the update. Read more in the [developer documentation|https://devdocs.prestashop-project.org/9/basics/keeping-up-to-date/update/update-from-the-back-office]. "<br> ** Warning "We were unable to check your PHP compatibility with PrestaShop *{color:#ffab00}[versionOfYourZip]{color}*<br> ** CTA "Next" enabled |
| in the link ,<br>replace "{color:#DE350B}&route=update-page-version-choice{color}" <br>by <br>"{color:#00875A}&route=update-page-backup-options{color}" | "Backup your shop" page is displayed |
| Delete "*{color:#4c9aff}[newzip1.zip]{color}*" from [yourshop]/[adminfolder]/autoupgrade/download | "*{color:#4c9aff}[newzip1.zip]{color}*" is deleted |
| Reload the page "Backup option". | "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4 / Current PHP version: 8.1.xx<br> * Radio button : PrestaShop 9.0.xx [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Go to "Update Assistant" module (side board). | * "Update Assistant" module is displayed : <br><br> ** Title : "Welcome to PrestaShop Update Assistant"<br> ** Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> ** CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | * A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br><br> ** Stepper on step one ("Version choice")<br> ** Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.9 / Current PHP version: 7.1.xx<br> ** Radio button : PrestaShop 1.7.8.xx [Patch version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> ** CTA : "Next" disabled |
| Clic on the Radio button next to "Prestashop [last version]" | * Checking requirement is launched then is finished :<br><br> ** "The requirements check is complete, you can update your store to this version of PrestaShop."<br> ** Or warnings <br> ** CTA "Next" is enabled |
| Click on the CTA "Next". | * "Update options" page is displayed :  <br><br> ** Stepper on step 2 ("Update options")<br> ** 3 toggles : "Deactivate non-native modules", "Regenerate email templates" , "Disable all overrides"  with details about them under their name <br> ** CTA "Next" enabled |
| Click on the CTA "Next". | * "Back up your store" page is displayed :  <br><br> ** Stepper on step 3 ("Backup")<br> ** Subtitle "Backing up your store's files, database, and images means you can restore to a previous version if something goes wrong during the update. This keeps your data safe and ensures your business stays up and running."<br> ** Toggle : "Include images in your backup" on Yes status<br> ** 2 CTAs : "Update without backup" and "Launch backup" (both available) |
| Click on the CTA "Update without backup" | Modal "Start update?" is displayed : <br> * Text : "Before starting the update, make sure you have a complete and recent backup of your store (database, files, and images)."<br> * 2 CTAs : "Cancel" and "Start backup"<br> * A Checkbox "I have made my own backup and can restore it manually if a problem occurs."<br> * 2 CTAs : "Cancel" (enabled) and "Start update" (disabled) |
| Check the checkbox "I have made my own backup (...)". | The CTA "Start update" is enabled. |
| Click on the CTA "Start update". | * The page "Update" is displayed :<br><br> ** Stepper on step 4 ("Update")<br> ** loading bar with the current process <br> ** details of the current process are listed |
| Wait until the end of the update. | The page "Post-update checklist" is displayed : <br> * Stepper on step 5 ("Post-update")<br> * Success alert : "Your store has been updated to PrestaShop version 9.x.x"<br> * Subtitles : "Next step" and "Troubleshooting"<br> * Two links : "Download update logs" and "Module Manager"<br> * 2 CTAs : "Exit" and "Open developer documentation" |
| Reload the page"Post-update checklist" | Log in page is displayed. |
| Log in with email and password set during installation. | * Connection successful<br> * "Welcome page" is displayed |
| in the link ,<br>replace "{color:#de350b}&route=home-page{color}" <br>by <br>"{color:#00875a}&route=update-page-post-update{color}" | "post-update checklist" page is displayed |
| Reload the page"Post-update checklist" | "post-update checklist" is displayed. |
| Delete the last "[...]-update.txt" files  from [yourshop]/[adminfolder]/autoupgrade/logs | The file is deleted |
| Reload the page"Post-update checklist" | "Welcome page" is displayed. |
