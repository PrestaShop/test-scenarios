---
title: "InstallShop"
weight: 1
---

# InstallShop
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 9.1.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1334
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/sanity/01_installShop/01_installShop.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to the install URL | Install page is displayed |
| Change the language to English | Language is changed to English |
| Click on Next" | License Agreements" page is displayed" |
| Agree to the terms and conditions. Click on Next" | System Compatibility" page is displayed" |
| Click on Next" | Shop Informations" page is displayed" |
| Fill relevant informations: - Shop name Prestashop" - Country "France" - Name "demo demo" - Email "demo@prestashop.com - Password "prestashop_demo" twice" | Data is correctly inserted |
| Click on Next" | Database Configuration" page is displayed" |
| Fill relevant informations: - Database user root" - Database password "" | Data is correctly inserted |
| Click on Check database connection" | The confirmation message connection established" is displayed" |
| Click on Next" | Automatic installation page is displayed. Progress bar is progressing |
| Go to the FO | FO is displayed correctly |
