---
title: "BO - Shop Parameters - SEO & URLs - Set up URLs"
weight: 7
---

# BO - Shop Parameters - SEO & URLs - Set up URLs
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1111

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop parameters > Traffic & SEO > Scroll down to block Set up URLs | See Friendly URL is enabled |
| GO to FO > Open the product Hummingbird printed t-shirt | The product page is well displayed.<br>See the url is like so : <br>{code:java}<br>my_shop.com/en/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white<br>{code} |
| Go back to BO > Disable the option Friendly URL > Save | Update successful alert is displayed |
| GO to FO > Open the product Hummingbird printed t-shirt | The product page is well displayed.<br>See the url is like so : <br><br><br>{code:java}<br>my_shop.com/index.php?id_product=1&id_product_attribute=1&rewrite=hummingbird-printed-t-shirt&controller=product&id_lang=1#/1-size-s/8-color-white<br>{code} |
| Go back to BO > Enable Friendly URL > Enable Accented URL > Save | Update successful alert is displayed |
| Go to BO > Catalog > Create a standard product > Put online > Save | Product is created |
| Preview the product | FO page product is displayed<br>See the URL is like so : <br>{code:java}<br>my_shop.com/en/home/20-boîte-à-thé.html<br>{code} |
| Go to BO > Disable Accented URL > Save | Update successful alert is displayed |
| Go to BO > Catalog > Create a standard product > Put online > Save | Product is created |
| Preview the product | FO page product is displayed<br>See the URL is like so : <br>{code:java}<br>my_shop.com/en/home/21-hotte-du-pere-noel.html<br>{code} |
