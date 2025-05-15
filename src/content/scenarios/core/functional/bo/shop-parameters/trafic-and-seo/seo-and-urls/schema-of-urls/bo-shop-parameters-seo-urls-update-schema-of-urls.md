---
title: "BO - Shop Parameters - SEO & URLs - Update Schema of URLs"
weight: 1
---

# BO - Shop Parameters - SEO & URLs - Update Schema of URLs
## Details
* **Component** : Core
* **Status** : To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1113

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Traffic et SEO > Scroll down to block Schema of URLs | Schema of URLs is displayed with 7 routes |
| Edit Route to products > Save | Error displayed :<br>Keyword "{id_product_attribute}" required for route "product_rule" (rule: "{id}")<br><br>Keyword "{rewrite}" required for route "product_rule" (rule: {id}") |
| Edit Route to products > Save | Message "Update successful" is displayed |
| View my store > Click on product Hummingbird printed sweater | See URL is like the following : myshop.com/en/2-9-brown-bear-printed-sweater.html#/1-size-s<br><br>Product page is displayed |
| Go back to BO page > Edit Route to category > Save | Message "Update successful" is displayed |
| Click View my store > Click on Accessories | See URL is like the following : myshop.com/en/6/cat<br><br>Accessories category is displayed<br><br>https://github.com/PrestaShop/PrestaShop/issues/38697 |
| Go back to BO > Edit Route to supplier > Save | Message "Update successful" is displayed |
| Click View my store > Click on Clothes > In left menu > Click on Fashion supplier | The page you are looking for was not found.<br><br>ISSUE : https://github.com/PrestaShop/PrestaShop/issues/27716 |
| Go back to BO > Edit Route to brand > Save | Message "Update successful" is displayed |
| Click View my store > Scroll all the way down to Sitemap in footer > Click on Sitemap > Click on Studio Design | See URL is like the following : myshop.com/en/brand/1<br><br>List of products by brand Studio Design is displayed |
| Go back to BO > Edit Route to page > Save | Message "Update successful" is displayed |
| Go to Advanced parameters > Performance > Clear cache | All caches cleared successfully |
| Click View my store > Scroll down to footer > Click on Delivery | See URL is like the following : myshop.com/en/content/1<br><br>Delivery page is displayed |
| Go back to BO > Edit Route to modules > Save | Message "Update successful" is displayed |
| Click View my store > Add any product to wishlist > Sign In > | You are logged into your account |
| Click on John Doe on the top right corner > Click on My Wishlist | See URL is like the following : myshop.com/en/all_my_modules/blockwishlist/lists<br><br>Wishlists page is displayed |
