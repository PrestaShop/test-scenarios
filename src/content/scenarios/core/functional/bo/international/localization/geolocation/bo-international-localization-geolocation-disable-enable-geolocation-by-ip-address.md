---
title: "BO - International - Localization - Geolocation - Disable / Enable Geolocation by IP address"
weight: 1
---

# BO - International - Localization - Geolocation - Disable / Enable Geolocation by IP address
## Details
* **Component** : Core
* **Status** : Deprecated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1006

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Localization > Geolocation | You'll have the message "Since December 30, 2019, you need to register for a [MaxMind|https://dev.maxmind.com/geoip/geoip2/geolite2] account to get a license key to be able to download the geolocation data. Once downloaded, extract the data using Winrar or Gzip into the /app/Resources/geoip/ directory." |
| Enable "Geolocation by IP adresse" and save | You should have the red notification "The geolocation database is unavailable" |
| * Download this files https://drive.google.com/file/d/18IsSSAURvOgwKb_ZI6wiXpgscujx1lDT/view?usp=sharing<br> * Put it in [yourshopfiles]/app/Ressources/geoip <br> * Reload the webpage | * You'll have a file .mmdb<br> * you should only have index.php and the geolite-city mmdb<br> * you'll not have the yellow notification |
| Enable "Geolocation by IP adresse" and save | You should have the green notification "Update successful" |
