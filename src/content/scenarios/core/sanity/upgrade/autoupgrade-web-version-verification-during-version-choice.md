---
title: "Autoupgrade - Web Version - Verification during version choice"
weight: 15
---

# Autoupgrade - Web Version - Verification during version choice
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-11314

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install a fresh 1.7.8.9 on php 7.4 | * The new shop is installed<br> * The selection to BO or FO is displayed |
| Go to the BO. | Log in page is displayed. |
| Log in with email and password set during installation. | * Connection successful<br> * Dashboard displayed<br> * Modale "Welcome to your shop" displayed |
| Click on the cross of the modale. | * Modale is closed<br> * Dashboard is displayed |
| Go to Modules > Module manager. | Module manager page is displayed. |
| Click on the CTA "Upload a module". | Modal "Upload a module" is displayed. |
| Select or drag and drop the .zip. | * The module is installing<br> * The module is installed, the CTA "Configure" is displayed. |
| Close the modal. | * Modal is closed<br> * Module manager page is displayed |
| Refresh the page. | Page is refreshed. |
| Search for "Update". | Update Assistant is displayed. |
| Check for the version. | The version is the latest in prod. <br><br>The lastest version in prod is displayed because it is the version available on the marketplace. |
| Go to the Shop Parameters > General. | General > Preferences page is displayed on the "General" tab. |
| Click on the "Maintenance" tab. | "Maintenance" tab is displayed. |
| Click on the toggle "Enable store" | Toggle is in "No" status. |
| Click on the CTA "Add my IP". | IP address is filled. |
| Click on the CTA "Save". | Shop is in maintenance mode. |
| Go to "Update Assistant" module (side board). | "Update Assistant" module is displayed : <br> * Title : "Welcome to PrestaShop Update Assistant"<br> * Two radio buttons : "Update your store" and "Restore from a backup" (disabled)<br> * CTA "Get started" disabled |
| Select the radio button "Update your store". | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.9 / Current PHP version: 7.4.xx<br> * Radio button : PrestaShop 8.2.xx [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Click on the link "Release note". | A new tab is opened "PrestaShop 8.2.x Is Available. The first patch for branch 8.2.x is available". |
| Close this tab. | The module page is displayed on "Version choice" (nothing changed). |
| Select the radio button "PrestaShop [last version]". | Checking requirement is launched then is finished :<br> * "The requirements check is complete, you can update your store to this version of PrestaShop."<br> * Or warnings <br> * CTA "Next" is enabled |
| Reload the page. | Checking requirement is launched then is finished :<br> * "The requirements check is complete, you can update your store to this version of PrestaShop."<br> * Or warnings <br> * CTA "Next" is enabled |
| Go to the folder " [yourshop]/[admin_folder]/autoupgrade and delete the file "update_config.var". | The file is deleted. |
| Reload the page "Version choice". | The "Version choice" page is reload with no radio button selected. |
| Select the radio button "PrestaShop [last version]". | Checking requirement is launched then is finished :<br> * "The requirements check is complete, you can update your store to this version of PrestaShop."<br> * Or warnings <br> * CTA "Next" is enabled |
| Modify any file from the folder of PrestaShop and save it. | File modified and modifications saved. |
| Reload the page. | Checking requirement is launched then is finished :<br> * Warning is displayed : " Some core files have been altered or removed. Any changes made to these files may be overwritten during the update. [See the list of changes|http://localhost/pr_autoup/admin-dev/index.php?controller=AdminSelfUpgrade&token=fbdd55ff78e286be12d8bbe287cd7bef&route=update-page-version-choice#update-step-version-choice-core-tempered-files-dialog]. " <br> * CTA "Next" is enabled |
| Click on the link "See the list of changes". | Modale "List of core alterations" is displayed (skeleton while loading) with the list of files changed. The modified file is listed. |
| Close the modal. | Modal is closed. |
| Click on the CTA "Check requirement again". | Checking requirement is launched then is finished :<br> * Warning is displayed : " Some core files have been altered or removed. Any changes made to these files may be overwritten during the update. [See the list of changes|http://localhost/pr_autoup/admin-dev/index.php?controller=AdminSelfUpgrade&token=fbdd55ff78e286be12d8bbe287cd7bef&route=update-page-version-choice#update-step-version-choice-core-tempered-files-dialog]. " <br> * CTA "Next" is enabled |
