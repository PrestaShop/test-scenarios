---
title: "FO - Product Page - Product Quickview - Share links"
weight: 3
---

# FO - Product Page - Product Quickview - Share links
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1250
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/09_productPage/01_quickView/03_shareLinks.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO | The page of your shop should be displayed |
| Put your mouse over the product "The best is Yet to Come" | The button "Quickview" should be displayed |
| Clic on the "Quickview" button | You should have a modal that show you the product. |
| Click on the "F" button next to Share | A new page should be open on the link : <br>https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fsharer.php%3Fu%3Dhttp%253A%252F%252Flocalhost%252Fpr81x%252Fen%252Fart%252F3-the-best-is-yet-to-come-framed-poster.html&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=en_US |
| Clic on the bird icon next to "Share" | a new page should be open on the link : <br>https://twitter.com/intent/tweet?text=The+best+is+yet+to+come%5C%27+Framed+poster%20http%3A%2F%2Flocalhost%2Fpr81x%2Fen%2Fart%2F3-the-best-is-yet-to-come-framed-poster.html |
| Clic on the "P" icon next to "Share" | a new page should be open on the link : <br>https://www.pinterest.com/pin/create/button/?media=http%3A%2F%2Flocalhost%2Fpr81x%2F3%2Fthe-best-is-yet-to-come-framed-poster.jpg&url=http%3A%2F%2Flocalhost%2Fpr81x%2Fen%2Fart%2F3-the-best-is-yet-to-come-framed-poster.html |
