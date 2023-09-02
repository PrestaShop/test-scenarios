---
title: "BO - Shop Parameters - SEO & URLs - Bulk actions"
weight: 5
---

# BO - Shop Parameters - SEO & URLs - Bulk actions
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1109

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to Shop PArameters > Traffic & SEO - SEO & URLs | *  SEO & URLs Page is displayed<br> * *Bulk actions* button is disabled |
| Check one Checkbox | The *Bulk actions* button is enabled |
| Click on *Bulk actions* button | *Delete selected* sub-button appears |
| Click on *Delete selected* button | A modal appears :<br><br>  !image-2023-09-01-10-18-14-213.png! |
| *Case 1 :*<br><br>Click on *Cancel* button | * The Modal disappears<br> * The SEO & URLs page is well displayed<br> * The selected item is still checked |
| *Case 2 :*<br><br>Click on *Delete* button | * This message is displayed :  "The selection has been successfully deleted."<br> * The SEO & URLs page is displayed<br> * The item selected  is not in the SEO & URLs list<br> * Bulk button is disabled |
| Click on the checkbox to select all SEO & URLs | All SEO & URLs in the page are checked<br><br>The *Bulk actions* button is enabled |
| Click on *Bulk actions* button > Click on *Delete selected* | A modal appears : <br><br>!image-2023-09-01-10-27-48-436.png! |
| *Case 1 :*<br><br>Click on *Cancel* button | * The Modal disappears<br> * The SEO & URLs page is well displayed<br> * The selected item still checked  (all the page items) |
| *Case 2 :*<br><br>Click on *Delete* button | * This message is displayed :  "The selection has been successfully deleted."<br> * TheSEO & URLs page is empty<br> * *Bulk actions* button disappears |
