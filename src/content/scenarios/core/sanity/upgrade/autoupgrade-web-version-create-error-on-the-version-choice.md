---
title: "Autoupgrade - Web Version - Create error  on the version choice"
weight: 13
---

# Autoupgrade - Web Version - Create error  on the version choice
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-11304

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
| Select the "Update your Store" radio button. | * "Update your store" radio button is selected<br> * CTA "Get started" is enabled |
| Click on the CTA "Get started". | A loader is displayed in the CTA "Get started" then, "Version choice" page is displayed : <br> * Stepper on step one ("Version choice")<br> * Paragraph with "A more recent version is available / Current PrestaShop version: 8.0.4/ Current PHP version: 8.1.xx<br> * Radio button : PrestaShop LastVersion [Major version](blue color rgb(190, 234, 243)) with description "The maximum version of PrestaShop to which you can update your store, based on its PHP version." and the link "Release note" <br> * Blue alert info : " Unlock the local update feature and manually update your store to your preferred upgrade by saving the archive and XML files of the PrestaShop version in the following directory on your server: */your-admin-directory/autoupgrade/download/*"<br> * CTA : "Next" disabled |
| Open the file [yourshopname_folder] > modules > autoupgrade > classes > UpgradeSelfCheck.php | File opened. |
| In :<br> * "public function getErrors(): array" <br> * "public function getWarnings(): array",<br><br>invert all the condition (check how to in datas) and save the folder. | Modifications saved. |
| Select "PrestaShop LastVersion" radio button. | The checking requirement should have 16 errors and 4 warnings : check screenshot attached. |
| Click on the link "developper documentation ". | "Update from the back office" page is opened in a new tab. |
| On the module tab, *ctrl + click* on the link "Shop parameters > General > Maintenance" (to open in a new tab). | General > Preferences page is displayed on the "General" tab. |
| On the module tab, *ctrl + click* on the link "Advanced parameters > Performance > Caching" (to open in a new tab). | Advanced parameters > Performance page is displayed on a new tab. |
| On the module tab, *ctrl + click* on the link "Modules > Module Manager > Updates" (to open in a new tab). | Module Manager > Updates > Module notification page is displayed on a new tab. |
