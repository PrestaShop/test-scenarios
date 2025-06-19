---
title: "Wishlist module - Statistics tab settings"
weight: 2
---

# Wishlist module - Statistics tab settings
## Details
* **Component** : blockwishlist
* **Status** : Automated
* **Automated on** : 9.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-4233
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/modules/blockwishlist/02_configuration/02_statisticsTabSettings.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Modules > Module manager and search blockwishlist | The module page list should be displayed and *Wishlist* module should be displayed on the list |
| Click on "Configure" button at the right of the module | * "Configure" page is displayed with 2 tabs:<br> ** Configuration<br> ** Statistics<br> * The page is opened on "Configuration" tab |
| *Case 1: No statistics*<br>Click on "Statistics tab | * Statistics page is displayed<br> * The list of statistics is empty with:<br> ** 5 buttons: "Day" / "Month" / "Year" / "All time" / "Refresh"<br> ** a "No records found" message on it |
| *Case 2: With statistics*<br>Click on "Statistics tab | * Statistics page is displayed<br> * The list of statistics is empty with:<br> ** 5 buttons: "Day" / "Month" / "Year" / "All time" / "Refresh"<br> ** a "No records found" message on it |
| Go to FO > Click on "Sign in" link in the header > Fill the form with your credentials (pre-condition) > Click on "Sign in" button | * You are logged in<br> * Home page is displayed |
| Click on "heart" icon of several products (2 or 3) > Add them to your "My wishlist" list | * A successful message "Product added" is displayed<br> * "Heart" icon is filled |
| Click on "Sign out" link on header > Sign in again with another account | * You are logged out and logged in again<br> * Home page is displayed |
| Click on "heart" icon of several products (same as step 6) > Add them to your "My wishlist" list | * A successful message "Product added" is displayed<br> * "Heart" icon is filled |
| Go back to BO, "Statistics" page > Click on "Day" then "Refresh" button | A list of products chosen is displayed with all details and statistics |
