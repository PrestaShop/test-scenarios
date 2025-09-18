---
title: "Autoupgrade - Web Version - Create error on Welcome Page"
weight: 10
---

# Autoupgrade - Web Version - Create error on Welcome Page
## Details
* **Component** : Core
* **Status** : In progress
* **Scenario** : https://forge.prestashop.com/browse/TEST-11301

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
| Go to [admin_folder_name] and open a terminal in the folder. | New terminal appears ! |
| Type "sudo chmod 000 autoupgrade" and enter. | Command executed. |
| Reload the autoupdate page. | Error serveur : "500 Internal Server Error" |
| Enable the debug mode. | Debug mode enabled. |
| Reload the page. | Error : "Cannot write to the directory. Please ensure you have the necessary write permissions on "/var/www/html/pr_autoup/admin-dev/autoupgrade"." |
| On the terminal type "sudo chmod 777 autoupgrade" and enter. | Command executed. |
| Reload the update assistant page. | "Welcome to PrestaShop Update Assistant" page is displayed correctly :). |
| Change the URL of the BO from <br><br>[http://localhost/pr_autoup/admin-dev/index.php?controller=AdminSelfUpgrade&token=f2a7a39f8608658c7d114813cfdc966e&route=home-page] <br><br>to <br><br>[http://localhost/pr_autoup/admin-dev/index.php?controller=AdminSelfUpgrade&token=f2a7a39f8608658c7d114813cfdc966e&route=]<br><br>("home-page" delete) <br><br>and enter. | 404 error image :  <br> * Title :  "Something went wrong... "<br> * Text : "The requested page or resource could not be found. This might be due to:<br> ** A broken or outdated link.<br> ** The page being moved or deleted.<br> ** A typo in the URL." |
| Reload the update assistant page. | "Welcome to PrestaShop Update Assistant" page is displayed correctly :). |
