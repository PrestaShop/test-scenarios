---
title: "BO - International - Localization - Geolocation - Update IP address whitelist"
weight: 2
---

# BO - International - Localization - Geolocation - Update IP address whitelist
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1008

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Localization > Geolocation | You'll have the message "Since December 30, 2019, you need to register for a [MaxMind|https://dev.maxmind.com/geoip/geoip2/geolite2] account to get a license key to be able to download the geolocation data. Once downloaded, extract the data using Winrar or Gzip into the /app/Resources/geoip/ directory." |
| Enable "Geolocation by IP adresse" and save | You should have the red notification "The geolocation database is unavailable" |
| * Download this files https://drive.google.com/file/d/18IsSSAURvOgwKb_ZI6wiXpgscujx1lDT/view?usp=sharing<br> * Put it in [yourshopfiles]/app/Ressources/geoip <br> * Reload the webpage | * You'll have a file .mmdb<br> * you should only have index.php and the geolite-city mmdb<br> * you'll not have the yellow notification |
| Enable "Geolocation by IP adresse" and save | You should have the green notification "Update successful" |
| Modify your files FrontController.php in [yourshopfile]/classes/controler and save | Your frontController should be modified |
| Go to FO | You should see the FO as usual |
| * Return to BO > Localization > Geolocation <br> * In IP addresse whitelist, Erase "127" from the list <br> * Clic on Save | * The Geolocation page is displayed<br> * The first in the list should be " ::1 "<br> * You've a green notification Update successful |
| Go to FO | You should see a "403 Forbidden " and " You cannot access this store from your country. We apologize for the inconvenience. " |
| * Return to BO > Localization > Geolocation <br> * Disable "geolocation by IP address" and Save | * The Geolocation page is displayed<br> * You've a green notification Update successful |
| Go to FO | You should see the FO as usual |
