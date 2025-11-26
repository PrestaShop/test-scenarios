---
title: "FO - Product page - Product page : Change combination"
weight: 8
---

# FO - Product page - Product page : Change combination
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1265
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/09_productPage/02_productPage/08_changeCombination.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Attrabutes and Features | The tab Attributes should be displayed |
| * Clic on "Add a new Attribute"<br> * Set up your Attributes <br> * Clic on Save | * The Attributes page should be displayed<br> * The field with the "*" should be setted<br> * The attributes tab should be displayed again with the green message "Successful creation" |
| * Clic on "Add new value" <br> * Set up your <br> * Clic on "Save then add another value" | * The Values page should be displayed<br> * The field with "*" should be setted <br> * You should have a new page value displayed with the green notification "successful creation" |
| * Set up your <br> * Clic on "Save" | * The field with "*" should be setted <br> * The attribute tab should be displayed againt with the Successful creation, the Attribute "Emballage" should be displayed at the end and it should have 2 Value |
| * Go to Catalog > Product <br> * Clic on "Add new product" <br> * Clic on "Product with combinations" <br> * Clic on Add new product | * The catalog with all your product should be displayed<br> * A modal should be displayed with 4 selection possible <br> * The description of the product should change<br> * You should have the configuration page for a product displayed |
| * Set up the name of the product <br> * Click on the "Offline" switch <br> * Go on pricing tab<br> * Set the retail price (tax incl.) to 20 <br> * Clic on "Save" | * Product Name shouldn't be blanck <br> * the button switch to "Online"<br> * The pricing tab should be displayed <br> * the retail price (tax exl.) 'll be set up <br> * You should have a green notification "Successful update" |
| * Clic on the combinations tab<br> * Clic on the button "Generate combinations"<br> * Clic on the boxes of "Size" and "Emballage"  (next to Select all values) <br> * Clic on "Generate 8 combinations" | * You should have an image that say " Generate product combinations" <br> * A modal named Generate combination shoudl be displayed" <br> * You should have the different value possible of the different attribute <br> * You should return on the combination tab with your 8 new combination |
| * Clic on the Three dot next to "Go to catalog" <br> * Clic on "Preview" | * You should have 4 new button displayed <br> * You should have your new product displayed with a drop list for "Size" and two boxe for "Emballage" where "Soie" is bolded |
| * Clic on the "S" under the "Size" <br> * Clic on the "M" into the droplist | * The drop list should be extended<br> * Next to "Size" and under, you should have the "M" selected |
| Under the "Emballage" clic on "Carton" | * Under "Emballage" you should have the square of "Carton" in bold <br> * Next to "Emballge" you should have the metnion "Carton" |
