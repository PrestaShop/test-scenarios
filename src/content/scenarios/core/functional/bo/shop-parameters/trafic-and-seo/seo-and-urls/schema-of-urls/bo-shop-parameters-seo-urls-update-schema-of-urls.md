---
title: "BO - Shop Parameters - SEO & URLs - Update Schema of URLs"
weight: 1
---

# BO - Shop Parameters - SEO & URLs - Update Schema of URLs
## Details
* **Component** : Core
* **Status** : IN REVIEW
* **Scenario** : https://forge.prestashop.com/browse/TEST-1113

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Shop Parameters > Traffic et SEO | The SEO & URL tab should be displayed |
| Scroll down until you are on Schema of URLs | You should have <br> * Route to products<br> * Route to categorie<br> * Route to supplier<br> * Route to brand<br> * Route to page<br> * Route to page category<br> * Route to modules<br> * An notification in yellow with : <br>{code:java}<br>Before making any changes to the default pattern of your URLs, make sure to meet the following requirements:<br>            <br>              <br>                The Friendly URL feature must be enabled<br>              <br>              <br>                URL rewriting must be activated on your web server<br>              <br>              <br>                All mandatory keywords (*) must be included in the route<br>              <br>            <br>            You should also comply with the syntax:<br>            <br>              <br>                Keywords must be in braces {keyword}<br>              <br>              <br>                All keywords must be separated<br>              <br>              <br>                As long as a keyword has an associated value, you can <br>use the syntax {prepend:keyword:append} to add text before and after it.<br>{code} |
| Set the different field and clic on save | the tab SEO & URL should be displayed again with the green notification "Update successful" |
| Go to FO | Your shop should be displayed with your different product |
| Clic on the product "Mug The best is yet to come" | The link should be : <br>[[yourshoplink]/en/home-accessories/6-mug-the-best-is-yet-to-come.html/product|http://localhost/develop/en/home-accessories/6-mug-the-best-is-yet-to-come.html/product] |
| Clic on "Sign in" | You should be redirect to the log in page |
| Log in to your account | The page "Mug The best is yet to come" should be displayed again and you have your name on the top right of the page |
| Clic on your name | Your account tab should be displayed |
| Clic on "My Wishlist" | You should be on the list of your wishlist and the link should be : <br>[Yourshop]en/blockwishlist/lists/module |
| Go to : [Yourshop]en/1/cat | "Root' categorie should be displayed with a sub-categorie "Home" |
| Go to : [Yourshop]en/1/br | "Studio design" brand should be displayed with all the product link to them |
| Go to : [Yourshop]en/1/page | "Delivery" page should be displayed |
| Go to : [Yourshop]en/1/page/cat | "Home" category should be displayed with the different page on it |
| Go to : [Yourshop]en/1/sup | "Fashion supplier" tab should be displayed |
