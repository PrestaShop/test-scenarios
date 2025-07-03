---
title: "Autoupgrade - Web Version - Install an 1.7.8.9 on php 7.1"
weight: 3
---

# Autoupgrade - Web Version - Install an 1.7.8.9 on php 7.1
## Details
* **Component** : Core
* **Status** : Approved
* **Scenario** : https://forge.prestashop.com/browse/TEST-10928

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Install a fresh 1.7.8.9 on php 7.1 | * The new shop is installed<br> * The selection to BO or FO is displayed |
| Go to the BO. | Log in page is displayed. |
| Log in with email and password set during installation. | * Connection successful<br> * Dashboard displayed<br> * Modale "Welcome to your shop" displayed |
| Click on the cross of the modale. | * Modale is closed<br> * Dashboard is displayed |
| Go to Modules > Module manager. | Module manager page is displayed. |
| Click on the CTA "Upload a module". | Modale "Upload a module" is displayed. |
| Select or drag and drop the .zip. | * The module is installing<br> * The module is installed, the CTA "Configure" is displayed. |
| Close the modal. | * Modale is closed<br> * Module manager page is displayed |
| Refresh the page. | Page is refreshed. |
| Search for "Update". | Update Assistant is displayed. |
| Check for the version. | The version is the latest in prod. <br><br>The lastest version in prod is displayed because it is the version available on the marketplace. |
