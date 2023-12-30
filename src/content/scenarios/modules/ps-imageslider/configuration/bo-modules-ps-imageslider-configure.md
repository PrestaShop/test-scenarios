---
title: "BO - Modules : ps_imageslider - Configure"
weight: 1
---

# BO - Modules : ps_imageslider - Configure
## Details
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6763

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO> Modules> Module Manager> "image" in search bar | Module manager page displayed |
| Click on _*configure*_ button | the configure image slider page is well displayed |
| Go to _Settings_ -> update _Pause on hover_ to _*NO*_ and save | _The settings have been successfully updated._ message is displayed |
| Go to _Settings_ -> update _Pause on hover_ to _*Yes*_<br><br>update _Loop forever_ to _*No*_  and save | _The settings have been successfully updated._ message is displayed |
| Go to _Slides list_ -> click on _*Add new*_ button | _Slide information_ page is well displayed |
| Fill the forme, update _Enabled_  to *Yes* and save | The image slider configure is displayed<br><br>Successful creation notification |
| go to image slider added and click on _Enabled_ button | *_Configuration updated_* message is displayed<br><br>The slide #4 is Disabled |
| go to image slider added and click on _Delete_ button | _*Successful deletion*_ message is displayed |