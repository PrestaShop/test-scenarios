---
title: "BO - International - Localization - Geolocation - Update options"
weight: 2
---

# BO - International - Localization - Geolocation - Update options
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1007

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Inetrnational> Geolocation | Geolocation page is displayed |
| Go to Options form and edit *Select the countries from which your store is accessible*,<br><br>save | Country selection is invalid. message is displayed |
| Go to Options form *Select the countries from which your store is accessible*,<br><br>uncheck *Select all* and  check only first country,<br><br>save. | Update successful message is displayed |
| Go to Options form *Select the countries from which your store is accessible*,<br><br>check *Select all* and  edit *Geolocation behavior for restricted countries*,<br><br>save. | Update successful message is displayed |
| Go to Options form *Select the countries from which your store is accessible* and edit *Geolocation behavior for other countries*,<br><br>save. | Update successful message is displayed |
