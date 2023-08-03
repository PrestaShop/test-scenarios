---
title: "BO - Shop Parameters - Order Settings -  Gift options"
weight: 1
---

# BO - Shop Parameters - Order Settings -  Gift options
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1057
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/13_shopParameters/02_orderSettings/01_orderSettings/giftOptions/01_giftOptions.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Order Settings > Gift options > Set "Offer gift wrapping" switch button to YES > Save | Message "Update successful" is displayed |
| Go to FO > Add a product to cart > Proceed to checkout until step 3 - Shipping method | Option "I would like my order to be gift wrapped" is displayed |
| Check option "I would like my order to be gift wrapped" | A new field appears "If you'd like, you can add a note to the gift:" |
| Continue the checkout process > Place order | The order is now confirmed |
| Go to BO > Orders > Orders > View latest order | In the middle of the page on Status, Documents, Carriers, Merchandise returns tabs, the label "Gift wrapping" is displayed in green at the bottom of the block |
| Go to FO > Add a product to cart > Proceed to checkout until step 3 - Shipping method | Option "I would like my order to be gift wrapped" is displayed |
| Check option "I would like my order to be gift wrapped" | A new field appears "If you'd like, you can add a note to the gift:" |
| Add a note > Continue the checkout process > Place order | The order is now confirmed |
| Click on "Your name" link on the header | "Your account" page is displayed |
| Click on "Order history and details" tab > Click on "Details" link of the last order | * The "Order details" page is displayed<br> * In the 2nd block,  the message about gift wrapping option is displayed:<br> ** You have requested gift wrapping for this order.<br> ** My custom message |
| Go to BO > Orders > Orders > View latest order > Click on "Carriers" tab in the middle of the page | * In Carrier tab, the note is displayed<br> * In tab Status, Documents, Carriers, Merchandise return tabs, label "gift wrapping" are displayed |
| Go to Shop parameters > Order Settings > Add price + tax > Save | Message "Update successful" is displayed |
| Go to FO > Add product to cart > Proceed to checkout > in Step 3, check wrapping gift checbkox + add a note | * The checkbox text has changed. This text is added "(additional cost of €XX tax incl.)"<br> * A "Gift wrapping" line with tax included is displayed |
| Continue order > Place order | * The order is now confirmed<br> * The price for gift wrapping line is displayed |
| Go to BO > Orders > Orders > View latest order | * In "Products" block, a wrapping amount is displayed<br> * In tab Status, Documents, Carriers, Merchandise return tabs, label "gift wrapping" are displayed<br> * In tab Carriers, the note is displayed |
| Go to Shop parameters > Order Settings > Set "Recycled packaging" switch button to YES > Save | Message "Update successful" is displayed |
| Go to FO > Add product to cart > Proceed to checkout > in Step 3, check wrapping gift box + check recycled packaging box + add a note > Place order | * The order is now confirmed<br> * The price for gift wrapping line is displayed |
| Click on "Your name" link on the header | "Your account" page is displayed |
| Click on "Order history and details" tab > Click on "Details" link of the last order | * The "Order details" page is displayed<br> * In the 2nd block,  the message about gift wrapping and recycled packaging options is displayed:<br> ** You have given permission to receive your order in recycled packaging. <br> ** You have requested gift wrapping for this order.<br> ** My custom message |
| Go to BO > Orders > Orders > View latest order | * In "Products" block, a wrapping amount is displayed<br> * In tab Status, Documents, Carriers, Merchandise return tabs, label "recycled packaging" and "gift wrapping" are displayed<br> * In tab Carriers, the note is displayed |
