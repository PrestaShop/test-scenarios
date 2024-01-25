---
title: "BO - International - Taxes - Tax Options Form"
weight: 4
---

# BO - International - Taxes - Tax Options Form
## Details
* **Component** : Core
* **Status** : Automated
* **Automated on** : 1.7.8.x, 1.7.7.x, 8.0.x, 8.1.x, 9.0.x
* **Scenario** : https://forge.prestashop.com/browse/TEST-1026
* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/tests/UI/campaigns/functional/BO/11_international/03_taxes/01_taxes/04_taxOptionsForm.ts
* **Specification** : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/international/taxes-1/taxes-listing

## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO | Login Page is displayed |
| Sign in | Dashboard Page is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Delivery address',<br>useEcoTax: true, | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Delivery address',<br>useEcoTax: true,<br>ecoTax: 'EU VAT For Virtual Products', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Delivery address',<br>useEcoTax: true,<br>ecoTax: 'FR Taux réduit (10%)', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Delivery address',<br>useEcoTax: true,<br>ecoTax: 'FR Taux réduit (5.5%)', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Delivery address',<br>useEcoTax: true,<br>ecoTax: 'FR Taux standard (20%)', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Delivery address',<br>useEcoTax: true,<br>ecoTax: 'FR Taux super réduit (2.1%)', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Invoice address',<br>useEcoTax: true,<br>ecoTax: 'EU VAT For Virtual Products', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Invoice address',<br>useEcoTax: true,<br>ecoTax: 'FR Taux réduit (10%)', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Invoice address',<br>useEcoTax: true,<br>ecoTax: 'FR Taux réduit (5.5%)', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Invoice address',<br>useEcoTax: true,<br>ecoTax: 'FR Taux standard (20%)', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Invoice address',<br>useEcoTax: true,<br>ecoTax: 'FR Taux super réduit (2.1%)', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Invoice address',<br>useEcoTax: true,<br>ecoTax: 'No tax', | Update Successful<br>Message is displayed |
| Change Tax Options to :<br>enabled: true,<br>displayInShoppingCart: false,<br>basedOn: 'Delivery address',<br>useEcoTax: false, | Update Successful<br>Message is displayed |
