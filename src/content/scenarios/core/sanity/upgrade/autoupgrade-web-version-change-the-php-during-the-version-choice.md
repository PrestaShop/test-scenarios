---
title: "Autoupgrade - Web Version - Change the php during the version choice"
weight: 14
---

# Autoupgrade - Web Version - Change the php during the version choice
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-12191

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install a fresh 1.7.8.9 on php 7.1 | * The new shop is installed<br> * The selection to BO or FO is displayed |
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
| Click on the CTA "Get started". | A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.9 / Current PHP version: 7.1.xx<br> * Radio button : PrestaShop {test-param}Last_version_17{test-param}  (Patch) version](blue color rgb(190, 234, 243)) with description "The recommended version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Change the php version from 7.1 to 7.4.<br><br> <br><br>{color:#ff8b00}_(find a way to explain how)_{color} | Php version is modified. |
| Reload the page "Version choice". | * Paragraph with "A more recent version is available / Current PrestaShop version: 1.7.8.9 / Current PHP version: 7.4.xx<br> * Radio button : PrestaShop {test-param}Last_version_8{test-param}   (Patch) version](blue color rgb(190, 234, 243)) with description "The recommended version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled<br> * |
