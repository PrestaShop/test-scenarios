---
title: "BO - Shop Parameters - General - Enable / Disable Brands"
weight: 2
---

# BO - Shop Parameters - General - Enable / Disable Brands
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to FO > Scroll down to footer > Click on Sitemap > Click on Brands | See that Brands page is displayed. |
| Go to BO > Catalog > Brands & Suppliers | Blue alert is displayed : "The display of your brands is enabled on your store. Go to [Shop Parameters > General|http://develop:8888/admin-dev/index.php/configure/shop/preferences/preferences?_token=UypSSVWK9eBBg2AxKgciu-VKCtumCmAl_0o4KRg2ygU] to edit settings." |
| Go to BO > Shop Parameters > General > Disable Display Brands > Save | Page title contains 'Preferences'<br><br>Message Successful update is displayed |
| Go to FO > Scroll down to footer > Click on Sitemap | See that the Brands page link is not displayed |
| Go to BO > Catalog > Brands & Suppliers | Blue alert is displayed : "The display of your brands is disabled on your store. Go to [Shop Parameters > General|http://develop:8888/admin-dev/index.php/configure/shop/preferences/preferences?_token=UypSSVWK9eBBg2AxKgciu-VKCtumCmAl_0o4KRg2ygU] to edit settings." |
