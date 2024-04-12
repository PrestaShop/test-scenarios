---
title: "FO - Product Page - Add a required customization"
weight: 8
---

# FO - Product Page - Add a required customization
## Details
* **Component** : Core
* **Status** : [TEST] To be automated
* **Scenario** : https://forge.prestashop.com/browse/TEST-1264

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > New product > Standard product > Add new product | Product creation page is well displayed |
| Add a title to your product > Switch to Online > Add Stock > Click Save | Successful update message is displayed |
| In detail tab > In Customization > Click Add a customization fields twice > Save and publish | Successful update message is displayed |
| * clic on the three dot next to "Go to catalog" <br> * Clic on preview | * You should have 4 button displayed<br> * You should see your product on the FO with two text field |
| * Clic on "Save customization"<br> * Set the text field and the file selection<br> * Clic on "Save customization" | * You should have a message under "lorem ipsum" : "Please fill out this field" and under "lorem ipsumm" : "Please select a file"<br> * Your should hide the grey "your message here" with your text and the grey "no selected file" with your image's name <br> * You should have your text next to "Your customization", your image next to "Remove Image" and "Add to cart" should be enabled |
