---
title: "Autoupgrade - Middleware"
weight: 9
---

# Autoupgrade - Middleware
## Details
* **Component** : Core
* **Status** : Approved
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
| Reload the page "Version Choice". | "Version choice" page is displayed with : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4 / Current PHP version: 8.1.xx<br> * 2 Radio button, none of them selected : <br> ** PrestaShop 9.0.xx [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> ** "Local archive" with description "Save the archive file of the version you want to update to in the following directory: /your-admin-directory/autoupgrade/download/ "<br> * CTA : "Next" disabled |
| *{color:#57D9A3}PLPLPLPLPLPLPLPLPLPL{color}* |  |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-backup-options" | You should be redirected to the same page : Update "Version Choice" |
| * Clic on the Radio button next to "Prestashop [last version]"<br> * The check is finished | * the checking requirement should be launched<br> * You should have a green notification with "The requirements check is complete, you can update your store to this version of PrestaShop." or  maybe some warning and the button "Next" should be enabled |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-backup-options" | You should be redirected to the page : "Back up your store" |
| Click on the previous button of your bowser twice | You should be redirected to Update "Version Choice" page with the online channel set |
| * Clic on the Radio button next to "Local archive"<br> * Clic on the first drop list <br> * Select your zip folder <br> * Clic on the second drop list<br> * Select the secon xml folder | * You should have two drop list :<br> ** One with title : "Archive to use*" and in the drop list "Select an archive"<br> ** One with title : "XML file to use*" and in the drop list "Select a file"<br> * You still have "Select an archive" selected and you have the zip name that you drop on your foler <br> * In the drop list, you should have the name of your selected zip <br> * You still have "Select a file" selected and you have the xml name that you drop on your foler <br> * In the drop list, you should have the name of your selected xml and the checking requirement should be started |
| * The check is finished | * You should have some warning like "We were unable to check your PHP compatibility with PrestaShop [PrestashopVersionAimed] "and the button "Next" should be enabled |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-backup-options" | You should be redirected to the page : "Back up your store" |
| * Delete the "update_config.var" files  from [yourshop]/[adminfolder]/autoupgrade<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the Update "Version Choice" page with none radio button selected |
| * Clic on the Radio button next to "Local archive"<br> * Clic on the first drop list <br> * Select your zip folder <br> * Clic on the second drop list<br> * Select the secon xml folder | * You should have two drop list :<br> ** One with title : "Archive to use*" and in the drop list "Select an archive"<br> ** One with title : "XML file to use*" and in the drop list "Select a file"<br> * You still have "Select an archive" selected and you have the zip name that you drop on your foler <br> * In the drop list, you should have the name of your selected zip <br> * You still have "Select a file" selected and you have the xml name that you drop on your foler <br> * In the drop list, you should have the name of your selected xml and the checking requirement should be started |
| * The check is finished | * You should have some warning like "We were unable to check your PHP compatibility with PrestaShop [PrestashopVersionAimed] "and the button "Next" should be enabled |
| on the link of the page, replace "route=update-page-version-choice" by "route=update-page-backup-options" | You should be redirected to the page : "Back up your store" |
| * Delete the zip or the xml linked to version aimed from [yourshop]/[adminfolder]/autoupgrade/download<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the Update "Version Choice" page with none channel set because local channel aren't showed |
| Do the process of an upgrade until the end of the upgrade | You should have be on a new page with <br> * title : " Post-update checklist "<br> * Stepper should be on "5 : Post-update"<br> * A green notification : "Your store is up to date"<br> * Sub title : "Next step" and Troubleshooting <br> * A link : "Download update logs"<br> * 2 button : "Exit" and " Open developer documentation" |
| * Reload the page<br> * Set up your mail and password<br> * on the link of the page, replace "route=home-page" by "route=update-page-post-update" | * Prestashop should ask you to be loged in <br> * You should be redirected to the "Welcome to PrestaShop Update Assistant" page <br> * You should be redirected to the "Post-update checklist" |
| * Delete the last "[...]-update.txt" files  from [yourshop]/[adminfolder]/autoupgrade/logs<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the "Welcome to PrestaShop Update Assistant" page |
| Do the process of an upgrade until the end of the backup | You should have be on a new page with <br> * title : " Back up your store"<br> * A green notification : "Backup completed"<br> * A link : "Download backup logs"<br> * 1 button : "Start Update"" |
| * Click on the Update assistant on the sideboard<br> * Click on Restore from a backup<br> * Click on Get started | * You should be redirected to the "Welcome to PrestaShop Update Assistant" page<br> * The radio button should be checked next to the restore part and the button Get started should be enabled <br> * You should be redirected to the "Backup selection" page |
| * Click on the drop list<br> * Select the second backup<br> * Reload th page | * You should have two backup on the list <br> * The drop list should close and the name of the second backup should be on the drop list <br> * You should be redirected to "Backup selection" with the second backup on the drop list |
| * Delete the "restore_config.var" files  from [yourshop]/[adminfolder]/autoupgrade<br> * Reload the current page | * The file should be deleted<br> * You should be redirected to "Backup selection" with the first backup on the drop list |
| on the link of the page, replace "route=restore-page-backup-selection" by "route=restore-page-restore" | You should be redirected to the page : "Backup selection" |
| * Click on the drop list<br> * Select the second backup<br> * On the link of the page, replace "route=restore-page-backup-selection" by "route=restore-page-restore" | * You should have two backup on the list <br> * The drop list should close and the name of the second backup should be on the drop list <br> * You should be redirected to the page : "Restore" page |
| * Wait until the end of the Restore<br> * Reload the page | * You should be on the "Post-restore checklist" page<br> * You still be on the "Post-restore checklist" page |
| * Delete the last "[...]-restore.txt" files  from [yourshop]/[adminfolder]/autoupgrade/logs<br> * Reload the current page | * The file should be deleted<br> * you should be redirected to the "Welcome to PrestaShop Update Assistant" page |
| * Click on Restore from a backup<br> * Click on Get started | * The radio button should be checked next to the restore part and the button Get started should be enabled <br> * You should be redirected to the "Backup selection" page |
| Delete the two different backup | You should have two different modal :<br> * One to inform you that you will delete the backup<br> * The other one to inform you that you will delete the backup and you'll be redirected to the welcome page<br><br>After the deletion, you'll be redirected to the "Welcome to PrestaShop Update Assistant" page |
| On the link of the page, replace "route=home-page" by "route=restore-page-backup-selection" | You should be redirected to "Welcome to PrestaShop Update Assistant" page |
