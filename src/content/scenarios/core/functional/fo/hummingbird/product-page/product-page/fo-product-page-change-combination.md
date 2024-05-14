---
title: "FO - Product Page - Change combination"
weight: 7
---

# FO - Product Page - Change combination
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-6978
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/hummingbird/09_productPage/02_productPage/07_changeCombination.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Attributes and Features | The tab Attributes should be displayed |
| Click on "Add new Attribute" > Set up your Attributes > Click on Save | Successful creation alert is displayed |
| Click on "Add new value" > Set up your Value > Click on "Save then add another value" | Successful creation alert is displayed |
| Set up your Value > Click on "Save" | Successful creation alert is displayed |
| Go to Catalog > Products > Click on "Add new product" > Click on "Product with combinations" > Click on Add new product | Product edition page is displayed |
| Set up the name of the product > Click on the "Offline" switch > Go on pricing tab > Set the Retail price (tax incl.) to 20 > Click on "Save" | Successful update alert is displayed |
| Click on the Combinations tab > Click on "Generate combinations" > Select all for "Size" and "Emballage" > Click on "Generate 8 combinations" | Alert "Successfully generated 8 combinations." is displayed |
| Click on the Three dot next to "Go to catalog" > Click on "Preview" | Product page in FO is displayed |
| Choose Size M in dropdown list | See Size: M is displayed |
| Click on radio button Carton | See Emballage: Carton is displayed |
| Search for "hummingbird" > Press Enter > Click on the product "Hummingbird Printed T-shirt" | Hummingbird printed t-shirt product page is displayed |
| Click on the color Black | See Color: Black is displayed |
| Click Add to cart | Product successfully added to your shopping cart<br><br>See in the Details : Color: Black |
| Proceed to checkout > Remove the product from cart | There are no more items in your cart |
