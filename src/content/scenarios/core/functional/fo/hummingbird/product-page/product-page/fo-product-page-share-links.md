---
title: "FO - Product Page - Share links"
weight: 5
---

# FO - Product Page - Share links
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6973
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/09_productPage/02_productPage/05_shareLinks.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Click on Hummingbird printed t-shirt | Product page is displayed |
| Under the quantity section > Click on the Facebook share button | New tab opens on the link : https://www.facebook.com/sharer.php?u=http%3A%2F%2Flocalhost%2Fps81x%2Fen%2Fmen%2F1-hummingbird-printed-t-shirt.html |
| Close the tab > Click on X (Twitter) button | New tab opens on the link : [https://twitter.com/intent/tweet?text=Hummingbird+printed+t-shirt%20http%3A%2F%2Flocalhost%2Fps81x%2Fen%2Fmen%2F1-hummingbird-printed-t-shirt.html|https://www.facebook.com/sharer.php?u=http%3A%2F%2Flocalhost%2Fps81x%2Fen%2Fmen%2F1-hummingbird-printed-t-shirt.html] |
| Close the tab > Click to Pinterest button | New tab opens on the link : https://www.pinterest.com/pin/create/button/?media=http%3A%2F%2Flocalhost%2Fps81x%2F1%2Fhummingbird-printed-t-shirt.jpg&url=http%3A%2F%2Flocalhost%2Fps81x%2Fen%2Fmen%2F1-hummingbird-printed-t-shirt.html |
