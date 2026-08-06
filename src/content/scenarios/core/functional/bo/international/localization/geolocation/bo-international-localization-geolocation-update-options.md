---
title: "BO - International - Localization - Geolocation - Update options"
weight: 1
---

# BO - International - Localization - Geolocation - Update options
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://prestashop-jira.atlassian.net/browse/TEST-7712
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/localization/geolocation

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization > Geolocation | Geolocation page is displayed |
| In Options block > Edit *Select the countries from which your store is accessible* > Unselect all countries > Save | Country selection is invalid. message is displayed |
| In Options block > In *Select the countries from which your store is accessible* > Uncheck *Select all* and check only first country > Save | Update successful message is displayed |
| In Options block > In *Select the countries from which your store is accessible* > Click Select all > Edit *Geolocation behavior for restricted countries* > Save | Update successful message is displayed |
| In Options block > In *Select the countries from which your store is accessible* > Edit *Geolocation behavior for other countries* > Save | Update successful message is displayed |
