---
title: "FO - Product Page - Add a text customization"
weight: 5
---

# FO - Product Page - Add a text customization
## Details
* **Component** : Core
* **Status** : Automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1262
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/FO/classic/09_productPage/02_productPage/06_addTextCustomization.ts

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > New product > Standard product > Add new product | Product creation page is well displayed |
| Add a title to your product > Switch to Online > Add Stock > Click Save | Successful update message is displayed |
| In detail tab > In Customization > Click Add a customization fields twice > Save and publish | Successful update message is displayed |
| * clic on the three dot next to "Go to catalog" <br> * Clic on preview | * You should have 4 button displayed<br> * You should see your product on the FO with two text field |
| * Clic on "Save customization"<br> * Set both text field <br> * Clic on "Save customization" | * You should have a message under "lorem ipsumm" : "Please fill out this field"<br> * Your should hide the grey "your message here" with your text <br> * You should have your text next to "Your customization" and "Add to cart" should be enabled |
